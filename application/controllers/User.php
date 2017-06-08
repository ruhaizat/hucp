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
	public function index($id = NULL)
	{
		$data["bodyClass"] = "nav-btn-only homepage";
		
		$user_data = $this->session->userdata("LoggedUser");
		
		if(isset($id)){
			$userID = $id;
			$data["userView"] = "admin";
		}else{
			$userID = $user_data["UserID"];
			$data["userView"] = "self";
		}
		
		$query = $this->db->query("SELECT * FROM tbl_user WHERE ID = '$userID'");
		$data["user"] = $query->row();
		$data["LoggedUser"] = $user_data;
		$this->load->view('header', $data);
		$this->load->view('user/index.php',$data);
		$this->load->view('footer');
	}
	
	public function listing()
	{
		$data["bodyClass"] = "";
		$user_data = $this->session->userdata("LoggedUser");
		$userID = $user_data["UserID"];
		
		$query = $this->db->query("SELECT * FROM tbl_user WHERE ID = '$userID'");
		$data["user"] = $query->row();
		
		$query = $this->db->query("SELECT *, L.ID AS LID,M.Name AS ModelName, S.Name AS SpecificationName, L.AddedBy AS LAddedBy FROM tbl_listing AS L INNER JOIN tbl_model AS M ON L.Model = M.ID INNER JOIN tbl_specification AS S ON L.Specification = S.ID LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID WHERE L.AddedBy = $userID GROUP BY L.ID");
		$listingData = $query->result();
		$data["listingData"] = $listingData;
		
		$this->load->view('header', $data);
		$this->load->view('user/listing.php',$data);
		$this->load->view('footer');
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
		
		$session_data = array(
			"UserID" => $userData->ID,
			"FirstName" => $userData->FirstName,
			"EmailAddress" => $userData->EmailAddress,
			"Type" => $userData->Type,
			"Group" => $userData->Group
		);
		$this->session->set_userdata("LoggedUser", $session_data);
		echo "<script>alert('test 1234');</script>";
		redirect($_SERVER['HTTP_REFERER']);
		//redirect("main");
	}
	
	public function sendchangepwdnotfication($pEmailAddress, $pFullName)
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.ruhaizat.my',
			'smtp_port' => 587,
			'smtp_user' => 'suhucp@ruhaizat.my', // change it to yours
			'smtp_pass' => 'hyundai1234', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('suhucp@ruhaizat.my', "Admin Hyundai Used Car Platform");
		$this->email->to($pEmailAddress);  
		$this->email->subject("Password Changed");
		$this->email->message("Dear ".$pFullName.",<br/><br/>This is an automated email to inform you that your password has been changed. Please contact us if you not doing it.<br/><br/>Thanks<br/>Hyundai Used Car Platform");
		$this->email->send();		
	}
	
	//private function sendverifymobile($pUserID, $pMobileNo)
	//{
	//	$this->load->library('curl');
	//	$this->load->helper("string");
	//	$genToken = mt_rand(100000, 999999);
	//	
	//	$data = array(
	//	   "MobileNo" => $pMobileNo,
	//	   "UserID" => $pUserID,
	//	   "Token" => $genToken,
	//	   "IsVerify" => 0,
	//	   "ExpiryDate" => date("Y-m-d H:i:s", time() + 259200)
	//	);
    //
	//	$this->db->insert("tbl_verifymobile", $data);
	//	
	//	$destination = urlencode("60127872389789");
	//	$message = "RM0.00 [Hyundai Used Car Platform] Your mobile verification code is ".$genToken.".";
	//	$message = html_entity_decode($message, ENT_QUOTES, 'utf-8'); 
	//	$message = urlencode($message);
	//	
	//	$username = urlencode("me@ruhaizat.my");
	//	$password = urlencode("hyundai1234");
	//	//$sender_id = urlencode("66300");
	//	$type = 1;
    //
	//	$fp = "http://www.isms.com.my/isms_send.php";
	//	$fp .= "?un=$username&pwd=$password&dstno=$destination&msg=$message&type=$type";
	//	//echo $fp;
	//	
	//	$result = $this->ismscURL($fp);
    //
	//	return $result;
	//}
	//
	//function ismscURL($link){
    //
	//	$http = curl_init($link);
	//
	//	curl_setopt($http, CURLOPT_RETURNTRANSFER, TRUE);
	//	$http_result = curl_exec($http);
	//	$http_status = curl_getinfo($http, CURLINFO_HTTP_CODE);
	//	curl_close($http);
	//
	//	return $http_result;
    // }
	
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
		
		$url = 'https://api.esms.com.my/sms/send';
		
		// replace yourusername, yourpassword, and 60123456789 to suits your need
		$data = array('user' => 'Ruhaizat', 
			'pass' => 'ruhaizat@gmail', 
			'to' => $pMobileNo, 
			'msg' => 'RM0.00 [Hyundai Used Car Platform] Your mobile verification code is '.$genToken.'.');

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
	
	function send_message ( $post_body, $url ) {
		/*
		* Do not supply $post_fields directly as an argument to CURLOPT_POSTFIELDS,
		* despite what the PHP documentation suggests: cUrl will turn it into in a
		* multipart formpost, which is not supported:
		*/
	
		$ch = curl_init( );
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_POST, 1 );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_body );
		// Allowing cUrl funtions 20 second to execute
		curl_setopt ( $ch, CURLOPT_TIMEOUT, 20 );
		// Waiting 20 seconds while trying to connect
		curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 20 );
	
		$response_string = curl_exec( $ch );
		$curl_info = curl_getinfo( $ch );
	
		$sms_result = array();
		$sms_result['success'] = 0;
		$sms_result['details'] = '';
		$sms_result['transient_error'] = 0;
		$sms_result['http_status_code'] = $curl_info['http_code'];
		$sms_result['api_status_code'] = '';
		$sms_result['api_message'] = '';
		$sms_result['api_batch_id'] = '';
	
		if ( $response_string == FALSE ) {
			$sms_result['details'] .= "cURL error: " . curl_error( $ch ) . "\n";
		} elseif ( $curl_info[ 'http_code' ] != 200 ) {
			$sms_result['transient_error'] = 1;
			$sms_result['details'] .= "Error: non-200 HTTP status code: " . $curl_info[ 'http_code' ] . "\n";
		}
		else {
			$sms_result['details'] .= "Response from server: $response_string\n";
			$api_result = explode( '|', $response_string );
			$status_code = $api_result[0];
			$sms_result['api_status_code'] = $status_code;
			$sms_result['api_message'] = $api_result[1];
			if ( count( $api_result ) != 3 ) {
			$sms_result['details'] .= "Error: could not parse valid return data from server.\n" . count( $api_result );
			} else {
			if ($status_code == '0') {
				$sms_result['success'] = 1;
				$sms_result['api_batch_id'] = $api_result[2];
				$sms_result['details'] .= "Message sent - batch ID $api_result[2]\n";
			}
			else if ($status_code == '1') {
				# Success: scheduled for later sending.
				$sms_result['success'] = 1;
				$sms_result['api_batch_id'] = $api_result[2];
			}
			else {
				$sms_result['details'] .= "Error sending: status code [$api_result[0]] description [$api_result[1]]\n";
			}
	
	
	
	
	
			}
		}
		curl_close( $ch );
	
		return $sms_result;
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
				//http://www.isms.com.my/
				//2000	=	SUCCESS or EMPTY/BLANK	SUCCESS	Message Sent.
				//-1000	=	UNKNOWN ERROR	Unknown error. Please contact the administrator.
				//-1001	=	AUTHENTICATION FAILED	Your username or password are incorrect.
				//-1002	=	ACCOUNT SUSPENDED / EXPIRED	Your account has been expired or suspended. Please contact the administrator.
				//-1003	=	IP NOT ALLOWED	Your IP is not allowed to send SMS. Please contact the administrator.
				//-1004	=	INSUFFICIENT CREDITS	You have run our of credits. Please reload your credits.
				//-1005	=	INVALID SMS TYPE	Your SMS type is not supported.
				//-1006	=	INVALID BODY LENGTH (1-900)	Your SMS body has exceed the length. Max limit = 900
				//-1007	=	INVALID HEX BODY	Your Hex body format is wrong.
				//-1008	=	MISSING PARAMETER	One or more required parameters are missing.
				
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
				$IsImgChange = $obj->hIsImgChange;	
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
				
				echo $EmailAddress;
				
				$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$EmailAddress'");
				
				$userData = $query->row();
				
				$session_data = array(
					"UserID" => $userData->ID,
					"FirstName" => $userData->FirstName,
					"EmailAddress" => $userData->EmailAddress,
					"Type" => $userData->Type,
					"Group" => $userData->Group
				);
				$this->session->set_userdata("LoggedUser", $session_data);
			break;
		}
	}
}
