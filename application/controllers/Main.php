<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function index()
	{
		$data["bodyClass"] = "nav-btn-only homepage";
		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, M.Name AS ModelName, S.Name AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L INNER JOIN tbl_model AS M ON L.Model = M.ID INNER JOIN tbl_specification AS S ON L.Specification = S.ID LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 8");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$queryFeatured = $this->db->query("SELECT *, L.ID AS LID,M.Name AS ModelName, S.Name AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L INNER JOIN tbl_model AS M ON L.Model = M.ID INNER JOIN tbl_specification AS S ON L.Specification = S.ID LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 AND L.IsFeatured = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 12");
		$featuredData = $queryFeatured->result();
		$data["featuredData"] = $featuredData;
		$data["featuredDataCount"] = $queryFeatured->num_rows();
		
		$IPAddress = $this->get_client_ip();
		$queryRecentViewed = $this->db->query("SELECT *, RV.ID AS RVID, L.ID AS LID, M.Name AS ModelName, S.Name AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_recentlyviewed AS RV INNER JOIN tbl_listing AS L ON RV.ListingID = L.ID INNER JOIN tbl_model AS M ON L.Model = M.ID INNER JOIN tbl_specification AS S ON L.Specification = S.ID LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE RV.IPAddress = '$IPAddress' AND L.Status = 1 GROUP BY RV.ID ORDER BY RV.ViewedOn DESC LIMIT 4");
		$recentViewedData = $queryRecentViewed->result();
		$data["recentViewed"] = $recentViewedData;
		
		$queryModel = $this->db->query("SELECT * FROM tbl_model");
		$modelData = $queryModel->result();
		$data["modelData"] = $modelData;
		
		$querySpecification = $this->db->query("SELECT * FROM tbl_specification");
		$specificationData = $querySpecification->result();
		$data["specificationData"] = $specificationData;
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$queryPriceThres = $this->db->query("SELECT MIN(SellingPrice) AS MinVal, MAX(SellingPrice) AS MaxVal FROM tbl_listing WHERE Status = 1");
		$priceThresData = $queryPriceThres->row();
		$data["priceThresData"] = $priceThresData;
		
		$this->load->view("header", $data);
		$this->load->view("main", $data);
		$this->load->view("footer");
	}
	
	public function verify($token)
	{
		$query = $this->db->query("SELECT * FROM tbl_verifyemail WHERE Token = '$token'");
		$tokenData = $query->row();
		
		if($tokenData->IsVerify == 1){
			echo "already verified";
		}else{
			$date1=date_create($tokenData->ExpiryDate);
			$date2=date_create(date("Y-m-d H:i:s"));
			$diff=date_diff($date1,$date2);
			$days = $diff->format("%a");
			if($days > 3){
				echo "link expired";
			}else{
				$dataarray = array(
					"Status" => 2
				);

				$this->db->set($dataarray);
				$this->db->where("EmailAddress", $tokenData->EmailAddress);
				$this->db->update("tbl_user");
				
				
				$dataarray = array(
					"IsVerify" => 1
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $tokenData->ID);
				$this->db->update("tbl_verifyemail");
				
				
				$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$tokenData->EmailAddress'");
				
				$userData = $query->row();
								
				$this->db->query("UPDATE tbl_user SET LastLogin = '".date('Y-m-d H:i:s')."' WHERE EmailAddress = '$tokenData->EmailAddress'");
				
				$session_data = array(
					"UserID" => $userData->ID,
					"FirstName" => $userData->FirstName,
					"EmailAddress" => $userData->EmailAddress,
					"Type" => $userData->Type,
					"Group" => $userData->Group
				);
				$this->session->set_userdata("LoggedUser", $session_data);
							
				redirect("user");
				//echo "account verified";
			}
		}
	}		
	
	private function sendverifyemail($pUserID, $pEmailAddress)
	{
		$this->load->helper("string");
		$genToken = random_string("alnum",50);
		
		$data = array(
		   "EmailAddress" => $pEmailAddress,
		   "UserID" => $pUserID,
		   "Token" => $genToken,
		   "IsVerify" => 0,
		   "ExpiryDate" => date("Y-m-d H:i:s", time() + 259200)
		);

		$this->db->insert("tbl_verifyemail", $data);
		
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
		$this->email->subject("Email Verification");
		$this->email->message("Dear New User,<br/><br/>Please click on below URL or paste into your browser to verify your Email Address<br/><br/> <a href='http://localhost/devhucp/main/verify/".$genToken."'>Verification link</a>"."<br/><br/>This verification link will expired in 3 days.<br/><br/>Thanks<br/>Hyundai Used Car Platform");
		$this->email->send();
	}
	
	public function addlisting(){
		$user_data = $this->session->userdata("LoggedUser");
		
		$Model = $this->input->post("ALModel");
		$Specification = $this->input->post("ALSpecification");
		$Transmission = $this->input->post("ALTransmission");
		$ManufacturingYear = $this->input->post("ALManufacturingYear");
		$Mileage = $this->input->post("ALMileage");
		$Colour = $this->input->post("ALColour");
		$SellingPrice = $this->input->post("ALSellingPrice");
		$Description = $this->input->post("ALDescription");
		$Address = $this->input->post("ALAddress");
		$Latitude = $this->input->post("ALLatitude");
		$Longitude = $this->input->post("ALLongitude");
		$gs_category = $this->input->post("gs_category");
		$gs_model_name = $this->input->post("gs_model_name");
		$gs_body_type = $this->input->post("gs_body_type");
		$gs_seats = $this->input->post("gs_seats");
		$pf_eg_label = $this->input->post("pf_eg_label");
		$pf_eg_capacity = $this->input->post("pf_eg_capacity");
		$pf_eg_fuel_system = $this->input->post("pf_eg_fuel_system");
		$pf_eg_displacement = $this->input->post("pf_eg_displacement");
		$pf_eg_max_power_label = $this->input->post("pf_eg_max_power_label");
		$pf_eg_max_power_ps = $this->input->post("pf_eg_max_power_ps");
		$pf_eg_max_power_kw = $this->input->post("pf_eg_max_power_kw");
		$pf_eg_max_power_rpm = $this->input->post("pf_eg_max_power_rpm");
		$pf_eg_max_torque_label = $this->input->post("pf_eg_max_torque_label");
		$pf_eg_max_touque_kgm = $this->input->post("pf_eg_max_touque_kgm");
		$pf_eg_max_touque_nm = $this->input->post("pf_eg_max_touque_nm");
		$pf_eg_max_touque_rpm = $this->input->post("pf_eg_max_touque_rpm");
		$pf_eg_number_of_cylinders = $this->input->post("pf_eg_number_of_cylinders");
		$pf_eg_valve_of_cylinder = $this->input->post("pf_eg_valve_of_cylinder");
		$pf_tm_type = $this->input->post("pf_tm_type");
		$pf_tm_drive_type = $this->input->post("pf_tm_drive_type");
		$pf_tm_gear_speed = $this->input->post("pf_tm_gear_speed");
		$pf_tm_drive_config = $this->input->post("pf_tm_drive_config");
		$dm_ex_length = $this->input->post("dm_ex_length");
		$dm_ex_width = $this->input->post("dm_ex_width");
		$dm_ex_height = $this->input->post("dm_ex_height");
		$dm_ex_wheel_base = $this->input->post("dm_ex_wheel_base");
		$dm_ex_front_wheel_tread = $this->input->post("dm_ex_front_wheel_tread");
		$dm_ex_rear_wheel_tread = $this->input->post("dm_ex_rear_wheel_tread");
		$dm_ex_front_over_hang = $this->input->post("dm_ex_front_over_hang");
		$dm_ex_rear_over_hang = $this->input->post("dm_ex_rear_over_hang");
		$dm_cg_area_vda = $this->input->post("dm_cg_area_vda");
		$wh_front_wheel = $this->input->post("wh_front_wheel");
		$wh_rear_wheel = $this->input->post("wh_rear_wheel");
		$wh_front_tires = $this->input->post("wh_front_tires");
		$wh_rear_tires = $this->input->post("wh_rear_tires");				
		
		$dataarray = array(
			"Model" 					=> $Model,
			"Specification" 			=> $Specification,
			"Transmission" 				=> $Transmission,		
			"ManufacturingYear" 		=> $ManufacturingYear,
			"Mileage" 					=> $Mileage,
			"Colour" 					=> $Colour,
			"SellingPrice" 				=> $SellingPrice,
			"Description" 				=> $Description,
			"Address" 					=> $Address,
			"Latitude" 					=> $Latitude,
			"Longitude" 				=> $Longitude,
			"gs_category"				=> $gs_category,
			"gs_model_name" 			=> $gs_model_name,
			"gs_body_type" 				=> $gs_body_type,
			"gs_seats" 					=> $gs_seats,
			"pf_eg_label"				=> $pf_eg_label,
			"pf_eg_capacity" 			=> $pf_eg_capacity,
			"pf_eg_fuel_system" 		=> $pf_eg_fuel_system,
			"pf_eg_displacement" 		=> $pf_eg_displacement,
			"pf_eg_max_power_label" 	=> $pf_eg_max_power_label,
			"pf_eg_max_power_ps" 		=> $pf_eg_max_power_ps,
			"pf_eg_max_power_kw" 		=> $pf_eg_max_power_kw,
			"pf_eg_max_power_rpm" 		=> $pf_eg_max_power_rpm,
			"pf_eg_max_torque_label" 	=> $pf_eg_max_torque_label,
			"pf_eg_max_touque_kgm" 		=> $pf_eg_max_touque_kgm,
			"pf_eg_max_touque_nm" 		=> $pf_eg_max_touque_nm,
			"pf_eg_max_touque_rpm" 		=> $pf_eg_max_touque_rpm,
			"pf_eg_number_of_cylinders" => $pf_eg_number_of_cylinders,
			"pf_eg_valve_of_cylinder" 	=> $pf_eg_valve_of_cylinder,
			"pf_tm_type" 				=> $pf_tm_type,
			"pf_tm_drive_type" 			=> $pf_tm_drive_type,
			"pf_tm_gear_speed" 			=> $pf_tm_gear_speed,
			"pf_tm_drive_config" 		=> $pf_tm_drive_config,
			"dm_ex_length" 				=> $dm_ex_length,
			"dm_ex_width" 				=> $dm_ex_width,
			"dm_ex_height" 				=> $dm_ex_height,
			"dm_ex_wheel_base" 			=> $dm_ex_wheel_base,
			"dm_ex_front_wheel_tread"	=> $dm_ex_front_wheel_tread,
			"dm_ex_rear_wheel_tread" 	=> $dm_ex_rear_wheel_tread,
			"dm_ex_front_over_hang" 	=> $dm_ex_front_over_hang,
			"dm_ex_rear_over_hang" 		=> $dm_ex_rear_over_hang,
			"dm_cg_area_vda" 			=> $dm_cg_area_vda,
			"wh_front_wheel" 			=> $wh_front_wheel,
			"wh_rear_wheel" 			=> $wh_rear_wheel,
			"wh_front_tires" 			=> $wh_front_tires,
			"wh_rear_tires" 			=> $wh_rear_tires,
			"Status"					=> 0,
			"AddedBy"					=> $user_data["UserID"],
			"AddedOn"					=> date("Y-m-d H:i:s")
		);

		$this->db->insert("tbl_listing", $dataarray);
		$insert_id = $this->db->insert_id();
		
		
			$config["upload_path"]          = "assets/img/listing";
			$config["allowed_types"]        = "gif|jpg|png";

			$this->load->library("upload", $config);
			
			
			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);
			for($i=0; $i<$cpt; $i++)
			{           
				$_FILES['userfile']['name']= $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

				if (!$this->upload->do_upload())
				{
						$error = array("error" => $this->upload->display_errors());
						echo $this->upload->display_errors();
				}
				else
				{
						$data = array("upload_data" => $this->upload->data());
						$ProfilePic = $this->upload->data("file_name");
						
						$dataarraypic = array(
							"ListingPic" => $ProfilePic,
							"ListingID" => $insert_id,
							"AddedOn" => date("Y-m-d H:i:s")
						);
			
						$this->db->insert("tbl_listingimage", $dataarraypic);
				}
			}
	
		redirect("listing/details/".$insert_id."/".$user_data["UserID"]);
	}
	
	public function ajax()
	{
		$obj = json_decode($this->input->post("datastr"));
		$mode = $obj->mode;
		
		switch($mode){
			case "SignIn":
				$this->load->library("bcrypt");
				$emailAddress = $obj->EmailAddress;
				$password = $obj->Password;
				$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$emailAddress'");
				
				$userData = $query->row();
				
				if($query->num_rows() == 0){
					$accountResult = 1;
				}
				else{
					if($this->bcrypt->check_password($password, $userData->Password) == false) {
						$accountResult = 2;
					}else{
						if($userData->Status == 1){
							$accountResult = 3;
						}
						elseif($userData->Status == 3){
							$accountResult = 4;
						}
						elseif($userData->Status == 4){
							$accountResult = 5;
						}else{
							$userfound = true;
							$this->db->query("UPDATE tbl_user SET LastLogin = '".date('Y-m-d H:i:s')."' WHERE EmailAddress = '$emailAddress'");
							
							$session_data = array(
								"UserID" => $userData->ID,
								"FirstName" => $userData->FirstName,
								"EmailAddress" => $userData->EmailAddress,
								"Type" => $userData->Type,
								"Group" => $userData->Group
							);
							$this->session->set_userdata("LoggedUser", $session_data);
							
							$accountResult = 0;					
						}
					}
				}
				
				if($accountResult == 0){
					echo "Account active";
				}elseif($accountResult == 1){
					echo "Account not found";
				}elseif($accountResult == 2){
					echo "Wrong password";
				}elseif($accountResult == 3){
					echo "Account not verify";
				}elseif($accountResult == 4){
					echo "Account deleted";
				}elseif($accountResult == 5){
					echo "Account suspended";
				}
			break;
			case "Register":
				$this->load->library('bcrypt');
				$emailAddress = $obj->EmailAddress;
				$password = $obj->Password;
				//$firstName = $obj->FirstName;
				//$lastName = $obj->LastName;
				$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$emailAddress'");
				
				$userData = $query->row();
				
				if($query->num_rows() > 0){
					$accountResult = 1;
				}
				else{
					$hash = $this->bcrypt->hash_password($password);
					
					$data = array(
					   "Type" => 1,
					   "EmailAddress" => $emailAddress,
					   "Password" => $hash,
					   //"FirstName" => $firstName,
					   //"LastName" => $lastName,
					   "MembershipType" => "Basic",
					   "ProfilePic" => "default.jpg",
					   "Status" => 1,
					   "AddedOn" => date("Y-m-d H:i:s")
					);

					$this->db->insert("tbl_user", $data);
					$insert_id = $this->db->insert_id();
					
					$this->sendverifyemail($insert_id, $emailAddress);
					//echo $this->email->print_debugger();
					$accountResult = 0;
				}
				
				if($accountResult == 0){
					echo "Account registered";
				}elseif($accountResult == 1){
					echo "Account already exist";
				}
			break;
			case "Logout":
				$this->session->unset_userdata("LoggedUser");
			break;
			case "SignInFacebook":
				$emailAddress = $obj->EmailAddress;
				$firstName = $obj->FirstName;
				$lastName = $obj->LastName;
				$profilePic = $obj->ProfilePic;
				$query = $this->db->query("SELECT * FROM tbl_user WHERE EmailAddress = '$emailAddress'");
				
				$userData = $query->row();
				
				if($query->num_rows() == 0){
					$data = array(
					   "Type" => 2,
					   "Group" => 2,
					   "EmailAddress" => $emailAddress,
					   "FirstName" => $firstName,
					   "LastName" => $lastName,
					   "ProfilePic" => $profilePic,
					   "MembershipType" => "Basic",
					   "AddedOn" => date("Y-m-d H:i:s")
					);

					$this->db->insert('tbl_user', $data);
					
					$insert_id = $this->db->insert_id();
					$session_data = array(
						"UserID" => $insert_id,
						"FirstName" => $userData->FirstName,
						"EmailAddress" => $userData->EmailAddress,
						"Type" => 2,
						"Group" => 2
					);
					$this->session->set_userdata("LoggedUser", $session_data);
				}
				else{
					
					$dataarray = array(
						"FirstName" => $firstName,
						"LastName" => $lastName,
						"ProfilePic" => $profilePic,
						"LastLogin" => date("Y-m-d H:i:s")
					);

					$this->db->set($dataarray);
					$this->db->where("EmailAddress", $emailAddress);
					$this->db->update("tbl_user");
					
					$session_data = array(
						"UserID" => $userData->ID,
						"FirstName" => $userData->FirstName,
						"EmailAddress" => $userData->EmailAddress,
						"Type" => $userData->Type,
						"Group" => $userData->Group
					);
					$this->session->set_userdata("LoggedUser", $session_data);
				}
				
				echo "Account active";
			break;
		}
	}
	
	function get_client_ip() {
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
		   $ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}
}
