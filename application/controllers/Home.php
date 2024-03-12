<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['title'] = "Home | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "Set up an account or log into MediTechnos to receive updates. Connect with the appropriate service medical specialists.";

		$this->load->view('fixed/header', $data);
		$this->load->view('home');
		$this->load->view('fixed/footer');
	}

	public function phpinfo()
	{	
		$this->load->view('phpinfo');
	}
}
