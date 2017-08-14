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
				
		$query = $this->db->query("SELECT tbl_listing.ManufacturingYear AS ManufacturingYear,tbl_listing.Brand AS Brand,tbl_listing.Model AS MName,tbl_user.FirstName AS UFName,tbl_user.Type AS UType,tbl_user.ProfilePic AS UPPic,tbl_listing.ID AS LID,tbl_listing.AddedBy AS LAB FROM tbl_listing INNER JOIN tbl_user ON tbl_listing.AddedBy = tbl_user.ID WHERE tbl_listing.Status = 0 ORDER BY tbl_listing.AddedOn DESC");
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
	
	public function subscriberall()
	{
		$query = $this->db->query("SELECT S.ID AS ID, U.FirstName AS FirstName, S.EmailAddress AS EmailAddress, S.AddedOn AS AddedOn, S.IsSubscribe AS IsSubscribe FROM tbl_subscriber AS S LEFT JOIN tbl_user AS U ON S.EmailAddress = U.EmailAddress");
		$data["users"] = $query->result();
		
		$this->load->view('header_admin');
		$this->load->view('admin/newsletter/subscriber.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function statisticuser()
	{
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_user WHERE Status = 1");
		$data["new"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_user WHERE Status = 2");
		$data["emailverified"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_user WHERE Status = 3");
		$data["deleted"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_user WHERE `Group` = 1");
		$data["admin"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_user WHERE `Group` = 2");
		$data["user"] = $query->row();
		
		$begin = new DateTime(date("Y")."-01-01");
		$end = new DateTime(date("Y-m-d"));
		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($begin, $interval, $end);
		
		foreach($period as $dt)
		{
			$cdt = $dt->format("Y-m-d");
			$query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_user WHERE SUBSTRING(AddedOn,1,10) = '".$cdt."'");
			
			$newdata =  array (
				'year' => $dt->format("Y"),
				'month' => $dt->format("m"),
				'day' => $dt->format("d"),
				'val' => $query->row()->val
			);
			$rvdata[] = $newdata;
		}
		
		$query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_user WHERE SUBSTRING(AddedOn,1,10) = '".date("Y-m-d")."'");
			
		$newdata =  array (
			'year' => date("Y"),
			'month' => date("m"),
			'day' => date("d"),
			'val' => $query->row()->val
		);
		$rvdata[] = $newdata;
		
		$data["useradded"] = $rvdata;
		
		$this->load->view('header_admin');
		$this->load->view('admin/statistic/user.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function statisticadvertisement()
	{
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_listing WHERE Status = -1 AND SUBSTRING(AddedOn,1,10) = '".date("Y-m-d")."'");
		$data["newpending"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_listing WHERE Status = 0 AND SUBSTRING(AddedOn,1,10) = '".date("Y-m-d")."'");
		$data["submitted"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_listing WHERE Status = 1 AND SUBSTRING(AddedOn,1,10) = '".date("Y-m-d")."'");
		$data["approved"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_listing WHERE Status = 2 AND SUBSTRING(AddedOn,1,10) = '".date("Y-m-d")."'");
		$data["expired"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_listing WHERE Status = 3 AND SUBSTRING(AddedOn,1,10) = '".date("Y-m-d")."'");
		$data["rejected"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_listing WHERE IsFeatured = 1 AND SUBSTRING(AddedOn,1,10) = '".date("Y-m-d")."'");
		$data["featured"] = $query->row();
		
		$query = $this->db->query("SELECT COUNT(id) AS val FROM tbl_listing WHERE IsFeatured = 0 AND SUBSTRING(AddedOn,1,10) = '".date("Y-m-d")."'");
		$data["notfeatured"] = $query->row();
		
		$begin = new DateTime(date("Y")."-01-01");
		$end = new DateTime(date("Y-m-d"));
		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($begin, $interval, $end);
		
		foreach($period as $dt)
		{
			$cdt = $dt->format("Y-m-d");
			$query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_recentlyviewed WHERE SUBSTRING(ViewedOn,1,10) = '".$cdt."'");
			
			$newdata =  array (
				'year' => $dt->format("Y"),
				'month' => $dt->format("m"),
				'day' => $dt->format("d"),
				'val' => $query->row()->val
			);
			$rvdata[] = $newdata;
		}
		
		$query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_recentlyviewed WHERE SUBSTRING(ViewedOn,1,10) = '".date("Y-m-d")."'");
			
		$newdata =  array (
			'year' => date("Y"),
			'month' => date("m"),
			'day' => date("d"),
			'val' => $query->row()->val
		);
		$rvdata[] = $newdata;
		
		$data["recentlyviewed"] = $rvdata;
		  
		$this->load->view('header_admin');
		$this->load->view('admin/statistic/advertisement.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function adedit($id, $addedBy)
	{		
		$query = $this->db->query("SELECT * FROM tbl_user WHERE Status = 2");
		$data["users"] = $query->result();
		
		$query = $this->db->query("SELECT gs_model FROM tbl_specificationmaster Group By gs_model Order By gs_model ASC");
		$data["model"] = $query->result();
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$query = $this->db->query("SELECT *,L.IsFeatured AS LIsFeatured, L.ID AS LID, L.AddedBy AS LAddedBy, U.FirstName AS UFName, L.Status AS LStatus FROM tbl_listing AS L INNER JOIN tbl_user AS U ON L.AddedBy = U.ID WHERE L.ID = $id");
		$listingData = $query->row();
		
		$queryimg = $this->db->query("SELECT * FROM tbl_listingimage WHERE ListingID = '$id'");
		$listingImageData = $queryimg->result();
		
		$queryUser = $this->db->query("SELECT * FROM tbl_user WHERE ID = $addedBy");
		$userData = $queryUser->row();
		
		$data["listingData"] = $listingData;
		$data["listingImageData"] = $listingImageData;
		$data["userData"] = $userData;
		
		$this->load->view('header_admin');
		$this->load->view('admin/ad/edit.php', $data);
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
	public function publishlisting(){
		$user_data = $this->session->userdata("LoggedUser");
		
		$AssignUserID = $this->input->post("AssignUserID");
		$Brand = $this->input->post("Brand");
		$Category = $this->input->post("Category");
		$Model = $this->input->post("Model");
		$ManufacturingYear = $this->input->post("Year");
		$Transmission = $this->input->post("GDTransmission");
		$Specification = $this->input->post("Specification");
		$Condition = $this->input->post("Condition");
		$Mileage = $this->input->post("Mileage");
		$SellingPrice = $this->input->post("SellingPrice");
		$State = $this->input->post("selState");
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
			"Status"				=> 1,
			"AddedBy"				=> $AssignUserID,
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
						//echo $this->upload->display_errors();
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
		echo $insert_id."_".$AssignUserID;
		//redirect("listing/details/".$insert_id."/".$AssignUserID);
	}	
	public function addlisting(){
		$user_data = $this->session->userdata("LoggedUser");
		
		$AssignUserID = $this->input->post("AssignUserID");
		$Brand = $this->input->post("Brand");
		$Category = $this->input->post("Category");
		$Model = $this->input->post("Model");
		$ManufacturingYear = $this->input->post("Year");
		$Transmission = $this->input->post("GDTransmission");
		$Specification = $this->input->post("Specification");
		$Condition = $this->input->post("Condition");
		$Mileage = $this->input->post("Mileage");
		$SellingPrice = $this->input->post("SellingPrice");
		$State = $this->input->post("selState");
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
			"AddedBy"				=> $AssignUserID,
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
						//echo $this->upload->display_errors();
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
		echo $insert_id."_".$AssignUserID;
		//redirect("listing/details/".$insert_id."/".$AssignUserID);
	}	
	public function editlisting(){
		$user_data = $this->session->userdata("LoggedUser");
				
		$LID = $this->input->post("hLID");
		
		$Brand = $this->input->post("editALBrand");
		$Category = $this->input->post("editALCategory");
		$Model = $this->input->post("editALModel");
		$ManufacturingYear = $this->input->post("editALYear");
		$Transmission = $this->input->post("editALGDTransmission");
		$Specification = $this->input->post("editALSpecification");
		$Condition = $this->input->post("editALCondition");
		$Mileage = $this->input->post("editALMileageDup");
		$SellingPrice = $this->input->post("editALSellingPrice");
		$State = $this->input->post("editALState");
		$Address = $this->input->post("editALAddress");
		$Latitude = $this->input->post("editALLatitude");
		$Longitude = $this->input->post("editALLongitude");
		$Description = $this->input->post("editALDescription");
		
		
		
		$en_cc = $this->input->post("editALGDEngineCC");
		$gn_seat_capacity = $this->input->post("editALSeatCapacity");
		$Colour = $this->input->post("editALColour");
		$gn_doors = $this->input->post("editALDoors");
		$gn_assembled = $this->input->post("editALAssembled");
		$tm_final_drive_ratio = $this->input->post("editALFinalDriveRatio");
		$tm_gears = $this->input->post("editALNoofGears");
		$en_stroke = $this->input->post("editALStroke");
		$en_peak_power = $this->input->post("editALPeakPower");
		$en_engine_type = $this->input->post("editALEngineType");
		$en_aspiration = $this->input->post("editALAspiration");
		$en_bore = $this->input->post("editALBore");
		$en_compression_ratio = $this->input->post("editALCompressionRatio");
		$en_peak_torque = $this->input->post("editALPeakTorque");
		$en_direct_injection = $this->input->post("editALDirectInjection");
		$en_fuel_type = $this->input->post("editALFuelType");
		$dm_length = $this->input->post("editALLength");
		$dm_height = $this->input->post("editALHeight");
		$dm_width = $this->input->post("editALWidth");
		$dm_wheel_base = $this->input->post("editALWheelBase");
		$dm_front_thread = $this->input->post("editALFrontThread");
		$dm_rear_thread = $this->input->post("editALRearThread");
		$dm_fuel_tank = $this->input->post("editALFuelTank");
		$br_front = $this->input->post("editALFrontBrakes");
		$br_rear = $this->input->post("editALRearBrakes");
		$sus_front = $this->input->post("editALFrontSuspension");
		$sus_rear = $this->input->post("editALRearSuspension");
		$tw_front = $this->input->post("editALFrontTyres");
		$tw_rear = $this->input->post("editALRearTyres");
		$tw_front_rim = $this->input->post("editALFrontRims");
		$tw_rear_rim = $this->input->post("editALRearRims");				
		
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
			"ModifiedBy"				=> $user_data["UserID"],
			"ModifiedOn"				=> date("Y-m-d H:i:s")
		);
		
		if($user_data["Group"] == 2){
			$dataarray["Status"] = 0;
		}

		$this->db->set($dataarray);
		$this->db->where("ID", $LID);
		$this->db->update("tbl_listing");
				
		$this->db->delete('tbl_listingimage', array('ListingID' => $LID));
				
		$config["upload_path"]          = "assets/img/listing";
		$config["allowed_types"]        = "gif|jpg|png";

		$this->load->library("upload", $config);
		
		
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		//echo $cpt;
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
					//echo $this->upload->display_errors();
			}
			else
			{
					$data = array("upload_data" => $this->upload->data());
					$ProfilePic = $this->upload->data("file_name");
					
					$dataarraypic = array(
						"ListingPic" => $ProfilePic,
						"ListingID" => $LID,
						"AddedOn" => date("Y-m-d H:i:s")
					);
		
					$this->db->insert("tbl_listingimage", $dataarraypic);
			}
		}
	
		redirect("listing/details/".$LID."/".$user_data["UserID"]);
	}
	
	public function newsletternew()
	{		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 8");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$this->load->view('header_admin');
		$this->load->view('admin/newsletter/new.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function newsletterall()
	{
		$query = $this->db->query("SELECT * FROM tbl_newsletter");
		$data["newsletters"] = $query->result();
		
		$this->load->view('header_admin');
		$this->load->view('admin/newsletter/all.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function newsletteredit($id)
	{
		$query = $this->db->query("SELECT * FROM tbl_newsletter WHERE ID = $id");
		$data["newsletter"] = $query->row();
		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 8");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$this->load->view('header_admin');
		$this->load->view('admin/newsletter/edit.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function newslettersendmail()
	{
		$data_array = array(
			'HTML' 		=> preg_replace('/\r|\n/','',$this->input->post("hhtmlstr")),
			'Subject'	=> $this->input->post('subject'),
			'AddedOn'	=> date('Y-m-d H:i:s'),
			'Status'	=> 1
		);
		
		$this->db->insert('tbl_newsletter',$data_array);
		
		redirect(base_url().'admin/newsletterall');
	}
	
	public function newsletterupdate()
	{
		$dataarray = array(
			'HTML' 		=> preg_replace('/\r|\n/','',$this->input->post("hhtmlstr")),
			'Subject'	=> $this->input->post('subject')
		);	
		
		$this->db->set($dataarray);
		$this->db->where("ID", $this->input->post("hID"));
		$this->db->update("tbl_newsletter");
		
		redirect(base_url().'admin/newsletterall');
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
		$this->email->message("Dear New User,<br/><br/>Please click on below URL or paste into your browser to verify your Email Address<br/><br/> <a href='".base_url()."main/verify/".$genToken."'>Verification link</a>"."<br/><br/>This verification link will expired in 3 days.<br/><br/>Thanks<br/>Hyundai Used Car Platform");
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
				$FirstName = $obj->FirstName;
				$LastName = $obj->LastName;
				$MobileNo = $obj->MobileNo;
				$ICNo = $obj->ICNo;
				$State = $obj->State;
				$Address = $obj->Address;
				
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
					   "FirstName" => $FirstName,
					   "LastName" => $LastName,
					   "EmailAddress" => $emailAddress,
					   "MobileNo" => $MobileNo,
					   "IdentityCardNo" => $ICNo,
					   "State" => $State,
					   "Address" => $Address,
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
					echo "Account registered|".$insert_id;
				}elseif($accountResult == 1){
					echo "Account already exist";
				}
			break;
			case "UpdateUserImage":
				$dataarray = array(
					"ProfilePic" => $obj->ProfilePic
				);	
			
				$this->db->set($dataarray);
				$this->db->where("ID", $obj->UserID);
				$this->db->update("tbl_user");
			break;
			case "DeleteUser":
				$this->db->delete('tbl_user', array('ID' => $obj->id));
				$this->db->delete('tbl_listing', array('AddedBy' => $obj->id));
				$this->db->delete('tbl_recentlyviewed', array('ListingID' => $obj->id));
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
			case "ExportCSVUser":
				$this->load->dbutil(); // call db utility library
				$this->load->helper('download'); // call download helper
			 
				$query = $this->db->query("SELECT * FROM tbl_user"); // whatever you want to export to CSV, just select in query
				
				$filename = 'dumpexport.csv'; // name of csv file to download with data
				force_download($filename, $this->dbutil->csv_from_result($query)); // download file
				//echo $filename;
			break;
			case "DeleteNewsletter":
				$this->db->delete('tbl_newsletter', array('ID' => $obj->id));
			break;
			case "NewsletterSendToSubscribers":
				$newsletterID = $obj->id;
				$query = $this->db->query('SELECT EmailAddress FROM tbl_subscriber WHERE IsSubscribe = 1');
				
				$emails = '';
				foreach($query->result() as $eachEmail){
					$emails .= $eachEmail->EmailAddress.',';
				}
			
				$query = $this->db->query('SELECT * FROM tbl_newsletter WHERE ID = '.$newsletterID);
				$newsletter = $query->row();
			
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
				
				
				$html = '<!DOCTYPE html>

				<html lang="en-US">
				<head>
					<meta charset="UTF-8"/>
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<meta name="author" content="KNI">

					<link href="'.base_url().'assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
					<link href="'.base_url().'assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
					<link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">
					<link rel="stylesheet" href="'.base_url().'assets/bootstrap/css/bootstrap.css" type="text/css">
					<link rel="stylesheet" href="'.base_url().'assets/css/jquery.nouislider.min.css" type="text/css">

					<link rel="stylesheet" href="'.base_url().'assets/css/owl.carousel.css" type="text/css">
					<link rel="stylesheet" href="'.base_url().'assets/css/style.css" type="text/css">

					<title>Hyundai Used Car</title>

				</head>

				<body class="subpage-detail">
				<div class="page-wrapper">

					<div id="page-content">';
		
				$html .= $newsletter->HTML;
		
				$html .= '</div>
					<!--end page-content-->

					<footer id="page-footer">

							<div class="footer-navigation">
								<div class="container" style="width: 550px;">
									<div class="vertical-aligned-elements">
										<div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>
									</div>
								</div>
							</div>
						</div>
					</footer>
					<!--end page-footer-->
				</div>
				<!--end page-wrapper-->
				<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>
				<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

				</body>
				</html>';
				
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->from('suhucp@ruhaizat.my', "Admin Hyundai Used Car Platform");
				$this->email->bcc($emails);  
				$this->email->subject($newsletter->Subject);
				$this->email->message($html);
				$this->email->send();
			break;
		}
	}
	
	function ExportToCSV(){
		$this->load->dbutil();
		$this->load->helper('file');
		$this->load->helper('download');
		/* get the object   */
		$report = $this->db->query('select * from tbl_user');
		$delimiter = ",";
		$newline = "\r\n";
		$new_report = $this->dbutil->csv_from_result($report, $delimiter, $newline);
		write_file( 'application/third_party/file.csv', $new_report);
		force_download('application/third_party/file.csv');
		$filename = 'application/third_party/file.csv';
		$data = file_get_contents("modulos/".$filename); // Read the file's contents
		force_download($filename, $data); 
	}
	
	function savePNG(){
		$image = $_POST['image'];
		$name = time();

		$image = str_replace('data:image/png;base64,', '', $image);
		$decoded = base64_decode($image);

		file_put_contents(APPPATH . "../assets/img/newsletter/" . $name . ".png", $decoded);

		echo $name . ".png";
	}
}
