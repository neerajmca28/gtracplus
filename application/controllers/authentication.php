<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function index() {

		$data['uname'] = $this->lang->line('username');
		$data['pname'] = $this->lang->line('password');

		$this->load->view('include/header');
		$this->load->view('loginpage', $data);
		$this->load->view('include/footer');	
	}


	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$loginValue = $this->Login_Database->loginCheck($username,$password); // Check Login Value

		if($loginValue['resultLogin']):

			$loginId = $loginValue['login_id'];

			$sessionValue = $this->Login_Database->setSession($loginId); // Session Value Set

			$loginstatus   = $this->session->userdata('status');

			/*
			* $session_data holds all session data.
			*/
			$session_data = $this->session->all_userdata();

			$this->db->where("login_id", $session_data['id']);


			$personRoster = $this->db->query("SELECT * FROM person_roster where login_id = '".$session_data['id']."'")->result();
			
			$driverMaster = $this->db->query("SELECT * FROM driver_master where login_id = '".$session_data['id']."'")->result();

			$carVendorMaster = $this->db->query("SELECT * FROM car_vendor_master where login_id = '".$session_data['id']."'")->result();


			
			if((count($driverMaster) > 0) && (count($carVendorMaster) > 0) && (count($personRoster) > 0)){
					
				redirect("dashboard/dashboard2");
			}

			else{

				redirect("dashboard/dashboard1");

			}	

		else:
			redirect("welcome");

		endif;	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect("authentication");
	}
}

?>