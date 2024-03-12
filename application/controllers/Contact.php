<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller{

	public function index()
	{
		$data = array();
		$data['title'] = "Contact | MediTechnos Solutions - Incorporate Automation";
		$data['description'] = "Would you like to communicate? We'd be delighted to hear from you. How to get in touch with us is provided below.";

		$this->load->view('fixed/header', $data);
		$this->load->view('contact_us');
		$this->load->view('fixed/footer');
	}

	public function get_service()
	{
		$contact['name'] = $_POST['username'];
		$contact['companyname'] = $_POST['companyname'];
		$contact['company_number'] = $_POST['mobile'];
		$contact['mobile'] = $_POST['company_number'];
		$contact['email'] = $_POST['email'];
		$contact['democontent'] = $_POST['democontent'];
		$contact['practicename'] = $_POST['practicename'];
		$contact['textarea'] = $_POST['textarea'];
		$contact['referral_code'] = $_POST['referral_code'];

		$check_send = $this->Admin_models->get_service_mail($contact);
		if($check_send==true){
			if ($contact['referral_code'] != "") {
				// $this->load->view('contact_success');
				$this->load->view('landing/swal');
			}
			else{
				$this->load->view('fixed/header');
				$this->load->view('contact_success');
				$this->load->view('fixed/footer');
			}
		}
		else{
			echo "<script>
			alert('Server Error. Try again after sometime.');
			window.location.href = '".base_url('product/get_demo')."';
			</script>";
		}
	}

	public function registerSubmit()
	{
		$recaptcha_token = $this->input->post('recaptcha_token');
		$secret = $this->config->item('recaptcha_secret_key');
		$response = $recaptcha_token;
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $response;
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($curl);
		$status = json_decode($output, true);
		
		if ($status['success'] == true) {
			$this->get_service();
		} else {
			// $this->get_service();
			echo "<script>
			alert('Something went wrong. Try again after sometime.');
			window.location.href = '".base_url('product/get_demo')."';
			</script>";
		}
	}
}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */
