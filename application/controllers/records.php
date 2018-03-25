<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Records extends CI_Controller {

	public function delete($id)
    {
        if (empty($id))
        {
            show_404();
        }
                
        $this->load->model('RecordsActionDatabase');
        
        $personID = $this->RecordsActionDatabase->person_roster($id);
        
        if($personID){
			$this->session->set_flashdata('message', 'Deleted Sucessfully');
			redirect("dashboard/personrosterrecord");
		}		
    }

    public function ajax_edit_person_roster($id)
    {
        $this->load->model('Person_Roster');
        $data = $this->Person_Roster->get_by_id($id);
        echo json_encode($data);
    }

    public function update_person_roster()
    {
        
        $data = array(
                'person_id' => $this->input->post('person_id'),                
                'person_name' => $this->input->post('person_name'),
                'person_address' => $this->input->post('person_address'),
                'person_designation' => $this->input->post('person_designation'),
                'person_department' => $this->input->post('person_department'),
                'person_reporting_head' => $this->input->post('person_reporting_head'),
                'person_repoting_head_mno' => $this->input->post('person_repoting_head_mno'),
                'person_gender' => $this->input->post('person_gender'),
                'person_mno' => $this->input->post('person_mno'),
                
            );

        
        $this->load->model('Person_Roster');
        $data = $this->Person_Roster->update_PersonRoster($data);
        
        echo json_encode(array("status" => TRUE));
    }

    public function delete_person_roster($id)
    {
        
        $this->load->model('Person_Roster');
        $data = $this->Person_Roster->delete_PersonRoster($id);
        
        echo json_encode(array("status" => TRUE));
    }

    public function add_person_record()
    {
       $data = array(
                'person_name' => $this->input->post('personname'),
                'person_address' => $this->input->post('personaddress'),
                'person_designation' => $this->input->post('persondesignation'),
                'person_department' => $this->input->post('persondepartment'),
                'person_reporting_head' => $this->input->post('personreportinghead'),
                'person_repoting_head_mno' => $this->input->post('personrepotinghead_mno'),
                'person_gender' => $this->input->post('persongender'),
                'person_mno' => $this->input->post('personmno'),
                'login_id' => $this->input->post('login_id'),
        );

        $this->load->model('Person_Roster');
        $this->Person_Roster->addition_PersonRoster($data);
        echo json_encode(array("status" => TRUE));
    }

    public function add_vendor_master()
    {
       $data = array(
                'vendor_name' => $this->input->post('vendorname'),
                'vechile_no' => $this->input->post('vechileno'),
                'vendor_capacity' => $this->input->post('vendorcapacity'),
                'vendor_mno' => $this->input->post('vendormno'),
                'login_id' => $this->input->post('login_id'),
        );

        $this->load->model('Car_Vendor_Master');
        $this->Car_Vendor_Master->addition_VendorMaster($data);
        echo json_encode(array("status" => TRUE));
    }

    public function delete_vendor_master($id)
    {
        
        $this->load->model('Car_Vendor_Master');
        $data = $this->Car_Vendor_Master->delete_CarVendorMaster($id);
        
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit_vendor_master($id)
    {
        $this->load->model('Car_Vendor_Master');
        $data = $this->Car_Vendor_Master    ->get_by_id($id);
        echo json_encode($data);
    }

    public function update_vendor_master()
    {
        
        $data = array(
                'vendor_id' => $this->input->post('vendor_id'),
                'vendor_name' => $this->input->post('vendor_name'),
                'vechile_no' => $this->input->post('vechile_no'),
                'vendor_capacity' => $this->input->post('vendor_capacity'),
                'vendor_mno' => $this->input->post('vendor_mno'),
                'login_id' => $this->input->post('login_id'),
            );

        $this->load->model('Car_Vendor_Master');
        $data = $this->Car_Vendor_Master->update_VendorMaster($data);
        
        echo json_encode(array("status" => TRUE));
    }

    public function add_driver_master()
    {
       $data = array(
                'driver_name' => $this->input->post('drivername'),
                'driver_mno' => $this->input->post('drivermno'),
                'login_id' => $this->input->post('login_id'),
        );

        $this->load->model('Driver_Master');
        $this->Driver_Master->addition_DriverMaster($data);
        echo json_encode(array("status" => TRUE));
    }

    public function update_driver_master()
    {


        
        $data = array(
                'driver_id' => $this->input->post('driver_id'),
                'driver_name' => $this->input->post('driver_name'),
                'driver_mno' => $this->input->post('driver_mno'),
            );

        //print_r($data);die;

        $this->load->model('Driver_Master');
        $data = $this->Driver_Master->update_DriverMaster($data);
        
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit_driver_master($id)
    {
        $this->load->model('Driver_Master');
        $data = $this->Driver_Master->get_by_id($id);
        echo json_encode($data);
    }

    public function delete_driver_master($id)
    {
        
        $this->load->model('Driver_Master');
        $data = $this->Driver_Master->delete_driver_master($id);
        
        echo json_encode(array("status" => TRUE));
    }


}

?>