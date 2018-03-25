<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import extends CI_Controller {

  public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');//load PHPExcel library 
        
  }

	public function import_data(){
    $config = array(
      'upload_path' => FCPATH.'upload/',
      'allowed_types' => '.xlsx'
    );
    //print_r($config);

    $this->load->library('upload',$config);

    if($this->upload->do_upload('file')){
      $data = $this->upload->data();
      @chmod($data['full_path'])
    }

  }

}