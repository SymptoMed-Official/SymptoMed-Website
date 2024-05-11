<?php

namespace App\Controllers;
use App\Models\EdukasiModel;

class Validasi extends BaseController
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
    //GET From API
    $response = $this->callApiPublic([
      'method' => 'GET',
      'path' => $this->urlAPI . '/validasi', //ganti validasi
    ])
      ->getBody();
    $this->data['api'] = json_decode($response, true);
    $this->view('validasi', $this->data);
  }

  public function edit()
	{
		$this->data['title'] = 'Edit Validasi';
		if (empty($_GET['id'])) {
			$this->errorDataNotFound();
			return;
		}

		$message = [];
		//Update To API
		if (!empty($_POST['submit'])) {
			$response = $this->callApi([
				'method' => 'PATCH',
				'path' => $this->urlAdminAPI . '/validasi/update?id=' . $_GET['id'],
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
			'path' => $this->urlAPI . '/validasi?id=' . $_GET['id'],
		]);
		$this->data['api'] = json_decode($response->getBody(), true);
		if ($response->getStatusCode() != 200) {
			$this->errorDataNotfound();
			return;
		}
		$this->data = array_merge($this->data, $this->data['api']['data']);
		$this->data['message'] = $message;
		// dd($this->data);
		$this->view('validasi-form.php', $this->data);
	}

  public function add()
  {
	$this->data['title'] = 'Add Validasi Data ML';

	$message = [];
	$id_validasi = '';
	$artikel = [];
	if (!empty($_POST['submit'])) {
		$save = $this->model->saveData();
		$message = $save['message'];
		if ($message['status'] == 'ok') {
			$id_validasi = $save['id_validasi'];
			$data['title'] = 'Edit Validasi Data ML';
		}
	}

	$set_data = $this->model->setData($id_validasi, $this->whereOwn());

	if ($set_data['artikel']) {
		foreach ($artikel as $key => $val) {
			$data[$key] = $val;
		}
	}

	$this->data = array_merge($this->data, $set_data);
	$this->data['message'] = $message;
    $this->view("validasi-form.php",$this->data);
  }
}
