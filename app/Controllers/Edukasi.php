<?php

namespace App\Controllers;

use App\Models\EdukasiModel;

class Edukasi extends BaseController
{
	private $configFilepicker;

	public function __construct()
	{
		parent::__construct();
		$this->model = new EdukasiModel;
		$this->configFilepicker = new \Config\Filepicker();

		$this->addJs(
			'
			var filepicker_server_url = "' . $this->configFilepicker->serverURL . '";
			var filepicker_icon_url = "' . $this->configFilepicker->iconURL . '";',
			true
		);

		$this->addJs($this->config->baseURL . 'public/vendors/jquery.select2/js/select2.full.min.js');
		$this->addJs($this->config->baseURL . 'public/vendors/tinymce/tinymce.js');
		$this->addJs($this->config->baseURL . 'public/vendors/flatpickr/dist/flatpickr.js');
		$this->addJs($this->config->baseURL . 'public/themes/modern/js/artikel.js');

		$this->addStyle($this->config->baseURL . 'public/themes/modern/css/artikel.css');
		$this->addStyle($this->config->baseURL . 'public/vendors/flatpickr/dist/flatpickr.min.css');
		$this->addStyle(['attr' => ['id' => 'style-head-flatpickr'], 'url' => $this->config->baseURL . 'public/vendors/flatpickr/dist/themes/' . $this->themeMode . '.css?r=' . time()]);
		$this->addStyle($this->config->baseURL . 'public/vendors/jquery.select2/css/select2.min.css');
		$this->addStyle($this->config->baseURL . 'public/vendors/dropzone/dropzone.min.css');

		$this->addJs($this->config->baseURL . 'public/vendors/jwdfilepicker/jwdfilepicker.js');
		$this->addJs($this->config->baseURL . 'public/themes/modern/js/jwdfilepicker-defaults.js');
		$this->addJs($this->config->baseURL . 'public/vendors/dropzone/dropzone.min.js');
		$this->addStyle($this->config->baseURL . 'public/vendors/jwdfilepicker/jwdfilepicker.css');
		$this->addStyle($this->config->baseURL . 'public/vendors/jwdfilepicker/jwdfilepicker-loader.css');
		$this->addStyle($this->config->baseURL . 'public/vendors/jwdfilepicker/jwdfilepicker-modal.css');
	}

	public function index()
	{
		//Get From API
		$response = $this->callApiPublic([
			'method' => 'GET',
			'path' => $this->urlAPI . '/article?type=all',
		]);
		$this->data['api'] = json_decode($response->getBody(), true);
		if ($response->getStatusCode() != 200) {
			$this->errorDataNotfound();
			return;
		}
		$artikel = $this->data['api']['data'];

		$message = [];
		$messageDelete = [];
		$message['status'] = 'ok';
		$message['message'] = $this->data['api']['message'];
		if (!empty($_POST['delete'])) {
			// Delete from API
			$response = $this->callApi([
				'method' => 'DELETE',
				'path' => $this->urlAdminAPI . '/article/delete' . $_POST['delete'],
			]);
			$body = $response->getBody();
			$statusCode = $response->getStatusCode();
			$this->data['api'] = json_decode($body, true);

			if ($statusCode == 200) {
				$messageDelete['status'] = 'ok';
				$messageDelete['message'] = $this->data['api']['message'];
			} else {
				$messageDelete['status'] = 'error';
				$messageDelete['message'] = $this->data['api']['message'];
			}
		}
		$this->data['title'] = 'Edit Media Edukasi';
		$this->data['artikel'] = $artikel;
		$this->data['message'] = $message;
		$this->data['messageDelete'] = $messageDelete;
		// dd($this->data);
		$this->view('edukasi-result.php', $this->data);
	}

	public function edit()
	{
		$this->data['title'] = 'Edit Media Edukasi';
		if (empty($_GET['id'])) {
			$this->errorDataNotFound();
			return;
		}

		$message = [];
		//Update To API
		if (!empty($_POST['submit'])) {
			$response = $this->callApi([
				'method' => 'PATCH',
				'path' => $this->urlAdminAPI . '/article/update?id=' . $_GET['id'],
				'postdata' => $_POST
			]);
			$body = $response->getBody();
			$statusCode = $response->getStatusCode();
			$this->data['api'] = json_decode($body, true);
			$message = $this->data['api']['message'];
		}

		//Get From API By ID
		$response = $this->callApiPublic([
			'method' => 'GET',
			'path' => $this->urlAPI . '/article?id=' . $_GET['id'],
		]);
		$this->data['api'] = json_decode($response->getBody(), true);
		if ($response->getStatusCode() != 200) {
			$this->errorDataNotfound();
			return;
		}
		$this->data = array_merge($this->data, $this->data['api']['data']);
		$this->data['message'] = $message;
		// dd($this->data);
		$this->view('edukasi-form.php', $this->data);
	}

	public function add()
	{
		$this->data['title'] = 'Add Media Edukasi';

		$message = [];
		$id_artikel = '';
		$artikel = [];
		if (!empty($_POST['submit'])) {
			$save = $this->model->saveData();
			$message = $save['message'];
			if ($message['status'] == 'ok') {
				$id_artikel = $save['id_artikel'];
				$data['title'] = 'Edit Media Edukasi';
			}
		}

		$set_data = $this->model->setData($id_artikel, $this->whereOwn());

		if ($set_data['artikel']) {
			foreach ($artikel as $key => $val) {
				$data[$key] = $val;
			}
		}

		$this->data = array_merge($this->data, $set_data);
		$this->data['message'] = $message;

		$this->view('edukasi-form.php', $this->data);
	}
}
