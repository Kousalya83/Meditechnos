<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policies extends CI_Controller {

	public function index()
	{
		redirect('');
	}

	public function terms_conditions()
	{
		$data = array();
		$data['title'] = "Terms & Conditions | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "Search Engines, News Organizations, Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed.";

		$this->load->view('fixed/header', $data);
		$this->load->view('policies/terms_conditions');
		$this->load->view('fixed/footer');
	}
	
	public function cookies_policy()
	{
		$data = array();
		$data['title'] = "Cookies Policy | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "If you create an account with us then we will use cookies for the management of the signup process and general administration.";

		$this->load->view('fixed/header', $data);
		$this->load->view('policies/cookies_policy');
		$this->load->view('fixed/footer');
	}

	public function privacy_policy()
	{
		$data = array();
		$data['title'] = "Privacy Policy | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "MediTechnos website, is a data controller of your personal data. We have adopted this Privacy Policy, which determines how we are processing the information.";

		$this->load->view('fixed/header', $data);
		$this->load->view('policies/privacy_policy');
		$this->load->view('fixed/footer');
	}

}

/* End of file Policies.php */
/* Location: ./application/controllers/Policies.php */