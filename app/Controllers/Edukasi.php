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
		])
			->getBody();
		$this->data['api'] = json_decode($response, true);
		$artikel = $this->data['api']['data'];
		if (!$artikel) {
			$this->errorDataNotfound();
			return;
		}

		$message = [];
		$message['status'] = 'ok';
		$message['message'] = $this->data['api']['message'];
		$messageDelete = [];
		if (!empty($_POST['delete'])) {
			$messageDelete = $this->model->deleteArtikel();
		}
		$this->data['title'] = 'Edit Media Edukasi';
		$this->data['artikel'] = $artikel;
		$this->data['message'] = $message;
		$this->data['messageDelete'] = $messageDelete;
		// dd($this->data);
		$this->view('edukasi-result.php', $this->data);
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

	public function edit()
	{
		$this->data['title'] = 'Edit Media Edukasi';
		if (empty($_GET['id'])) {
			$this->errorDataNotFound();
			return;
		}

		$message = [];
		if (!empty($_POST['submit'])) {
			$save = $this->model->saveData();
			$message = $save['message'];
		}

		$set_data = $this->model->setData($_GET['id'], $this->whereOwn());
		if (!$set_data['artikel']) {
			$this->errorDataNotFound();
			return;
		}

		foreach ($set_data['artikel'] as $key => $val) {
			$this->data[$key] = $val;
		}

		$this->data = array_merge($this->data, $set_data);
		$this->data['message'] = $message;

		$this->view('edukasi-form.php', $this->data);
	}
}
