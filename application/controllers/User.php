<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function index($id)
	{
		$data["bodyClass"] = "nav-btn-only homepage";
		
		$user_data = $this->session->userdata("LoggedUser");
		
		//if(isset($id)){
		//	$userID = $id;
		//	$data["userView"] = "admin";
		//}else{
		//	$userID = $user_data["UserID"];
		//	$data["userView"] = "self";
		//}
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$query = $this->db->query("SELECT gs_model FROM tbl_specificationmaster Group By gs_model Order By gs_model ASC");
		$data["model"] = $query->result();
		
		$query = $this->db->query("SELECT * FROM tbl_user WHERE ID = '$id'");
		$data["user"] = $query->row();
		
		$query = $this->db->query("SELECT car_brand FROM tbl_specificationmaster Group By car_brand Order By car_brand ASC");
		$data["brand"] = $query->result();
		
		$data["LoggedUser"] = $user_data;
		$this->load->view('header', $data);
		$this->load->view('user/index.php',$data);
		$this->load->view('footer');
	}
	
	public function listing($userID)
	{
		$user_data = $this->session->userdata("LoggedUser");
		$data["LoggedUser"] = $user_data;
		
		$data["bodyClass"] = "";
		//$user_data = $this->session->userdata("LoggedUser");
		//$userID = $user_data["UserID"];
		
		$query = $this->db->query("SELECT * FROM tbl_user WHERE ID = '$userID'");
		$data["user"] = $query->row();
		
		$query = $this->db->query("SELECT *,S.Name AS StateName, L.ID AS LID,L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID LEFT JOIN tbl_state AS S ON L.State = S.ID WHERE L.AddedBy = $userID GROUP BY L.ID");
		$listingData = $query->result();
		$data["listingData"] = $listingData;
		
		$query = $this->db->query("SELECT gs_model FROM tbl_specificationmaster Group By gs_model Order By gs_model ASC");
		$data["model"] = $query->result();
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$query = $this->db->query("SELECT car_brand FROM tbl_specificationmaster Group By car_brand Order By car_brand ASC");
		$data["brand"] = $query->result();
		
		$this->load->view('header', $data);
		$this->load->view('user/listing.php',$data);
		$this->load->view('footer');
	}
	
	public function favourite($userID)
	{
		$user_data = $this->session->userdata("LoggedUser");
		$data["LoggedUser"] = $user_data;
		
		$data["bodyClass"] = "";
		//$user_data = $this->session->userdata("LoggedUser");
		//$userID = $user_data["UserID"];
		
		$query = $this->db->query("SELECT * FROM tbl_user WHERE ID = '$userID'");
		$data["user"] = $query->row();
		
		$query = $this->db->query("SELECT *,S.Name AS StateName, L.ID AS LID,L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy FROM tbl_favourite AS F LEFT JOIN tbl_listing AS L ON F.ListingID = L.ID LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID LEFT JOIN tbl_state AS S ON L.State = S.ID WHERE F.UserID = $userID GROUP BY L.ID");
		$listingData = $query->result();
		$data["listingData"] = $listingData;
		
		$query = $this->db->query("SELECT gs_model FROM tbl_specificationmaster Group By gs_model Order By gs_model ASC");
		$data["model"] = $query->result();
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$query = $this->db->query("SELECT car_brand FROM tbl_specificationmaster Group By car_brand Order By car_brand ASC");
		$data["brand"] = $query->result();
		
		$this->load->view('header', $data);
		$this->load->view('user/favourite.php',$data);
		$this->load->view('footer');
	}
	
	public function upload($mode)
	{		
		$config['upload_path']          = 'assets/img/profile/';
		$config['allowed_types']        = 'jpg|jpeg|png';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file'))
		{
			$photodata = $this->upload->data();
			$uploaded_file_name = $photodata['file_name'];
		}else{
			if($mode == 'add'){
				$uploaded_file_name = 'default.jpg';
			}else{
				$uploaded_file_name = 'no need to change';
			}
		}
		
		echo $uploaded_file_name;
	}
	
	public function update()
	{
		$IsImgChange = $this->input->post("hIsImgChange");	
		$ID = $this->input->post("hID");
		$FirstName = $this->input->post("first_name");
		$LastName = $this->input->post("last_name");
		$EmailAddress = $this->input->post("email");
		$MobileNo = $this->input->post("phone");
		$IdentityCardNo = $this->input->post("identity_card_no");
		$State = $this->input->post("state");
		$Address = $this->input->post("address");
		$Latitude = $this->input->post("latitude");
		$Longitude = $this->input->post("longitude");
		
		if($IsImgChange == "1"){
			$config["upload_path"]          = "assets/img/profile";
			$config["allowed_types"]        = "gif|jpg|png";

			$this->load->library("upload", $config);

			if (!$this->upload->do_upload("user_image"))
			{
					$error = array("error" => $this->upload->display_errors());
					echo $this->upload->display_errors();
			}
			else
			{
					$data = array("upload_data" => $this->upload->data());
					$ProfilePic = $this->upload->data("file_name");
			}
			
			$dataarray = array(
				"FirstName" => $FirstName,
				"LastName" => $LastName,
				"EmailAddress" => $EmailAddress,
				"MobileNo" => $MobileNo,
				"IdentityCardNo" => $IdentityCardNo,
				"State" => $State,
				"Address" => $Address,
				"Latitude" => $Latitude,
				"Longitude" => $Longitude,
				"ProfilePic" => $ProfilePic
			);			
		}else{
			$dataarray = array(
				"FirstName" => $FirstName,
				"LastName" => $LastName,
				"EmailAddress" => $EmailAddress,
				"MobileNo" => $MobileNo,
				"IdentityCardNo" => $IdentityCardNo,
				"State" => $State,
				"Address" => $Address,
				"Latitude" => $Latitude,
				"Longitude" => $Longitude
			);			
		}
		
		$this->db->set($dataarray);
		$this->db->where("ID", $ID);
		$this->db->update("tbl_user");
		
		
		$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$EmailAddress'");
		
		$userData = $query->row();
		
		
		
		$user_data = $this->session->userdata("LoggedUser");
		
		if($user_data["UserID"] == $ID){
			$session_data = array(
				"UserID" => $userData->ID,
				"FirstName" => $userData->FirstName,
				"EmailAddress" => $userData->EmailAddress,
				"Type" => $userData->Type,
				"Group" => $userData->Group
			);
			$this->session->set_userdata("LoggedUser", $session_data);			
		}
		
		redirect($_SERVER['HTTP_REFERER']);
		//redirect("main");
	}
	
	public function sendchangepwdnotfication($pEmailAddress, $pFullName)
	{
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
		$this->email->from($this->config->item('hucp_mail_from_email'), $this->config->item('hucp_mail_from_name'));
		$this->email->to($pEmailAddress);  
		$this->email->subject("Password Changed");
		$this->email->message("Dear ".$pFullName.",<br/><br/>This is an automated email to inform you that your password has been changed. Please contact us if you not doing it.<br/><br/>Thanks<br/>Korean Used Car");
		$this->email->send();		
	}
	
	function sendSmsToEsms($pUserID, $pMobileNo)
	{
		$this->load->library('curl');
		$this->load->helper("string");
		$genToken = mt_rand(100000, 999999);
		
		$data = array(
		   "MobileNo" => $pMobileNo,
		   "UserID" => $pUserID,
		   "Token" => $genToken,
		   "IsVerify" => 0,
		   "ExpiryDate" => date("Y-m-d H:i:s", time() + 259200)
		);

		$this->db->insert("tbl_verifymobile", $data);
		
		$url = $this->config->item('esms_api');
		
		// replace yourusername, yourpassword, and 60123456789 to suits your need
		$data = array('user' => $this->config->item('esms_username'), 
			'pass' => $this->config->item('esms_pwd'), 
			'to' => $pMobileNo, 
			'msg' => 'RM0.00 [Korean Used Car] Your mobile verification code is '.$genToken.'.');

		$options = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded",
				'method'  => 'POST',
				'content' => http_build_query($data)
			)
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === FALSE) { /* Handle error */ }

		return $result;
	}
	
	public function ajax()
	{
		$obj = json_decode($this->input->post('datastr'));
		$mode = $obj->mode;
		
		switch($mode){
			case "SendMobileVCode":
				$UserID = $obj->UserID;
				$MobileNo = $obj->MobileNo;
				$result = $this->sendSmsToEsms($UserID,$MobileNo);
				
				echo $result;
				//https://www.esms.com.my/
				//0	Success.
				//1	Insufficient parameters
				//	Please make sure all mandatory parameter exists.
				//2	Invalid calling IP
				//	You are getting this error because you've previously requested your account to be able to call only from certain IP, and you're not calling from the designated IP.
				//3	Invalid username/password combination.
				//	If you believe this is an error, kindly contact our support team at support@esms.com.my.
				//4	Invalid country code
				//	The country code of the phone number you provides is not recognized.
				//	For Malaysia recipients, do remember to send to 60123456789 instead of 0123456789.
				//5	Insufficient credits
				//	Contact your account manager for reload procedures.
				//6	Internal error
				//	You may retry again shortly.
				//7	Invalid "type" parameter
				//	Please use only "0" Normal (ASCII) SMS or "8" for Unicode SMS.
				//8	Content too long
				//	SMS can only contains maximum of 1530 GSM characters for Normal SMS, and 670 characters for Unicode SMS.
				//9	Invalid "to" parameter
				//	Please include only numeric in "to" parameter
				//	For example, please send 60123456789 instead of 60-12 345 6789
				//10	Invalid message content
				//	For SMS to Malaysia mobile phones, you're required to append RM0.00<space> at the front of the message 
				//	For example, intead of sending Thank you for purchasing product A. 
				//	You should send RM0.00 Thank you for purchasing product A.
			break;
			case "ConfirmVerificationCode":
				$UserID = $obj->UserID;
				$MobileNo = $obj->MobileNo;
				$Token = $obj->Token;
				
				$query = $this->db->query("SELECT * FROM tbl_verifymobile WHERE Token = '$Token' AND UserID = $UserID AND MobileNo = '$MobileNo'");
				
				if($query->num_rows() > 0){
					$tokenData = $query->row();
					
					if($tokenData->IsVerify == 1){
						echo "already verified";
					}else{
						$date1=date_create($tokenData->ExpiryDate);
						$date2=date_create(date("Y-m-d H:i:s"));
						$diff=date_diff($date1,$date2);
						$days = $diff->format("%a");
						if($days > 3){
							echo "verification code expired";
						}else{
							$dataarray = array(
								"MobileVerification" => 1
							);

							$this->db->set($dataarray);
							$this->db->where("ID", $tokenData->UserID);
							$this->db->where("MobileNo", $tokenData->MobileNo);
							$this->db->update("tbl_user");
							
							
							$dataarray = array(
								"IsVerify" => 1
							);

							$this->db->set($dataarray);
							$this->db->where("ID", $tokenData->ID);
							$this->db->update("tbl_verifymobile");
							
							echo "Mobile number verified.";
						}
					}
				}else{
					echo "Could not verify given code. Please enter 6-digits code that received from ".$MobileNo.".";
				}
			break;
			case "CheckCurrentPassword":
				$this->load->library('bcrypt');
				
				$UserID = $obj->UserID;
				$CurrentPwd = $obj->Password;
				$query = $this->db->query("SELECT * FROM tbl_user WHERE ID = '$UserID'");
				$userData = $query->row();
					
				if($this->bcrypt->check_password($CurrentPwd, $userData->Password) == false) {
					echo "Current password wrong.";
				}else{
					echo "Passed";
				}
			break;
			case "UpdatePassword":
				$this->load->library('bcrypt');
				
				$UserID = $obj->UserID;
				$EmailAddress = $obj->EmailAddress;
				$FullName = $obj->FirstName." ".$obj->LastName;
				$NewPwd = $obj->Password;
				$hash = $this->bcrypt->hash_password($NewPwd);
				
				$dataarray = array(
					"Password" => $hash
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $UserID);
				$this->db->update("tbl_user");
				$this->sendchangepwdnotfication($EmailAddress, $FullName);
				echo "Password successfully changed.";
			break;
			case "UpdateDetails":
				$ProfilePic = $obj->ProfilePic;	
				$ID = $obj->hID;
				$FirstName = $obj->first_name;
				$LastName = $obj->last_name;
				$EmailAddress = $obj->email;
				$MobileNo = $obj->phone;
				$IdentityCardNo = $obj->identity_card_no;
				$State = $obj->state;
				$Address = $obj->address;
				$Latitude = $obj->latitude;
				$Longitude = $obj->longitude;
				
				if(isset($ProfilePic)){					
					$dataarray = array(
						"FirstName" => $FirstName,
						"LastName" => $LastName,
						"EmailAddress" => $EmailAddress,
						"MobileNo" => $MobileNo,
						"IdentityCardNo" => $IdentityCardNo,
						"State" => $State,
						"Address" => $Address,
						"Latitude" => $Latitude,
						"Longitude" => $Longitude,
						"ProfilePic" => $ProfilePic
					);			
				}else{
					$dataarray = array(
						"FirstName" => $FirstName,
						"LastName" => $LastName,
						"EmailAddress" => $EmailAddress,
						"MobileNo" => $MobileNo,
						"IdentityCardNo" => $IdentityCardNo,
						"State" => $State,
						"Address" => $Address,
						"Latitude" => $Latitude,
						"Longitude" => $Longitude
					);			
				}
				
				$this->db->set($dataarray);
				$this->db->where("ID", $ID);
				$this->db->update("tbl_user");
				
				echo $EmailAddress;
				
				$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$EmailAddress'");
				
				$userData = $query->row();
				
				
				$user_data = $this->session->userdata("LoggedUser");
		
				if($user_data["UserID"] == $ID){
					$session_data = array(
						"UserID" => $userData->ID,
						"FirstName" => $userData->FirstName,
						"EmailAddress" => $userData->EmailAddress,
						"Type" => $userData->Type,
						"Group" => $userData->Group
					);
					$this->session->set_userdata("LoggedUser", $session_data);			
				}
			break;
			case "CheckEmailExist":
				$UserID = $obj->UserID;
				$NewEmail = $obj->NewEmail;
				$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$NewEmail'");
				$userData = $query->row();
				
				if($query->num_rows() > 0){
					if($userData->ID != $UserID){
						echo "Failed";
					}
				}else{
					echo "Passed";
				}
			break;
		}
	}
}
