<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('printer_model');
    }

	public function index()
    {
        $data['printers'] = $this->printer_model->get_printers();
        $this->load->view('welcome_message', $data);
    }
}
