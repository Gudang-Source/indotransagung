<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// $data['title'] = 'login';
		$this->load->view('landing', FALSE);
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */