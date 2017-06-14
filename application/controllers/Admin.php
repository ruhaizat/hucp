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
				
		$query = $this->db->query("SELECT tbl_model.Name AS MName,tbl_user.FirstName AS UFName,tbl_user.Type AS UType,tbl_user.ProfilePic AS UPPic,tbl_listing.ID AS LID,tbl_listing.AddedBy AS LAB FROM tbl_listing INNER JOIN tbl_user ON tbl_listing.AddedBy = tbl_user.ID INNER JOIN tbl_model ON tbl_listing.Model = tbl_model.ID WHERE tbl_listing.Status = 0 ORDER BY tbl_listing.AddedOn DESC");
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
		$query = $this->db->query("SELECT *,tbl_listing.ID AS LID,tbl_listing.AddedBy AS LAB,tbl_listing.Status AS LS FROM tbl_listing INNER JOIN tbl_user ON tbl_listing.AddedBy = tbl_user.ID INNER JOIN tbl_model ON tbl_listing.Model = tbl_model.ID WHERE tbl_listing.Status <> 0");
		$data["listings"] = $query->result();
		
		$this->load->view('header_admin');
		$this->load->view('admin/ad/all.php', $data);
		$this->load->view('footer_admin');
	}
	
	public function adpending()
	{
		$query = $this->db->query("SELECT *,tbl_listing.ID AS LID,tbl_listing.AddedBy AS LAB,tbl_listing.AddedOn AS LAO,tbl_listing.Status AS LS FROM tbl_listing INNER JOIN tbl_user ON tbl_listing.AddedBy = tbl_user.ID INNER JOIN tbl_model ON tbl_listing.Model = tbl_model.ID WHERE tbl_listing.Status = 0");
		$data["listings"] = $query->result();
		
		$this->load->view('header_admin');
		$this->load->view('admin/ad/pending.php', $data);
		$this->load->view('footer_admin');
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
			case "DeleteAd":
				$this->db->delete('tbl_listing', array('ID' => $obj->id));
			break;
		}
	}
}
