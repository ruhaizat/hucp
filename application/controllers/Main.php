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
		$user_data = $this->session->userdata("LoggedUser");
		$data["LoggedUser"] = $user_data;
		
		$data["bodyClass"] = "nav-btn-only homepage";
		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 8");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$queryFeatured = $this->db->query("SELECT *, L.ID AS LID,L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 AND L.IsFeatured = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 12");
		$featuredData = $queryFeatured->result();
		$data["featuredData"] = $featuredData;
		$data["featuredDataCount"] = $queryFeatured->num_rows();
		
		//$IPAddress = $this->get_client_ip();
		$queryRecentViewed = $this->db->query("SELECT MAX(RV.ID), L.ManufacturingYear AS LManufacturingYear, L.Brand AS LBrand, L.SellingPrice AS LSellingPrice, RV.ID AS RVID, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName, LI.ListingPic AS LListingPic FROM tbl_recentlyviewed AS RV INNER JOIN tbl_listing AS L ON RV.ListingID = L.ID LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY RV.ListingID ORDER BY MAX(RV.ID) DESC LIMIT 4");
		$recentViewedData = $queryRecentViewed->result();
		$data["recentViewed"] = $recentViewedData;
		
		$queryNew = $this->db->query("SELECT *, L.ID AS LID,L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 AND L.Condition = 'New' GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 12");
		$newData = $queryNew->result();
		$data["newData"] = $newData;
		
		//$queryModel = $this->db->query("SELECT * FROM tbl_model");
		//$modelData = $queryModel->result();
		//$data["modelData"] = $modelData;
		
		$query = $this->db->query("SELECT gs_model FROM tbl_specificationmaster Group By gs_model Order By gs_model ASC");
		$data["model"] = $query->result();
		
		//$querySpecification = $this->db->query("SELECT * FROM tbl_specification");
		//$specificationData = $querySpecification->result();
		//$data["specificationData"] = $specificationData;
		
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
	
	public function newsletter()
	{
		$user_data = $this->session->userdata("LoggedUser");
		$data["LoggedUser"] = $user_data;
		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 8");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$this->load->view('newsletter/view.php', $data);
	}
	
	public function unsubscribe($id)
	{
		$user_data = $this->session->userdata("LoggedUser");
		$data["LoggedUser"] = $user_data;
		
		$data["bodyClass"] = "nav-btn-only homepage";
		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 8");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$queryFeatured = $this->db->query("SELECT *, L.ID AS LID,L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 AND L.IsFeatured = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 12");
		$featuredData = $queryFeatured->result();
		$data["featuredData"] = $featuredData;
		$data["featuredDataCount"] = $queryFeatured->num_rows();
		
		//$IPAddress = $this->get_client_ip();
		$queryRecentViewed = $this->db->query("SELECT MAX(RV.ID), L.ManufacturingYear AS LManufacturingYear, L.Brand AS LBrand, L.SellingPrice AS LSellingPrice, RV.ID AS RVID, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName, LI.ListingPic AS LListingPic FROM tbl_recentlyviewed AS RV INNER JOIN tbl_listing AS L ON RV.ListingID = L.ID LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY RV.ListingID ORDER BY MAX(RV.ID) DESC LIMIT 4");
		$recentViewedData = $queryRecentViewed->result();
		$data["recentViewed"] = $recentViewedData;
		
		$query = $this->db->query("SELECT * FROM tbl_subscriber WHERE ID = '$id'");
		$subscriberData = $query->row();
		
		$data["optEmail"] = $subscriberData->EmailAddress;
		$data["SubscriberID"] = $id;
		
		$this->load->view("header", $data);
		$this->load->view('newsletter/unsubscribe.php', $data);
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
							
				redirect("user/index/".$userData->ID);
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
		$this->email->to($pEmailAddress);  
		$this->email->subject("Email Verification");
		$this->email->message("Dear New User,<br/><br/>Please click on below URL or paste into your browser to verify your Email Address<br/><br/> <a href='".base_url()."main/verify/".$genToken."'>Verification link</a>"."<br/><br/>This verification link will expired in 3 days.<br/><br/>Thanks<br/>Hyundai Used Car Platform");
		$this->email->send();
	}
	
	public function addlisting(){
		$user_data = $this->session->userdata("LoggedUser");
		
		$Brand = $this->input->post("ALBrand");
		$Category = $this->input->post("ALCategory");
		$Model = $this->input->post("ALModel");
		$ManufacturingYear = $this->input->post("ALYear");
		$Transmission = $this->input->post("ALGDTransmission");
		$Specification = $this->input->post("ALSpecification");
		$Condition = $this->input->post("ALCondition");
		$Mileage = $this->input->post("ALMileageDup");
		$SellingPrice = $this->input->post("ALSellingPrice");
		$State = $this->input->post("ALState");
		$Address = $this->input->post("ALAddress");
		$Latitude = $this->input->post("ALLatitude");
		$Longitude = $this->input->post("ALLongitude");
		$Description = $this->input->post("ALDescription");
		
		
		
		$en_cc = $this->input->post("ALGDEngineCC");
		$gn_seat_capacity = $this->input->post("ALSeatCapacity");
		$Colour = $this->input->post("ALColour");
		$gn_doors = $this->input->post("ALDoors");
		$gn_assembled = $this->input->post("ALAssembled");
		$tm_final_drive_ratio = $this->input->post("ALFinalDriveRatio");
		$tm_gears = $this->input->post("ALNoofGears");
		$en_stroke = $this->input->post("ALStroke");
		$en_peak_power = $this->input->post("ALPeakPower");
		$en_engine_type = $this->input->post("ALEngineType");
		$en_aspiration = $this->input->post("ALAspiration");
		$en_bore = $this->input->post("ALBore");
		$en_compression_ratio = $this->input->post("ALCompressionRatio");
		$en_peak_torque = $this->input->post("ALPeakTorque");
		$en_direct_injection = $this->input->post("ALDirectInjection");
		$en_fuel_type = $this->input->post("ALFuelType");
		$dm_length = $this->input->post("ALLength");
		$dm_height = $this->input->post("ALHeight");
		$dm_width = $this->input->post("ALWidth");
		$dm_wheel_base = $this->input->post("ALWheelBase");
		$dm_front_thread = $this->input->post("ALFrontThread");
		$dm_rear_thread = $this->input->post("ALRearThread");
		$dm_fuel_tank = $this->input->post("ALFuelTank");
		$br_front = $this->input->post("ALFrontBrakes");
		$br_rear = $this->input->post("ALRearBrakes");
		$sus_front = $this->input->post("ALFrontSuspension");
		$sus_rear = $this->input->post("ALRearSuspension");
		$tw_front = $this->input->post("ALFrontTyres");
		$tw_rear = $this->input->post("ALRearTyres");
		$tw_front_rim = $this->input->post("ALFrontRims");
		$tw_rear_rim = $this->input->post("ALRearRims");				
		
		$dataarray = array(
			"Brand" 				=> $Brand,
			"body_style" 				=> $Category,
			"Model" 				=> $Model,
			"ManufacturingYear" 	=> $ManufacturingYear,
			"Transmission" 			=> $Transmission,
			"Specification" 		=> $Specification,	
			"Condition" 		=> $Condition,	
			"Colour" 				=> $Colour,	
			"Mileage" 				=> $Mileage,
			"State" 				=> $State,
			"SellingPrice" 			=> $SellingPrice,
			"Address" 				=> $Address,
			"Latitude" 				=> $Latitude,
			"Longitude" 			=> $Longitude,
			"Description" 			=> $Description,
			"en_cc" 				=> $en_cc,
			"gn_seat_capacity" 		=> $gn_seat_capacity,
			"Colour" 				=> $Colour,
			"gn_doors" 				=> $gn_doors,
			"gn_assembled" 			=> $gn_assembled,
			"tm_final_drive_ratio" 	=>$tm_final_drive_ratio,
			"tm_gears" 				=> $tm_gears,
			"en_stroke" 			=> $en_stroke,
			"en_peak_power" 		=> $en_peak_power,
			"en_engine_type" 		=> $en_engine_type,
			"en_aspiration" 		=> $en_aspiration,
			"en_bore" 				=> $en_bore,
			"en_compression_ratio" 	=>$en_compression_ratio,
			"en_peak_torque" 		=> $en_peak_torque,
			"en_direct_injection" 	=> $en_direct_injection,
			"en_fuel_type" 			=> $en_fuel_type,
			"dm_length" 			=> $dm_length,
			"dm_height" 			=> $dm_height,
			"dm_width" 				=> $dm_width,
			"dm_wheel_base" 		=> $dm_wheel_base,
			"dm_front_thread" 		=> $dm_front_thread,
			"dm_rear_thread" 		=> $dm_rear_thread,
			"dm_fuel_tank" 			=> $dm_fuel_tank,
			"br_front" 				=> $br_front,
			"br_rear" 				=> $br_rear,
			"sus_front" 			=> $sus_front,
			"sus_rear" 				=> $sus_rear,
			"tw_front" 				=> $tw_front,
			"tw_rear" 				=> $tw_rear,
			"tw_front_rim" 			=> $tw_front_rim,
			"tw_rear_rim" 			=> $tw_rear_rim,
			"Status"				=> -1,
			"AddedBy"				=> $user_data["UserID"],
			"AddedOn"				=> date("Y-m-d H:i:s")
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
				$mobile = $obj->Mobile;
				$password = $obj->Password;
				$newsletter_subscription = $obj->newsletter_subscription;
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
					   "Group" => 2,
					   "EmailAddress" => $emailAddress,
					   "MobileNo" => $mobile,
					   "Password" => $hash,
					   //"FirstName" => $firstName,
					   //"LastName" => $lastName,
					   "MembershipType" => "Basic Member",
					   "ProfilePic" => "default.jpg",
					   "Status" => 1,
					   "AddedOn" => date("Y-m-d H:i:s")
					);

					$this->db->insert("tbl_user", $data);
					$insert_id = $this->db->insert_id();
					
					if($newsletter_subscription == "true"){
						$datans = array(
						   "Type" => 1,
						   "EmailAddress" => $emailAddress,
						   "IsSubscribe" => 1,
						   "AddedOn" => date("Y-m-d H:i:s")
						);

						$this->db->insert("tbl_subscriber", $datans);
					}
					
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
						"FirstName" => $firstName,
						"EmailAddress" => $emailAddress,
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
			case "SelectModel":
				$gs_model = $obj->gs_model;
				$query = $this->db->query("SELECT gs_manu_year FROM tbl_specificationmaster WHERE gs_model = '$gs_model' AND gs_manu_year <> '' GROUP BY gs_manu_year");
				$gs_manu_year = $query->result();
				
				echo json_encode($gs_manu_year);
			break;
			case "MakeFavourite":
				$UserID = $obj->UserID;
				$ListingID = $obj->ListingID;
				
				$data = array(
				   "UserID" => $UserID,
				   "ListingID" => $ListingID,
				   "AddedOn" => date("Y-m-d H:i:s")
				);

				$this->db->insert('tbl_favourite', $data);
				
				$insert_id = $this->db->insert_id();
				
				echo $insert_id;
			break;
			case "RemoveFavourite":
				$UserID = $obj->UserID;
				$ListingID = $obj->ListingID;
				
				$this->db->delete('tbl_favourite', array('UserID' => $UserID,'ListingID' => $ListingID));
			break;
			case "OptOut":
				$SubscriberID = $obj->SubscriberID;
				
				$dataarray = array(
					"IsSubscribe" => 0
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $SubscriberID);
				$this->db->update("tbl_subscriber");
			break;
			case "OptIn":
				$EmailAddress = $obj->EmailAddress;
				
				$query = $this->db->query("SELECT * FROM tbl_subscriber WHERE EmailAddress = '$EmailAddress'");
				
				if($query->num_rows() == 0){
					$data = array(
					   "Type" => 2,
					   "EmailAddress" => $EmailAddress,
					   "IsSubscribe" => 1,
						"AddedOn" => date("Y-m-d H:i:s")
					);

					$this->db->insert('tbl_subscriber', $data);		
					
					echo "OK";
				}else{
					echo "KO";
				}
			break;
			case "OptInAgain":
				$SubscriberID = $obj->SubscriberID;
				
				$dataarray = array(
					"IsSubscribe" => 1
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $SubscriberID);
				$this->db->update("tbl_subscriber");
			break;
			case "NewsletterOptOut":
				$NewsletterID = $obj->NewsletterID;
				
				$dataarray = array(
					"Status" => 0
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $NewsletterID);
				$this->db->update("tbl_newsletter");
			break;
			case "NewsletterOptInAgain":
				$NewsletterID = $obj->NewsletterID;
				
				$dataarray = array(
					"Status" => 1
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $NewsletterID);
				$this->db->update("tbl_newsletter");
			break;
			case "AddCompare":
			    $compareData = $this->session->userdata('compareData');
				$ListingID = $obj->ListingID;
				$compareCount = count($compareData);
				
				$query = $this->db->query("SELECT L.Brand AS BrandName, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.SellingPrice AS SellingPrice, L.Mileage AS Mileage, LI.ListingPic AS ListingPic, L.AddedBy AS LAddedBy FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID WHERE L.ID = ".$ListingID);
				$queryCompare = $query->row();
				
				if($compareCount == 1){
					$compareCount = 1;
					$compareData = array(
						'CD1' => $compareData["CD1"],
						'CD2' => $ListingID
					);
				}elseif($compareCount == 2){
					$compareCount = 2;
					$compareData = array(
						'CD1' => $compareData["CD1"],
						'CD2' => $compareData["CD2"],
						'CD3' => $ListingID
					);
				}elseif($compareCount == 3){
					$compareCount = 3;
					$compareData = array(
						'CD1' => $compareData["CD1"],
						'CD2' => $compareData["CD2"],
						'CD3' => $compareData["CD3"]
					);
				}elseif($compareCount == 0){
					$compareData = array(
						'CD1' => $ListingID
					);
				}
				
				$this->session->set_userdata('compareData', $compareData); 
				//$this->session->unset_userdata('compareData');
				echo $compareCount."|".$queryCompare->BrandName."|".$queryCompare->ModelName."|".$queryCompare->SpecificationName."|".number_format($queryCompare->SellingPrice)."|".$queryCompare->Mileage."|".$queryCompare->ListingPic."|".$queryCompare->LID."|".$queryCompare->LAddedBy;
			break;
			case "RemoveCompare":
			    $compareData = $this->session->userdata('compareData');
				$ListingID = $obj->ListingID;
				$compareCount = count($compareData);
				
				if($compareCount == 1){
					$CD1 = $compareData["CD1"];
				}elseif($compareCount == 2){
					$CD1 = $compareData["CD1"];
					$CD2 = $compareData["CD2"];
				}elseif($compareCount == 3){
					$CD1 = $compareData["CD1"];
					$CD2 = $compareData["CD2"];
					$CD3 = $compareData["CD3"];
				}
				
				$key = array_search($ListingID,$compareData);
				
				if($compareCount == 1 && $key == "CD1"){
					$this->session->unset_userdata('compareData');
				}
				
				if($compareCount == 2 && $key == "CD1"){
					$this->session->unset_userdata('compareData');
					$compareData = array(
						'CD1' => $CD2
					);
					$this->session->set_userdata('compareData', $compareData); 
				}
				if($compareCount == 2 && $key == "CD2"){
					$this->session->unset_userdata('compareData');
					$compareData = array(
						'CD1' => $CD1
					);
					$this->session->set_userdata('compareData', $compareData); 
				}
				
				if($compareCount == 3 && $key == "CD1"){
					$this->session->unset_userdata('compareData');
					$compareData = array(
						'CD1' => $CD2,
						'CD2' => $CD3
					);
					$this->session->set_userdata('compareData', $compareData); 
				}
				if($compareCount == 3 && $key == "CD2"){
					$this->session->unset_userdata('compareData');
					$compareData = array(
						'CD1' => $CD1,
						'CD2' => $CD3
					);
					$this->session->set_userdata('compareData', $compareData); 
				}
				if($compareCount == 3 && $key == "CD3"){
					$this->session->unset_userdata('compareData');
					$compareData = array(
						'CD1' => $CD1,
						'CD2' => $CD2
					);
					$this->session->set_userdata('compareData', $compareData); 
				}
				echo $key;
			break;
			case "RemoveFavourite":
				$UserID = $obj->UserID;
				$ListingID = $obj->ListingID;
				
				$this->db->delete('tbl_favourite', array('UserID' => $UserID,'ListingID' => $ListingID));
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
