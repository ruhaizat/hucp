<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$query = $this->db->query("SELECT COUNT(ID) AS LTotal, (SELECT COUNT(ID) FROM tbl_listing WHERE AddedOn BETWEEN DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) AND DATE_ADD(CURDATE() + 6, INTERVAL - WEEKDAY(CURDATE()) DAY)) AS LWeek FROM tbl_listing");
		$data["ListingCount"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(ID) AS UTotal, (SELECT COUNT(ID) FROM tbl_user WHERE AddedOn BETWEEN DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) AND DATE_ADD(CURDATE() + 6, INTERVAL - WEEKDAY(CURDATE()) DAY)) AS UWeek FROM tbl_user");
		$data["UserCount"] = $query->row();
				
		$query = $this->db->query("SELECT tbl_listing.Model AS MName,tbl_user.FirstName AS UFName,tbl_user.Type AS UType,tbl_user.ProfilePic AS UPPic,tbl_listing.ID AS LID,tbl_listing.AddedBy AS LAB FROM tbl_listing INNER JOIN tbl_user ON tbl_listing.AddedBy = tbl_user.ID WHERE tbl_listing.Status = 0 ORDER BY tbl_listing.AddedOn DESC");
		$data["pendinglistings"] = $query->result();		
		$data["pendinglistingsview"] = 10;
		
		$query = $this->db->query("SELECT ID, ProfilePic, FirstName, Type, AddedOn FROM tbl_user ORDER BY AddedOn DESC");
		$data["newusers"] = $query->result();		
		$data["newusersview"] = 10;
		
		$currMonth = date("m");
		
		for ($i = -7; $i <= 6; $i++) {
			$listmonth = date("m", strtotime( date( 'Y-m-d' )." +$i months"));
			$listmonthstr[] = date("M", strtotime( date( 'Y-m-d' )." +$i months"));
			
			$query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_listing WHERE MONTH(AddedOn) = $listmonth;");
			$listmonthval[] = $query->row()->val;	
		}
		
		$data["listmonthstr"] = $listmonthstr;
		$data["listmonthval"] = $listmonthval;
		
		for ($i = -7; $i <= 6; $i++) {
			$usermonth = date("m", strtotime( date( 'Y-m-d' )." +$i months"));
			$usermonthstr[] = date("M", strtotime( date( 'Y-m-d' )." +$i months"));
			
			$query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_user WHERE MONTH(AddedOn) = $usermonth;");
			$usermonthval[] = $query->row()->val;	
		}
		
		$data["usermonthstr"] = $usermonthstr;
		$data["usermonthval"] = $usermonthval;
		
		$this->load->view('header_admin');
		$this->load->view('admin/index.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function useradd()
	{
		$this->load->view('header_admin');
		$this->load->view('admin/user/add.php');
		$this->load->view('footer_admin');
	}
	
	public function userall()
	{
		$query = $this->db->query("SELECT * FROM tbl_user");
		$data["users"] = $query->result();
		
		$this->load->view('header_admin');
		$this->load->view('admin/user/all.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function adall()
	{
		$query = $this->db->query("SELECT *,tbl_listing.Model AS MName, tbl_listing.ID AS LID,tbl_listing.AddedBy AS LAB,tbl_listing.Status AS LS FROM tbl_listing INNER JOIN tbl_user ON tbl_listing.AddedBy = tbl_user.ID WHERE tbl_listing.Status <> 0");
		$data["listings"] = $query->result();
		
		$this->load->view('header_admin');
		$this->load->view('admin/ad/all.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function adpending()
	{
		$query = $this->db->query("SELECT *,tbl_listing.Model AS MName,tbl_listing.ID AS LID,tbl_listing.AddedBy AS LAB,tbl_listing.AddedOn AS LAO,tbl_listing.Status AS LS FROM tbl_listing INNER JOIN tbl_user ON tbl_listing.AddedBy = tbl_user.ID WHERE tbl_listing.Status = 0");
		$data["listings"] = $query->result();
		
		$this->load->view('header_admin');
		$this->load->view('admin/ad/pending.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function adnew()
	{
		$query = $this->db->query("SELECT * FROM tbl_user WHERE Status = 2");
		$data["users"] = $query->result();
		
		$query = $this->db->query("SELECT gs_model FROM tbl_specificationmaster Group By gs_model Order By gs_model ASC");
		$data["model"] = $query->result();
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$this->load->view('header_admin');
		$this->load->view('admin/ad/add.php', $data);
		$this->load->view('footer_admin');
	}
	public function addlisting(){
		$user_data = $this->session->userdata("LoggedUser");
		
		$Brand = $this->input->post("Brand");
		$Category = $this->input->post("Category");
		$Model = $this->input->post("Model");
		$ManufacturingYear = $this->input->post("Year");
		$Transmission = $this->input->post("GDTransmission");
		$Specification = $this->input->post("Specification");
		$Condition = $this->input->post("Condition");
		$Mileage = $this->input->post("Mileage");
		$SellingPrice = $this->input->post("SellingPrice");
		$State = $this->input->post("State");
		$Address = $this->input->post("Address");
		$Latitude = $this->input->post("Latitude");
		$Longitude = $this->input->post("Longitude");
		$Description = $this->input->post("Description");
		
		
		
		$en_cc = $this->input->post("GDEngineCC");
		$gn_seat_capacity = $this->input->post("SeatCapacity");
		$Colour = $this->input->post("Colour");
		$gn_doors = $this->input->post("Doors");
		$gn_assembled = $this->input->post("Assembled");
		$tm_final_drive_ratio = $this->input->post("FinalDriveRatio");
		$tm_gears = $this->input->post("NoofGears");
		$en_stroke = $this->input->post("Stroke");
		$en_peak_power = $this->input->post("PeakPower");
		$en_engine_type = $this->input->post("EngineType");
		$en_aspiration = $this->input->post("Aspiration");
		$en_bore = $this->input->post("Bore");
		$en_compression_ratio = $this->input->post("CompressionRatio");
		$en_peak_torque = $this->input->post("PeakTorque");
		$en_direct_injection = $this->input->post("DirectInjection");
		$en_fuel_type = $this->input->post("FuelType");
		$dm_length = $this->input->post("Length");
		$dm_height = $this->input->post("Height");
		$dm_width = $this->input->post("Width");
		$dm_wheel_base = $this->input->post("WheelBase");
		$dm_front_thread = $this->input->post("FrontThread");
		$dm_rear_thread = $this->input->post("RearThread");
		$dm_fuel_tank = $this->input->post("FuelTank");
		$br_front = $this->input->post("FrontBrakes");
		$br_rear = $this->input->post("RearBrakes");
		$sus_front = $this->input->post("FrontSuspension");
		$sus_rear = $this->input->post("RearSuspension");
		$tw_front = $this->input->post("FrontTyres");
		$tw_rear = $this->input->post("RearTyres");
		$tw_front_rim = $this->input->post("FrontRims");
		$tw_rear_rim = $this->input->post("RearRims");				
		
		$dataarray = array(
			"Brand" 				=> $Brand,
			"body_style" 				=> $Category,
			"Model" 				=> $Model,
			"ManufacturingYear" 	=> $ManufacturingYear,
			"Transmission" 			=> $Transmission,
			"Specification" 		=> $Specification,	
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
			"Status"				=> 0,
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
	
	public function newsletternew()
	{
		$this->load->view('header_admin');
		$this->load->view('admin/newsletter/new.php');
		$this->load->view('footer_admin');
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
	
	public function ajax()
	{
		$obj = json_decode($this->input->post('datastr'));
		$mode = $obj->mode;
		
		switch($mode){
			case "CreateUser":
				$this->load->library('bcrypt');
				$emailAddress = $obj->EmailAddress;
				$password = $obj->Password;
				$role = $obj->Role;
				
				if($role == "1"){
					$status = 2;
				}else{
					$status = 1;
				}
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
					   "Group" => $role,
					   "EmailAddress" => $emailAddress,
					   "Password" => $hash,
					   "MembershipType" => "Basic",
					   "ProfilePic" => "default.jpg",
					   "Status" => $status,
					   "AddedOn" => date("Y-m-d H:i:s")
					);

					$this->db->insert("tbl_user", $data);
					$insert_id = $this->db->insert_id();
					
					if($role == "2"){
						$this->sendverifyemail($insert_id, $emailAddress);
					}
					
					//echo $this->email->print_debugger();
					$accountResult = 0;
				}
				
				if($accountResult == 0){
					echo "Account registered";
				}elseif($accountResult == 1){
					echo "Account already exist";
				}
			break;
			case "DeleteUser":
				$this->db->delete('tbl_user', array('ID' => $obj->id));
			break;
			case "ApproveAd":
				$user_data = $this->session->userdata("LoggedUser");
				
				$dataarray = array(
					"Status" => 1,
					"ModifiedOn" => date("Y-m-d H:i:s"),
					"ModifiedBy" => $user_data["UserID"]
				);	
			
				$this->db->set($dataarray);
				$this->db->where("ID", $obj->id);
				$this->db->update("tbl_listing");
			break;
			case "RejectAd":
				$user_data = $this->session->userdata("LoggedUser");
				
				$dataarray = array(
					"Status" => 3,
					"ModifiedOn" => date("Y-m-d H:i:s"),
					"ModifiedBy" => $user_data["UserID"]
				);	
			
				$this->db->set($dataarray);
				$this->db->where("ID", $obj->id);
				$this->db->update("tbl_listing");
			break;
			case "DeleteAd":
				$this->db->delete('tbl_listing', array('ID' => $obj->id));
			break;
			case "SelectModel":
				$gs_model = $obj->gs_model;
				$query = $this->db->query("SELECT gs_manu_year FROM tbl_specificationmaster WHERE gs_model = '$gs_model' AND gs_manu_year <> '' GROUP BY gs_manu_year");
				$gs_manu_year = $query->result();
				
				echo json_encode($gs_manu_year);
			break;
			case "SelectYear":
				$gs_model = $obj->gs_model;
				$gs_manu_year = $obj->gs_manu_year;
				$query = $this->db->query("SELECT tm_transmission FROM tbl_specificationmaster WHERE gs_model = '$gs_model' AND gs_manu_year = '$gs_manu_year' AND tm_transmission <> '' GROUP BY tm_transmission");
				$tm_transmission = $query->result();
				
				echo json_encode($tm_transmission);
			break;
			case "SelectTransmission":
				$gs_model = $obj->gs_model;
				$gs_manu_year = $obj->gs_manu_year;
				$tm_transmission = $obj->tm_transmission;
				$query = $this->db->query("SELECT gs_variant FROM tbl_specificationmaster WHERE gs_model = '$gs_model' AND gs_manu_year = '$gs_manu_year' AND tm_transmission = '$tm_transmission' AND gs_variant <> '' GROUP BY gs_variant");
				$gs_variant = $query->result();
				
				echo json_encode($gs_variant);
			break;
			case "SelectSpecification":
				$gs_model = $obj->gs_model;
				$gs_manu_year = $obj->gs_manu_year;
				$tm_transmission = $obj->tm_transmission;
				$gs_variant = $obj->gs_variant;
				$query = $this->db->query("SELECT * FROM tbl_specificationmaster WHERE gs_model = '$gs_model' AND gs_manu_year = '$gs_manu_year' AND tm_transmission = '$tm_transmission' AND gs_variant = '$gs_variant'");
				$qResult = $query->row();
				
				echo json_encode($qResult);
			break;
			case "GetTotalPendingAd":
				$query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_listing WHERE Status = 0");
				$qResult = $query->row();
				
				echo $qResult->val;
			break;
			case "GetTotalUser":
				$query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_user");
				$qResult = $query->row();
				
				echo $qResult->val;
			break;
		}
	}
}
