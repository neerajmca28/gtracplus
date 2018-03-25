<?php
class Excel_data_insert_model extends CI_Model {

    public function add_User($data_user){

        $this->db->insert('person_roster', $data_user);

    }

    public function vendor_master($data_user){

        $this->db->insert('car_vendor_master', $data_user);

    }

    public function driver_record($data_user){

        $this->db->insert('driver_master', $data_user);

    }
        
    public function daily_roaster($data_user){

        $this->db->insert('person_daily_roaster', $data_user);

    }

    public function daily_roaster_latlng($data_user){

        $this->db->insert('daily_roaster_lat_lng', $data_user);

    }
}

?>