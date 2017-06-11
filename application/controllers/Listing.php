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
	public function index()
	{
		$data["bodyClass"] = "nav-btn-only homepage";
		$query = $this->db->query("SELECT *, L.ID AS LID,M.Name AS ModelName, S.Name AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L INNER JOIN tbl_model AS M ON L.Model = M.ID INNER JOIN tbl_specification AS S ON L.Specification = S.ID LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID GROUP BY L.ID");
		$listingData = $query->result();
		$data["listingData"] = $listingData;
		
		$this->load->view('header', $data);
		$this->load->view('listing/index.php', $data);
		$this->load->view('footer');
	}
	public function details($id, $addedBy)
	{
		if($this->session->userdata("LoggedUser") != null){
			$user_data = $this->session->userdata("LoggedUser");
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
		
		$query = $this->db->query("SELECT *, L.ID AS LID, M.Name AS ModelName, S.Name AS SpecificationName, L.AddedBy AS LAddedBy FROM tbl_listing AS L INNER JOIN tbl_model AS M ON L.Model = M.ID INNER JOIN tbl_specification AS S ON L.Specification = S.ID WHERE L.ID = $id");
		$listingData = $query->row();
		
		$queryimg = $this->db->query("SELECT * FROM tbl_listingimage WHERE ListingID = '$id'");
		$listingImageData = $queryimg->result();
		
		$queryUser = $this->db->query("SELECT * FROM tbl_user WHERE ID = $addedBy");
		$userData = $queryUser->row();
		
		$queryModel = $this->db->query("SELECT * FROM tbl_model");
		$modelData = $queryModel->result();
		
		$querySpecification = $this->db->query("SELECT * FROM tbl_specification");
		$specificationData = $querySpecification->result();
		
		$queryRecent = $this->db->query("SELECT *, L.ID AS LID, M.Name AS ModelName, S.Name AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L INNER JOIN tbl_model AS M ON L.Model = M.ID INNER JOIN tbl_specification AS S ON L.Specification = S.ID LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID GROUP BY L.ID ORDER BY L.AddedOn DESC");
		$recentData = $queryRecent->result();
		$data["recentData"] = $recentData;
		
		$queryState = $this->db->query("SELECT * FROM tbl_state");
		$stateData = $queryState->result();
		$data["state"] = $stateData;
				
		$data["listingData"] = $listingData;
		$data["listingImageData"] = $listingImageData;
		$data["modelData"] = $modelData;
		$data["specificationData"] = $specificationData;
		$data["userData"] = $userData;
		
		$this->load->view('header', $data);
		$this->load->view('listing/details.php', $data);
		$this->load->view('footer');
	}
	
	private function sendcontactselleremail($Name, $Email, $Telephone, $Message, $SellerEmail, $SellerName, $Model)
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
		$this->email->to($SellerEmail);  
		$this->email->subject("Contact Seller");
		$this->email->message("Dear ".$SellerName.",<br/><br/>".$Name." has been contacted you regarding your advertisement of <a href='".base_url()."listing/details/7/1'>".$Model."</a>.<br/><br/>Below is the message:<br/>Name: ".$Name."<br/>Email Address: ".$Email."<br/>Telephone No.: ".$Telephone."<br/>Message: ".$Message."<br/><br/>Thanks<br/>Hyundai Used Car Platform");
		$this->email->send();
	}
	
	public function ajax()
	{
		$obj = json_decode($this->input->post("datastr"));
		$mode = $obj->mode;
		
		switch($mode){
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
				
				$this->sendcontactselleremail($Name, $Email, $Telephone, $Description, $SellerEmail, $SellerName, $Model);
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
