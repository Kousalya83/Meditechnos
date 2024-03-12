<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

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
		$data['title'] = "Sitemap | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "Explore our sitemap to find the information you need and experience the power of technology-driven healthcare transformation with Meditechnos Solutions.";

		$this->load->view('fixed/header', $data);
		$this->load->view('sitemap');
		$this->load->view('fixed/footer');
	}
}
