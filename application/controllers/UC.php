<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UC extends CI_Controller {

	public function index()
	{
		$this->load->view('404');
	}

	public function under_construction()
	{
		$this->load->view('fixed/header');
		$this->load->view('landing/under_construction');
		$this->load->view('fixed/footer');
	}

	public function launching_soon()
	{
		$this->load->view('fixed/header');
		$this->load->view('landing/launching_soon');
		$this->load->view('fixed/footer');
	}
	public function swal()
	{
		$this->load->view('landing/swal');
		// $this->load->view('fixed/header');
		// $this->load->view('contact_success');
		// $this->load->view('fixed/footer');
	}

}

/* End of file UC.php */
/* Location: ./application/controllers/UC.php */