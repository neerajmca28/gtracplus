<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

Class Driver_Master extends CI_Model {

	public function get_by_id($id)
    {
        $this->db->where('driver_id', $id);
        return $this->db->get('driver_master')->result();
    }

    public function update_DriverMaster($data)
	{	

		//print_r($data);die;
		$this->db->where('driver_id', $data['driver_id']);
		$this->db->update('driver_master', $data);
		return $this->db->affected_rows();
	}

	public function delete_driver_master($id)
	{	
		$this->db->where('driver_id', $id);
		return $this->db->delete('driver_master');
	}
	public function addition_DriverMaster($data)
	{	
		$this->db->insert('driver_master', $data);
		
	}


}	
