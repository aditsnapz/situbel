<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonitoringDn extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('StudyModel');
        $this->load->model('ReportModel');
        $this->load->model('ReporttypeModel');
        $this->load->model('ReportbayarModel');
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

	public function livingcost_add()
	{
		
		$user = $this->UserModel->show_user_session($this->session->userdata('session_admin')['username']);
		$study = $this->StudyModel->show_active_id($this->input->post('user_id'));
		// var_dump($user[0]->id);
		// die();
		date_default_timezone_set("Asia/Jakarta");
        $data = [
            "users_id" => $this->input->post('user_id'),
            "study_id" => $study[0]->id,
            "report_bayar_id" => 0,
            "nama" => $this->input->post('nama'),
            "start_date" => $this->input->post('start_date'),
            "end_date" => $this->input->post('end_date'),
            "semester" => $this->input->post('semester'),
            "nominal" => $this->input->post('nominal'),
            "status" => 0,
            "keterangan" => $this->input->post('keterangan'),
            "komentar" => $this->input->post('komentar'),
            "status_bayar" => 0,
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            "admin" => $user[0]->id,
            "approved_at" => 0,
            "report_type_id" => 1,
            
        ];
		// var_dump($data);
		// die();
        
        
        $this->ReportModel->insert($data);
        redirect(base_url('admin/tubeldn/livingcost/').$this->input->post('user_id'));
        
	}

	public function tuitionfee()
	{
		$id = $this->uri->segment(4);
		$report_type = $this->ReporttypeModel->show_id(2);
		$reports = $this->ReportModel->show_report_tubeldn($id,$report_type->id);
		// $id = $this->uri->segment(4);
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
		$bayar = $this->ReportbayarModel->show_id($id);
		// living
		$reports_living = $this->ReportModel->show_report_tubeldn($id,1);
		// tuition
		$reports_tuition = $this->ReportModel->show_report_tubeldn($id,2);
		// var_dump($bayar);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "monitoringdn",
            "content" => [],
			"category" => 'pembayaran',
			"users_id" => $id,
			"bayars" => $bayar,
			"report_livings" => $reports_living,
			"report_tuitions" => $reports_tuition,
            
        ]);
	}

	public function pembayaran_add()
	{
		$id = $this->uri->segment(4);
		$user = $this->UserModel->show_user_session($this->session->userdata('session_admin')['username']);
		date_default_timezone_set("Asia/Jakarta");
        $data = [
			// "nama" => "Pembayaran".$this->input->post('tanggal_bayar'),
            "users_id" => $this->input->post('user_id'),
            "semester" => $this->input->post('semester'),
			"tanggal_bayar" => $this->input->post('tanggal_bayar'),
            "kurs" => $this->input->post('kurs'),
            "nominal" => $this->input->post('nominal'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            "admin" => $user[0]->id,
            
        ];
        $bayar = $this->ReportbayarModel->insert($data);
		$id_living = $this->input->post('living_cost');
		$id_tuition = $this->input->post('tuition_fee');
		// var_dump($id_living);
		// var_dump($id_tuition);
		// die();
		// Living Cost
		$living = [
			'report_bayar_id' => $bayar,
		];
		$this->ReportModel->update($living,$id_living);
		// Tuition Fee
		$tuition = [
			'report_bayar_id' => $bayar,
		];
		$this->ReportModel->update($tuition,$id_tuition);

        redirect(base_url('admin/tubeldn/pembayaran/').$this->input->post('user_id'));
	}

	public function pembayaran_cetak()
	{
		$id = $this->uri->segment(4);
		
		// living
		$reports = $this->ReportModel->show_bayar($id);
		
		// var_dump($id);
		// die();
        $this->load->view('pages/admin/cetakpembayaran.php',[
			"users_id" => $id,
			"reports" => $reports,
			
            
        ]);
	}

}
