<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excelhandler extends CI_Controller {

  public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('excel_data_insert_model');
        
  }

	public function import_data1(){
     
    $this->load->library('excel');

    $file = $_FILES['userfile1']['tmp_name'];

    $objPHPExcel = PHPExcel_IOFactory::load($file);
     
    $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
    $session_data = $this->session->all_userdata();
    //print_r($session_data);die;
    //echo $session_data['id'];die;
    foreach ($cell_collection as $cell) {
        $objWorksheet = $objPHPExcel->getActiveSheet();
        $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
        $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
        $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
        $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();

        for($i=2;$i<=$totalrows;$i++)
        {
            $person_name = $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();           
            $person_address = $objWorksheet->getCellByColumnAndRow(1,$i)->getValue(); //Excel Column 1
            $person_designation = $objWorksheet->getCellByColumnAndRow(2,$i)->getValue(); //Excel Column 2
            $person_department =$objWorksheet->getCellByColumnAndRow(3,$i)->getValue(); //Excel Column 3
            $person_reporting_head = $objWorksheet->getCellByColumnAndRow(4,$i)->getValue(); //Excel Column 4
            $person_repoting_head_mno = $objWorksheet->getCellByColumnAndRow(5,$i)->getValue(); //Excel Column 5
            $person_gender = $objWorksheet->getCellByColumnAndRow(6,$i)->getValue(); //Excel Column 6
            $person_mno = $objWorksheet->getCellByColumnAndRow(7,$i)->getValue(); //Excel Column 6
            
            $data_user=array(
              'person_name'             => $person_name, 
              'person_address'          => $person_address ,
              'person_designation'      => $person_designation ,
              'person_department'       => $person_department , 
              'person_reporting_head'   => $person_reporting_head,
              'person_repoting_head_mno'=> $person_repoting_head_mno,
              'person_gender'           => $person_gender,
              'person_mno'              => $person_mno,
              'login_id'                => $session_data['id']
            );

            //print_r($data_user);die;
            
            $this->excel_data_insert_model->add_User($data_user);
        }    
            
    }

    redirect(base_url() . "dashboard/dashboard1");
  }

  public function import_data2(){
     
    $this->load->library('excel');

    $file = $_FILES['userfile2']['tmp_name'];

    $objPHPExcel = PHPExcel_IOFactory::load($file);
     
    $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
    $session_data = $this->session->all_userdata();
    foreach ($cell_collection as $cell) {
        $objWorksheet = $objPHPExcel->getActiveSheet();
        $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
        $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
        $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
        $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
        
        for($i=2;$i<=$totalrows;$i++)
        {
            $vendor_name = $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();           
            $vechile_no = $objWorksheet->getCellByColumnAndRow(1,$i)->getValue(); //Excel Column 1
            $vendor_capacity = $objWorksheet->getCellByColumnAndRow(2,$i)->getValue(); //Excel Column 2
            $vendor_mno =$objWorksheet->getCellByColumnAndRow(3,$i)->getValue(); //Excel Column 3
            
            $data_user=array(
              'vendor_name'       => $vendor_name, 
              'vechile_no'        => $vechile_no ,
              'vendor_capacity'   => $vendor_capacity ,
              'vendor_mno'        => $vendor_mno,
              'login_id'          => $session_data['id']
            );

            $this->excel_data_insert_model->vendor_master ($data_user);
        }  
            $this->session->set_flashdata('insertRecord2', 'true');
            redirect(base_url() . "dashboard/dashboard1");
    }
  }

  public function import_data3(){
     
    $this->load->library('excel');

    $file = $_FILES['userfile3']['tmp_name'];

    $objPHPExcel = PHPExcel_IOFactory::load($file);
     
    $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
    $session_data = $this->session->all_userdata();
    foreach ($cell_collection as $cell) {
        $objWorksheet = $objPHPExcel->getActiveSheet();
        $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
        $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
        $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
        $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();

        for($i=2;$i<=$totalrows;$i++)
        {
            $driver_name = $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();           
            $driver_mno = $objWorksheet->getCellByColumnAndRow(1,$i)->getValue();
            
            $data_user=array(
              'driver_name'   => $driver_name, 
              'driver_mno'    => $driver_mno,
              'login_id'      => $session_data['id']
            );

            $this->excel_data_insert_model->driver_record($data_user);
        }    
            redirect(base_url() . "dashboard/dashboard1");
    }
  }

  public function import_daily_roaster(){
     
    $this->load->library('excel');

    $file = $_FILES['userfile']['tmp_name'];

    $objPHPExcel = PHPExcel_IOFactory::load($file);
     
    $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
    $session_data = $this->session->all_userdata();
    foreach ($cell_collection as $cell) {
        $objWorksheet = $objPHPExcel->getActiveSheet();
        $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
        $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
        $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
        $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();

        $flashdata =array();

        for($i=2;$i<=$totalrows;$i++)
        {
            $person_id = $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();           
            $person_address = $objWorksheet->getCellByColumnAndRow(1,$i)->getValue();

            //echo $person_id;die;

            $data_user=array(
              'person_id'         => $person_id, 
              'person_address'    => $person_address,
              'upload_time'       => date("Y-m-d H:i:s")
                
            );

             array_push($flashdata, $data_user);
            
        } 
    }

    $this->session->set_flashdata("someone",$flashdata);
    redirect(base_url() . "dashboard/dashboard2");


  }

  public function flashdata_save(){

    $flashRecord =  $this->input->post('dataValue');
    $session_data = $this->session->all_userdata();

    for($i=0;$i<count($flashRecord);$i++)
    {
      $splittedValue = explode("##", $flashRecord[$i]['value']);
      
      $data_user=array(
              'person_id'         => $splittedValue[0], 
              'person_address'    => $splittedValue[1],
              'login_id'          => $session_data['id'],
              'created_time'       => date("Y-m-d H:i:s")
      );

      $this->excel_data_insert_model->daily_roaster($data_user);

      $address = $splittedValue[1];

      $geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false');
      $geo = json_decode($geo, true); // Convert the JSON to an array

      if (isset($geo['status']) && ($geo['status'] == 'OK')) {
        $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
        $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude

        $data_lat_lng=array(
          'person_id'         => $splittedValue[0], 
          'latitude'          => $latitude,
          'longitude'         => $longitude,
          'login_id'          => $session_data['id']
        );

        $this->excel_data_insert_model->daily_roaster_latlng($data_lat_lng);
      }
      else{

        $data_lat_lng=array(
          'person_id'         => $splittedValue[0], 
          'latitude'          => "NULL",
          'longitude'         => "NULL",
          'login_id'          => $session_data['id']
        );

        $this->excel_data_insert_model->daily_roaster_latlng($data_lat_lng);

      }

    }

  }

  public function delete_daily_roaster(){

    $truncate = $this->db->truncate('person_daily_roaster');

    if($truncate){
      echo json_encode(array("status" => TRUE));
    }
        
    

  }

}