<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

Class Person_Roster extends CI_Model {

	//var $table = 'person_roster';

	public function get_by_id($id)
    {
        $this->db->where('person_id', $id);
        return $this->db->get('person_roster')->result();
    }

    public function update_PersonRoster($data)
	{	
		
		$this->db->where('person_id', $data['person_id']);
		$this->db->update('person_roster', $data);
		return $this->db->affected_rows();
	}

	public function delete_PersonRoster($id)
	{	
		$this->db->where('person_id', $id);
		return $this->db->delete('person_roster');
	}
	public function addition_PersonRoster($data)
	{	
		$this->db->insert('person_roster', $data);
		
	}


}	
