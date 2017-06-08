<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->helper('url');
		$this->load->library('bcrypt');
		$password = '1234';
		$data["hash"] = $this->bcrypt->hash_password($password);
		$this->load->view('login', $data);
	}
	
	function auth()
	{		
		$this->load->library('bcrypt');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->query("SELECT * FROM tbl_user WHERE Username = '$username'");
		
		$usersData = $query->row();
		
		if($query->num_rows() == 0){
			$accountResult = 1;
		}
		else{
			if($this->bcrypt->check_password($password, $usersData->Password) == false) {
				$accountResult = 2;
			}else{
				if($userData->status == 1){
					$accountResult = 3;
				}
				elseif($userData->status == 3){
					$accountResult = 4;
				}
				elseif($userData->status == 4){
					$accountResult = 5;
				}else{
					$userfound = true;
					$this->db->query("UPDATE tbl_user SET LastLogin = '".date('Y-m-d H:i:s')."' WHERE Username = '$username'");
					
					$session_data = array(
						'UserID' => $userData->ID,
						'Username' => $userData->Username,
						'EmailAddress' => $userData->EmailAddress,
						'Type' => $userData->Type,
						'Group' => $userData->Group
					);
					//$this->session->set_userdata('LoggedUser', $session_data);
					
					$accountResult = 0;					
				}
			}
		}
		
		//0 = Account active
		//1 = Account not found
		//2 = Wrong password
		//3 = Account not verify
		//4 = Account deleted
		//5 = Account suspended
		if($accountResult == 0){
			redirect("login/err/0");
		}elseif($accountResult == 1){
			redirect("login/err/1");
		}elseif($accountResult == 2){
			redirect("login/err/2");
		}elseif($accountResult == 3){
			redirect("login/err/3");
		}elseif($accountResult == 4){
			redirect("login/err/4");
		}elseif($accountResult == 5){
			redirect("login/err/5");
		}
	}
	
	function Err($type){
		if($type == 1){
			$data['error'] = 'Account not found';
			$data['isPostBack'] = 'Yes';
			$data['postBackFlow'] = 'Err';
			$this->load->view('login', $data);			
		}elseif($type == 2){
			$data['error'] = 'Wrong password';
			$data['isPostBack'] = 'Yes';
			$data['postBackFlow'] = 'Err';
			$this->load->view('login', $data);			
		}elseif($type == 3){
			$data['error'] = 'Account not verify';
			$data['isPostBack'] = 'Yes';
			$data['postBackFlow'] = 'Err';
			$this->load->view('login', $data);			
		}elseif($type == 4){
			$data['error'] = 'Account deleted';
			$data['isPostBack'] = 'Yes';
			$data['postBackFlow'] = 'Err';
			$this->load->view('login', $data);			
		}elseif($type == 5){
			$data['error'] = 'Account suspended';
			$data['isPostBack'] = 'Yes';
			$data['postBackFlow'] = 'Err';
			$this->load->view('login', $data);			
		}elseif($type == 0){
			$data['error'] = 'Logged in';
			$data['isPostBack'] = 'Yes';
			$data['postBackFlow'] = 'Err';
			$this->load->view('login', $data);			
		}
	}
}
