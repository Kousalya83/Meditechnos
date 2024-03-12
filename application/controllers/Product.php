<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		redirect('');
	}

	public function get_demo()
	{
		$data = array();
		$data['title'] = "Get Demo | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "A Demo healthcare RCM is an evolving/demanding industry that needs innovative solutions. Cutting-edge technology, combined with Client-centric services.";

		$this->load->view('fixed/header',$data);
		$this->load->view('get_a_demo');
		$this->load->view('fixed/footer');
	}

	public function quat()
	{
		$data = array();
		$data['title'] = "QuaT | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "QuaT Automation is a new tool that streamlines the insurance process for businesses and individuals. By utilizing advanced AI and Machine Learning.";
		
		$this->load->view('fixed/header',$data);
		$this->load->view('products/quat');
		$this->load->view('fixed/footer');
	}

	public function quat_login()
	{
		$quat = "https://quat.meditechnos.com";
		redirect($quat);
	}

	public function prodt()
	{
		$data = array();
		// $data['title'] = "";
		// $data['description'] = "";
		
		$this->load->view('fixed/header',$data);
		$this->load->view('products/prodt');
		$this->load->view('fixed/footer');
	}

	public function prodt_login()
	{
		// $prodt = "";
		// redirect($prodt);
		$this->load->view('fixed/header');
		$this->load->view('landing/launching_soon');
		$this->load->view('fixed/footer');
	}

	public function verit()
	{
		$data = array();
		$data['title'] = "VeriT | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "Simplified healthcare needs: MediTechnos simplifies complex revenue cycle management tasks, making them more manageable and efficient.";
		
		$this->load->view('fixed/header',$data);
		$this->load->view('products/verit');
		$this->load->view('fixed/footer');
	}

	public function verit_login()
	{
		// $verit = "";
		// redirect($verit);
		$this->load->view('fixed/header');
		$this->load->view('landing/launching_soon');
		$this->load->view('fixed/footer');
	}

	public function doat()
	{
		$data = array();
		// $data['title'] = "";
		// $data['description'] = "";
		
		$this->load->view('fixed/header',$data);
		$this->load->view('products/doat');
		$this->load->view('fixed/footer');
	}

	public function doat_login()
	{
		// $doat = "";
		// redirect($doat);
		$this->load->view('fixed/header');
		$this->load->view('landing/launching_soon');
		$this->load->view('fixed/footer');
	}

	public function claist()
	{
		$data = array();
		$data['title'] = "ClaisT | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "A healthcare RCM is an evolving/demanding industry that needs innovative solutions. Cutting-edge technology, combined with Client-centric services.";
		
		$this->load->view('fixed/header',$data);
		$this->load->view('products/claist');
		$this->load->view('fixed/footer');
	}

	public function claist_login()
	{
		// $claist = "";
		// redirect($claist);
		$this->load->view('fixed/header');
		$this->load->view('landing/launching_soon');
		$this->load->view('fixed/footer');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */