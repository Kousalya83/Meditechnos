<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Casestudies extends CI_Controller {

	public function index()
	{
		$id = $this->uri->segment('2');
		$data = array();
		$data['title'] = "Case Studies | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "Incorporate Automation - We aim of providing RCM services in the machine learning approach, MediTechnos Solutions has expertise in providing RCM services.";

		$this->load->view('fixed/header', $data);
		if ($id == 2) {
			$this->load->view('cases/2nd_case_studies');
		}
		else{
			$this->load->view('cases/1st_case_studies');
		}
		$this->load->view('fixed/footer');
	}
}

/* End of file Casestudies.php */
/* Location: ./application/controllers/Casestudies.php */