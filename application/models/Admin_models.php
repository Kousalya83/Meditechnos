<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_models extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function __destruct() {
		$this->db->close();
	}

	function get_service_mail($contact = array()){//function for GET A SERVICE

		$clientname = $contact['name'];
		$companyname = $contact['companyname'];
		$mobile = $contact['mobile'];
		$clientemail = $contact['email'];
		// $servicename = $contact['practicename'];
		$democontent = $contact['democontent'];
		$demoname = $contact['practicename'];
		$message = $contact['textarea'];
		$referral_code = $contact['referral_code'];

		// $from_email=FROM_NAME;
		$from_email='noreply@meditechnos.com';
		$to_email = "company@meditechnos.com";
		// $cc_email = "";
		// $to_email = "p07balaraman@cviac.com";

		if ($referral_code == "mts001puru") {
			$cc_email = array('medicalbilling4u@gmail.com');
		}
		else if ($referral_code == "mts002gugh"){
			$cc_email = array('s.d.saravanagughan@gthreebusiness.com');
		}
		else if($referral_code == "mts003jeff"){
			$cc_email = array('j.mandellcarter@arrccllc.com');
		}
		else{
			$cc_email = "";
		}
		
		$mail_subject = $demoname." - Demo Request";
		$heading = $demoname." - Demo Request";

		$this->email->initialize(Array( 
  			'protocol' => 'smtp', 
		  	'smtp_host' => 'smtp.sendgrid.net',
		  	'smtp_user' => 'apikey', 
		  	'smtp_pass' => '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',
		  	'smtp_port' => 587,
		  	'crlf' => "\r\n",
  			'newline' => "\r\n"));

		$body_user='<!DOCTYPE html>
			<html>
			<head>
			    <style>
			        table {
			            font-family: arial, sans-serif;
			            border-collapse: collapse;
			            width: 80%;
			            margin: 0 auto;
			        }
			        td, th {
			            border: 1px solid #dddddd;
			            text-align: left;
			            padding: 8px;
			        }
			    </style>
			</head>
			<body>
			    <h1 style="text-align:center">'.$heading.'</h1>
			    <br>
			    <table>';
			    if ($referral_code != "") {
		$body_user .= '<tr>
							<td><b>Referral code</b></td>
			            	<td> : </td>
			            	<td>'.strtoupper($referral_code).'</td>
			        	</tr>';
			    }
		$body_user .= '<tr>
			            <td><b>Name</b></td>
			            <td> : </td>
			            <td>'.$clientname.'</td>
			        </tr>
			        <tr>
			            <td><b>Company name</b></td>
			            <td> : </td>
			            <td>'.$companyname.'</td>
			        </tr>
			        <tr>
			            <td><b>Company number</b></td>
			            <td> : </td>
			            <td>'.$mobile.'</td>
			        </tr>
			        <tr>
			            <td><b>Company mail</b></td>
			            <td> : </td>
			            <td>'.$clientemail.'</td>
			        </tr>
			        <tr>
			            <td><b>'.$democontent.' name</b></td>
			            <td> : </td>
			            <td>'.$demoname.'</td>
			        </tr>
			        <tr>
			            <td><b>Message</b></td>
			            <td> : </td>
			            <td>'.$message.'</td>
			        </tr>
			    </table>    
			</body>
			</html>';

		$this->email->set_mailtype("html");
		$this->email->from($from_email);
		$this->email->to($to_email);
		$this->email->cc($cc_email);
		$this->email->subject($mail_subject);
		$this->email->message($body_user);
		if (!$this->email->send()) return false;
		else return true;
	}
}

/* End of file Admin_models.php */
/* Location: ./application/models/Admin_models.php */