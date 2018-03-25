<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

Class Car_Vendor_Master extends CI_Model {

	public function get_by_id($id)
    {
        $this->db->where('vendor_id', $id);
        return $this->db->get('car_vendor_master')->result();
    }

    public function update_VendorMaster($data)
	{	
		$this->db->where('vendor_id', $data['vendor_id']);
		$this->db->update('car_vendor_master', $data);
		return $this->db->affected_rows();
	}

	public function delete_CarVendorMaster($id)
	{	
		$this->db->where('vendor_id', $id);
		return $this->db->delete('car_vendor_master');
	}
	public function addition_VendorMaster($data)
	{	
		$this->db->insert('car_vendor_master', $data);
		
	}


}	
