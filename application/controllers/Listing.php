<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {

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
	public function index(){
		$user_data = $this->session->userdata("LoggedUser");
		$data["LoggedUser"] = $user_data;
		
		$data["bodyClass"] = "nav-btn-only homepage";
		
		$data["isSearch"] = 0;
		$data["keyword"] = "";
		$data["location"] = "";
		$data["modelStr"] = "";
		$data["minvalsrc"] = "";
		$data["maxvalsrc"] = "";
		$data["condition"] = "";
		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 5");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$query = $this->db->query("SELECT *, L.ID AS LID,L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName, COUNT(LI.ListingID) AS TotalImg FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID");
		$listingData = $query->result();
		$data["listingData"] = $listingData;
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$queryModel = $this->db->query("SELECT gs_model FROM tbl_specificationmaster GROUP BY gs_model");
		$modelData = $queryModel->result();
		$data["modelData"] = $modelData;
		
		$query = $this->db->query("SELECT gs_model FROM tbl_specificationmaster Group By gs_model Order By gs_model ASC");
		$data["model"] = $query->result();
		
		//$queryModel = $this->db->query("SELECT * FROM tbl_model");
		//$modelData = $queryModel->result();
		//$data["modelData"] = $modelData;
		
		//$querySpecification = $this->db->query("SELECT * FROM tbl_specification");
		//$specificationData = $querySpecification->result();
		//$data["specificationData"] = $specificationData;
		
		$queryPriceThres = $this->db->query("SELECT MIN(SellingPrice) AS MinVal, MAX(SellingPrice) AS MaxVal FROM tbl_listing WHERE Status = 1");
		$priceThresData = $queryPriceThres->row();
		$data["priceThresData"] = $priceThresData;
		
		$queryYear = $this->db->query("SELECT ManufacturingYear FROM tbl_listing GROUP BY ManufacturingYear ORDER BY ManufacturingYear ASC;");
		$yearData = $queryYear->result();
		$data["yearData"] = $yearData;
		
		$query = $this->db->query("SELECT car_brand FROM tbl_specificationmaster Group By car_brand Order By car_brand ASC");
		$data["brand"] = $query->result();
		
		$this->load->view('header', $data);
		$this->load->view('listing/index.php', $data);
		$this->load->view('footer');
	}
	
	public function search($keyword, $location, $model, $minval, $maxval){
		
		$data["bodyClass"] = "nav-btn-only homepage";
		
		$data["isSearch"] = 1;
		
		if($keyword == "NA"){
			$data["keyword"] = "";
		}else{
			$data["keyword"] = $keyword;
		}
		
		$data["location"] = $location;
		$data["modelStr"] = $model;
		$data["minvalsrc"] = $minval;
		$data["maxvalsrc"] = $maxval;
		$data["condition"] = "";
		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 5");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$query = $this->db->query("SELECT *, L.ID AS LID,L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName, COUNT(LI.ListingID) AS TotalImg FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID");
		$listingData = $query->result();
		$data["listingData"] = $listingData;
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$queryModel = $this->db->query("SELECT gs_model FROM tbl_specificationmaster GROUP BY gs_model");
		$modelData = $queryModel->result();
		$data["modelData"] = $modelData;
		
		//$queryModel = $this->db->query("SELECT * FROM tbl_model");
		//$modelData = $queryModel->result();
		//$data["modelData"] = $modelData;
		
		//$querySpecification = $this->db->query("SELECT * FROM tbl_specification");
		//$specificationData = $querySpecification->result();
		//$data["specificationData"] = $specificationData;
		
		$queryPriceThres = $this->db->query("SELECT MIN(SellingPrice) AS MinVal, MAX(SellingPrice) AS MaxVal FROM tbl_listing WHERE Status = 1");
		$priceThresData = $queryPriceThres->row();
		$data["priceThresData"] = $priceThresData;
		
		$query = $this->db->query("SELECT car_brand FROM tbl_specificationmaster Group By car_brand Order By car_brand ASC");
		$data["brand"] = $query->result();
		
		$this->load->view('header', $data);
		$this->load->view('listing/index.php', $data);
		$this->load->view('footer');
	}
	
	public function ViewNewCars($minval, $maxval){
		
		$data["bodyClass"] = "nav-btn-only homepage";
		
		$data["isSearch"] = 1;
		
			$data["keyword"] = "";
		
		$data["location"] = "";
		$data["modelStr"] = "";
		$data["minvalsrc"] = $minval;
		$data["maxvalsrc"] = $maxval;
		$data["condition"] = "New";
		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 5");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$query = $this->db->query("SELECT *, L.ID AS LID,L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName, COUNT(LI.ListingID) AS TotalImg FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Status = 1 GROUP BY L.ID");
		$listingData = $query->result();
		$data["listingData"] = $listingData;
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$queryModel = $this->db->query("SELECT gs_model FROM tbl_specificationmaster GROUP BY gs_model");
		$modelData = $queryModel->result();
		$data["modelData"] = $modelData;
		
		//$queryModel = $this->db->query("SELECT * FROM tbl_model");
		//$modelData = $queryModel->result();
		//$data["modelData"] = $modelData;
		
		//$querySpecification = $this->db->query("SELECT * FROM tbl_specification");
		//$specificationData = $querySpecification->result();
		//$data["specificationData"] = $specificationData;
		
		$queryPriceThres = $this->db->query("SELECT MIN(SellingPrice) AS MinVal, MAX(SellingPrice) AS MaxVal FROM tbl_listing WHERE Status = 1");
		$priceThresData = $queryPriceThres->row();
		$data["priceThresData"] = $priceThresData;
		
		$query = $this->db->query("SELECT car_brand FROM tbl_specificationmaster Group By car_brand Order By car_brand ASC");
		$data["brand"] = $query->result();
		
		$this->load->view('header', $data);
		$this->load->view('listing/index.php', $data);
		$this->load->view('footer');
	}
	
	public function details($id, $addedBy){
		
		$user_data = $this->session->userdata("LoggedUser");
		
		if($this->session->userdata("LoggedUser") != null){
			$UserID = $user_data["UserID"];
		}else{
			$UserID = 0;
		}
		
		$IPAddress = $this->get_client_ip();
		$data = array(
		   "UserID" => $UserID,
		   "ListingID" => $id,
		   "IPAddress" => $IPAddress,
		   "ViewedOn" => date("Y-m-d H:i:s")
		);

		$this->db->insert('tbl_recentlyviewed', $data); 

		
		$data["bodyClass"] = "subpage-detail";
		
		$query = $this->db->query("SELECT *,L.IsFeatured AS LIsFeatured, L.ID AS LID, L.AddedBy AS LAddedBy, L.Status AS LStatus FROM tbl_listing AS L WHERE L.ID = $id");
		$listingData = $query->row();
		
		$queryimg = $this->db->query("SELECT * FROM tbl_listingimage WHERE ListingID = '$id'");
		$listingImageData = $queryimg->result();
		
		$queryUser = $this->db->query("SELECT * FROM tbl_user WHERE ID = $addedBy");
		$userData = $queryUser->row();
		
		//$queryModel = $this->db->query("SELECT * FROM tbl_model");
		//$modelData = $queryModel->result();
		
		//$querySpecification = $this->db->query("SELECT * FROM tbl_specification");
		//$specificationData = $querySpecification->result();
		
		$queryRelated = $this->db->query("SELECT *, L.ID AS LID, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.Model = '$listingData->Model' AND L.ID <> $listingData->LID GROUP BY L.ID ORDER BY L.AddedOn DESC LIMIT 5");
		$relatedData = $queryRelated->result();
		$data["relatedData"] = $relatedData;
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
		
		$query = $this->db->query("SELECT gs_model FROM tbl_specificationmaster Group By gs_model Order By gs_model ASC");
		$data["modelData"] = $query->result();
		
		$query = $this->db->query("SELECT gs_model FROM tbl_specificationmaster Group By gs_model Order By gs_model ASC");
		$data["model"] = $query->result();
				
		$data["listingData"] = $listingData;
		$data["listingImageData"] = $listingImageData;
		//$data["modelData"] = $modelData;
		//$data["specificationData"] = $specificationData;
		$data["userData"] = $userData;
		$data["LoggedUser"] = $user_data;
		
		$query = $this->db->query("SELECT car_brand FROM tbl_specificationmaster Group By car_brand Order By car_brand ASC");
		$data["brand"] = $query->result();
		
		$this->load->view('header', $data);
		$this->load->view('listing/details.php', $data);
		$this->load->view('footer');
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
		$Mileage = $this->input->post("editALMileage");
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
			"Condition" 			=> $Condition,	
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
		
		$hDeletedImage = $this->input->post("hDeletedImage");
		$hDeletedImageArr = explode("|",$hDeletedImage);
		
		foreach($hDeletedImageArr as $hDeletedImageArrEach){
			if($hDeletedImageArrEach != ""){
				$queryImgFile = $this->db->query("SELECT * FROM tbl_listingimage WHERE ID = ".$hDeletedImageArrEach);
				
				$this->db->delete('tbl_listingimage', array('ID' => $hDeletedImageArrEach));
				unlink('assets/img/listing/'.$queryImgFile->row()->ListingPic); 				
			}
		}
	
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
		
		$AddedBy = $this->input->post("hAddedBy");
		$FirstName = $this->input->post("hFirstName");
		$EmailAddress = $this->input->post("hEmailAddress");
		
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
		$this->email->subject("Advertisement Submitted");
		$this->email->message("Dear ".$FirstName.",<br/><br/>Your edited advertisement is submitted for approval. Click <a href='".base_url()."listing/details/".$LID."/".$AddedBy."'>here</a> to view.<br/><br/>Thanks<br/>Hyundai Used Car Platform");
		$this->email->send();
	
		redirect("listing/details/".$LID."/".$AddedBy);
	}
	
	private function sendcontactselleremail($Name, $Email, $Telephone, $Message, $SellerEmail, $SellerName, $Model, $LID, $AddedBy){
		$query = $this->db->query("SELECT EmailAddress FROM tbl_emailsetting WHERE Setting = 'Contact Seller';");
		$toEmailAddress = $query->row()->EmailAddress;
		
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
		$this->email->from('suhucp@ruhaizat.my', "Admin Hyundai Used Car Platform");
		$this->email->to($SellerEmail);  
		$this->email->bcc($toEmailAddress);  
		$this->email->subject("Contact Seller");
		$this->email->message("Dear ".$SellerName.",<br/><br/>".$Name." has been contacted you regarding your advertisement of <a href='".base_url()."listing/details/".$LID."/".$AddedBy."'>".$Model."</a>.<br/><br/>Below is the message:<br/>Name: ".$Name."<br/>Email Address: ".$Email."<br/>Telephone No.: ".$Telephone."<br/>Message: ".$Message."<br/><br/>Thanks<br/>Hyundai Used Car Platform");
		$this->email->send();
		
		
		$data = array(
		   "FromName" => $Name,
		   "FromEmail" => $Email,
		   "ToName" => $SellerName,
		   "ToEmail" => $SellerEmail,
		   "Message" => $Message,
		   "SentOn" => date("Y-m-d H:i:s"),
		   "AdsID" => $LID,
		   "SellerID" => $AddedBy
		);

		$this->db->insert("tbl_contactseller", $data);
	}
	
	private function submitreportemail($Name, $Email, $Telephone, $Message, $Model, $LID, $AddedBy){
		$query = $this->db->query("SELECT EmailAddress FROM tbl_emailsetting WHERE Setting = 'Report';");
		$toEmailAddress = $query->row()->EmailAddress;
		
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
		$this->email->to($toEmailAddress);  
		$this->email->subject("Report Submitted");
		$this->email->message("Dear Admin,<br/><br/>".$Name." has been submitted a report for advertisement <a href='".base_url()."listing/details/".$LID."/".$AddedBy."'>".$Model."</a>.<br/><br/>Below is the details:<br/>Submitted by: ".$Name."<br/>Email Address: ".$Email."<br/>Telephone No.: ".$Telephone."<br/>Message: ".$Message."<br/><br/>Thanks<br/>Hyundai Used Car Platform");
		$this->email->send();
		
		$data = array(
		   "Name" => $Name,
		   "EmailAddress" => $Email,
		   "Telephone" => $Telephone,
		   "Message" => $Message,
		   "AdsID" => $LID,
		   "SellerID" => $AddedBy,
		   "SentOn" => date("Y-m-d H:i:s"),
		   "Status" => 0
		);

		$this->db->insert("tbl_report", $data);
	}
	
	public function ajax(){
		$obj = json_decode($this->input->post("datastr"));
		$mode = $obj->mode;
		
		switch($mode){
			case "Report":
				$Name = $obj->Name;
				$Email = $obj->Email;
				$Telephone = $obj->Telephone;
				$Description = $obj->Description;
				$ListingID = $obj->ListingID;
				$SellerID = $obj->SellerID;
				$Model = $obj->Model;
				
				$this->submitreportemail($Name, $Email, $Telephone, $Description, $Model, $ListingID, $SellerID);
			break;
			case "ContactSeller":
				$Name = $obj->Name;
				$Email = $obj->Email;
				$Telephone = $obj->Telephone;
				$Description = $obj->Description;
				$ListingID = $obj->ListingID;
				$SellerID = $obj->SellerID;
				$Model = $obj->Model;
		
				$queryUser = $this->db->query("SELECT * FROM tbl_user WHERE ID = $SellerID");
				$userData = $queryUser->row();
				$SellerEmail = $userData->EmailAddress;
				$SellerName = $userData->FirstName;
				
				$this->sendcontactselleremail($Name, $Email, $Telephone, $Description, $SellerEmail, $SellerName, $Model, $ListingID, $SellerID);
			break;
			case "AdChangeStatus":
				$user_data = $this->session->userdata("LoggedUser");
				$LID = $obj->ID;
				$Status = $obj->Status;
				
				if($Status == "4"){
					$this->db->delete('tbl_listing', array('ID' => $LID));
				}else{
					$dataarray = array(
						"Status"		=> $Status,
						"ModifiedBy"	=> $user_data["UserID"],
						"ModifiedOn"	=> date("Y-m-d H:i:s")
					);

					$this->db->set($dataarray);
					$this->db->where("ID", $LID);
					$this->db->update("tbl_listing");					
				}
				
				if($Status == "0"){
					$AddedBy = $obj->AddedBy;
					$FirstName = $obj->FirstName;
					$EmailAddress = $obj->EmailAddress;
					
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
					$this->email->subject("Advertisement Submitted");
					$this->email->message("Dear ".$FirstName.",<br/><br/>Your advertisement is submitted for approval. Click <a href='".base_url()."listing/details/".$LID."/".$AddedBy."'>here</a> to view.<br/><br/>Thanks<br/>Hyundai Used Car Platform");
					$this->email->send();
				}else if($Status == "1"){
					$AddedBy = $obj->AddedBy;
					$FirstName = $obj->FirstName;
					$EmailAddress = $obj->EmailAddress;
					
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
					$this->email->subject("Advertisement Approved");
					$this->email->message("Dear ".$FirstName.",<br/><br/>Your advertisement is approved. Click <a href='".base_url()."listing/details/".$LID."/".$AddedBy."'>here</a> to view.<br/><br/>Thanks<br/>Hyundai Used Car Platform");
					$this->email->send();
				}
			break;
			case "AdFeatured":
				$user_data = $this->session->userdata("LoggedUser");
				$LID = $obj->ID;
				
				$dataarray = array(
					"IsFeatured"	=> 1,
					"ModifiedBy"	=> $user_data["UserID"],
					"ModifiedOn"	=> date("Y-m-d H:i:s")
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $LID);
				$this->db->update("tbl_listing");
			break;
			case "AdUnFeatured":
				$user_data = $this->session->userdata("LoggedUser");
				$LID = $obj->ID;
				
				$dataarray = array(
					"IsFeatured"	=> 0,
					"ModifiedBy"	=> $user_data["UserID"],
					"ModifiedOn"	=> date("Y-m-d H:i:s")
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $LID);
				$this->db->update("tbl_listing");
			break;
			case "AdRenew":
				$user_data = $this->session->userdata("LoggedUser");
				$LID = $obj->ID;
				
				$dataarray = array(
					"Status"	=> 0,
					"ModifiedBy"	=> $user_data["UserID"],
					"ModifiedOn"	=> date("Y-m-d H:i:s")
				);

				$this->db->set($dataarray);
				$this->db->where("ID", $LID);
				$this->db->update("tbl_listing");
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
