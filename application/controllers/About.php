<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
		$data['title'] = "About Us | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "MediTechnos Solutions is a leading AI-based rcm denial management service provider in the healthcare industry. The company offers a wide range of services.";

		$this->load->view('fixed/header', $data);
		$this->load->view('who_we_are');
		$this->load->view('fixed/footer');
	}
}
