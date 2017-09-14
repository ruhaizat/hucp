<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPwd extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function verify($token)
	{
		$data["Token"] = $token;
		$data["bodyClass"] = "nav-btn-only homepage";
		$query = $this->db->query("SELECT * FROM tbl_forgotpwd WHERE Token = '$token'");
		$tokenData = $query->row();
		$data["Status"] = "";
		$data["chgPwdEmail"] = "";
		if($tokenData->IsUsed == 1){
			$data["Status"] = "AlreadyUsed";
		}else{
			$date1=date_create($tokenData->ExpiryDate);
			$date2=date_create(date("Y-m-d H:i:s"));
			$diff=date_diff($date1,$date2);
			$days = $diff->format("%a");
			if($days > 3){
				$data["Status"] = "LinkExpired";
			}else{
				$data["chgPwdEmail"] = $tokenData->EmailAddress;
				$data["Status"] = $tokenData->EmailAddress;
			}
		}
		
		$this->load->view("header", $data);
		$this->load->view("user/forgotpwd.php", $data);
		$this->load->view("footer");
	}		
	public function ajax()
	{
		$obj = json_decode($this->input->post("datastr"));
		$mode = $obj->mode;
		
		switch($mode){
			case "ForgotPassword":
				$EmailAddress = $obj->EmailAddress;
				
				$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$EmailAddress'");
				
				if($query->num_rows() == 0){
					echo "EmailNotExist";
				}else{
					$query = $this->db->query("SELECT * FROM tbl_forgotpwd WHERE EmailAddress = '$EmailAddress' AND IsUsed = 0");
					if($query->num_rows() != 0){
						$dbTime = strtotime($query->ExpiryDate);
						if(time() > $dbTime){
							echo "AlreadyApply";
						}
					}else{
						$this->load->helper("string");
						$genToken = random_string("alnum",50);
						
						$data = array(
						   "EmailAddress" => $EmailAddress,
						   "Token" => $genToken,
						   "IsUsed" => 0,
						   "ExpiryDate" => date("Y-m-d H:i:s", time() + 259200)
						);

						$this->db->insert("tbl_forgotpwd", $data);
						
						$config = Array(
							'protocol' => $this->config->item('hucp_mail_protocol'),
							'smtp_host' => $this->config->item('hucp_mail_smtp_host'),
							'smtp_port' => $this->config->item('hucp_mail_smtp_port'),
							'smtp_user' => $this->config->item('hucp_mail_smtp_user'),
							'smtp_pass' => $this->config->item('hucp_mail_smtp_pass'),
							'mailtype' => $this->config->item('hucp_mail_mailtype'),
							'charset' => $this->config->item('hucp_mail_charset'),
							'wordwrap' => $this->config->item('hucp_mail_wordwrap')
						);
						
						$this->load->library('email', $config);
						$this->email->set_newline("\r\n");
						$this->email->from($this->config->item('hucp_mail_mailer_email'), $this->config->item('hucp_mail_mailer_name'));
						$this->email->to($EmailAddress);  
						$this->email->subject("Forgot Password");
						$this->email->message("Dear New User,<br/><br/>Please click on below URL or paste into your browser to change your password<br/><br/> <a href='".base_url()."ForgotPwd/verify/".$genToken."'>Change password link</a>"."<br/><br/>This link will expired in 3 days.<br/><br/>Thanks<br/>Korean Used Car");
						$this->email->send();
							
						echo "OK";
					}
				}
			break;
			case "ChangePassword":
				$this->load->library('bcrypt');
				$EmailAddress = $obj->EmailAddress;
				$Password = $obj->Password;
				$Token = $obj->Token;
				
				$query = $this->db->query("SELECT * FROM tbl_forgotpwd WHERE Token = '$Token'");
				$tokenData = $query->row();
				
				$dataarray = array(
					"IsUsed" => 1
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $tokenData->ID);
				$this->db->update("tbl_forgotpwd");
				
				$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$tokenData->EmailAddress'");
				
				$userData = $query->row();
								
				$hash = $this->bcrypt->hash_password($Password);
				$this->db->query("UPDATE tbl_user SET Password = '".$hash."' WHERE EmailAddress = '$tokenData->EmailAddress'");
			break;
		}
	}
}
