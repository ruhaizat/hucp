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
}
