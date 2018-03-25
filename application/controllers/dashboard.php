<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function dashboard1()
	{
		$data['menuName'] = "Dashboard";
		$this->load->view('include/dashboardHeader');
		$this->load->view('include/headerMenu',$data);
		$this->load->view('include/leftMenu');		
		$this->load->view('dashboard1');
		$this->load->view('include/dashboardFooter');	
	}

	public function dashboard2()
	{
		$data['menuName'] = "Daily Roaster Upload";
		$this->load->view('include/dashboardHeader');
		$this->load->view('include/headerMenu',$data);
		$this->load->view('include/leftMenu');
		$this->load->view('dashboard2');
		$this->load->view('include/dashboardFooter');	
	}

	public function personrosterrecord()
	{
		$data['menuName'] = "Person Records";
		
		$this->load->view('include/datatableHeader');
		$this->load->view('include/headerMenu',$data);
		$this->load->view('include/leftMenu');
		$this->load->view('personrecord');
		$this->load->view('include/datatableFooter');	
	}
	public function vendormasterrecord()
	{
		$data['menuName'] = "Vendor Records";
		$this->load->view('include/datatableHeader');
		$this->load->view('include/headerMenu',$data);
		$this->load->view('include/leftMenu');
		$this->load->view('vendormaster');
		$this->load->view('include/datatableFooter');	
	}
	public function drivermasterrecord()
	{
		$data['menuName'] = "Driver Records";
		$this->load->view('include/datatableHeader');
		$this->load->view('include/headerMenu',$data);
		$this->load->view('include/leftMenu');
		$this->load->view('drivermaster');
		$this->load->view('include/datatableFooter');	
	}
	public function mappingrecord()
	{
		$data['menuName'] = "Mapping Vehicle Driver";
		$this->load->view('include/datatableHeader');
		$this->load->view('include/headerMenu',$data);
		$this->load->view('include/leftMenu');
		$this->load->view('mapping');
		$this->load->view('include/datatableFooter');	
	}

}
