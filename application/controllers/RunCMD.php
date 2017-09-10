<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RunCMD extends CI_Controller {

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
		
	}
	public function CheckAdsDaily()
	{
		$query = $this->db->query("SELECT * FROM tbl_listing WHERE DATEDIFF(NOW(),AddedOn )>90 AND Status = 1");
		$queryData = $query->result();
		
		$IDs = "";
		foreach($queryData as $queryDataEach){
			$IDs = $IDs."|".$queryDataEach->ID;
			
			$queryAds = $this->db->query("SELECT L.ID AS LID, U.ID AS UID, U.FirstName AS UFName, U.EmailAddress AS UEmailAddress FROM tbl_listing AS L INNER JOIN tbl_user AS U ON L.AddedBy = U.ID WHERE L.ID = ".$queryDataEach->ID);
			$queryAdsData = $queryAds->row();
					
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
			$this->email->to($queryAdsData->UEmailAddress);    
			$this->email->subject("Advertisement Expired");
			$this->email->message("Dear ".$queryAdsData->UFName.",<br/><br/>Your advertisement is expired. Click <a href='".base_url()."listing/details/".$queryAdsData->LID."/".$queryAdsData->UID."'>here</a> to view.<br/><br/>Thanks<br/>Korean Used Car");
			$this->email->send();
			
			$dataarray = array(
				"Status" =>	2
			);
            
			$this->db->set($dataarray);
			$this->db->where("ID", $queryDataEach->ID);
			$this->db->update("tbl_listing");
			
			$dataarraycron = array(
				"Mode" => "CheckAdsDaily",
				"AddedOn" => date("Y-m-d H:i:s")
			);
			$this->db->insert("tbl_cronjobs", $dataarraycron);
		}
		
		if($IDs == ""){
			echo "No Ads";
		}else{
			echo $IDs;			
		}

	}
}
