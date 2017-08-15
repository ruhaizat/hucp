<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends CI_Controller {

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
		
		$compareData = $this->session->userdata('compareData');
		$compareID = "";
		
		foreach($compareData as $compareEach){
			$compareID .= $compareEach.",";
		}
		
		$compareID = substr($compareID, 0, -1);
		
		$querycompareL = $this->db->query("SELECT *, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.AddedBy AS LAddedBy, ST.Name AS StateName FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID INNER JOIN tbl_state AS ST ON L.State = ST.ID WHERE L.ID IN(".$compareID.") GROUP BY L.ID");
		$compareLData = $querycompareL->result();
		$data["compareLData"] = $compareLData;
				
		$data["bodyClass"] = "nav-btn-only homepage";
		
		$this->load->view("header",$data);
		$this->load->view("compare/now.php", $data);
		$this->load->view("footer");
	}
}
