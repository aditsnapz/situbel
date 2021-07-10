<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonitoringDn extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('ReportModel');
        $this->load->model('ReporttypeModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
		$id = $this->uri->segment(3);
		$users = $this->UserModel->show_detail_study_id($id)[0];
		// var_dump($users);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "monitoringdnprofile",
            "content" => [],
			"category" => 'profile',
			"users" => $users,
			"users_id" => $id,
			
            
        ]);
    }

	public function livingcost()
	{
		$id = $this->uri->segment(4);
		$report_type = $this->ReporttypeModel->show_id(1);
		$reports = $this->ReportModel->show_report_tubeldn($id,$report_type->id);
		// var_dump($reports);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "monitoringdn",
            "content" => [],
			"category" => 'livingcost',
			"users_id" => $id,
			"reports" => $reports
            
        ]);
	}

	public function tuitionfee()
	{
		$id = $this->uri->segment(4);
		$report_type = $this->ReporttypeModel->show_id(2);
		$reports = $this->ReportModel->show_report_tubeldn($id,$report_type->id);
		$id = $this->uri->segment(4);
        $this->load->view('main_admin.php',[
            "page" => "monitoringdn",
            "content" => [],
			"category" => 'tuitionfee',
			"users_id" => $id,
			"reports" => $reports
            
        ]);
	}

	public function pembayaran()
	{
		$id = $this->uri->segment(4);
        $this->load->view('main_admin.php',[
            "page" => "monitoringdn",
            "content" => [],
			"category" => 'pembayaran',
			"users_id" => $id,
            
        ]);
	}


}
