<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

Class Login_Database extends CI_Model {

	public function loginCheck($username,$password) {

		$condition = "username =" . "'" . $username . "' AND " . "password =" . "'" . $password . "'";
		$this->db->select('*');
		$this->db->from('login_user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		$row = $query->row();

		if ($query->num_rows() == 1) {
			
			$myObj = array(
				"resultLogin" => true,
				"login_id" => $row->id
			);
			return $myObj;

		} else {
			
			$myObj = array(
				"resultLogin" => false,
				"login_id" => $row->id
			);
			return $myObj;

		}
	}

	public function setSession($loginId){

		$this->db->where("id", $loginId);
		$value = $this->db->get("login_user")->result();

		$newdata = array(

	        'id'				=> $value[0]->id,
		    'username'			=> $value[0]->username,
		    'password'			=> $value[0]->password,
		    'email_id'			=> $value[0]->email_id
		    
		);
		

		$user_logged_in = $this->session->set_userdata($newdata);

		
		if ($user_logged_in === FALSE)
		{
		     redirect('authentication', 'refresh');
		}
		else{
			return true;
		}
	}
}	
