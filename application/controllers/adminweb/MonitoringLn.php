<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonitoringLn extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('UserDetailModel');
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
            "page" => "monitoringlnprofile",
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
		$reports = $this->ReportModel->show_report_tubelln($id,$report_type->id);
		// var_dump($reports);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "monitoringln",
            "content" => [],
			"category" => 'livingcost',
			"users_id" => $id,
			"reports" => $reports
            
        ]);
	}

	public function insurance()
	{
		$id = $this->uri->segment(4);
		$report_type = $this->ReporttypeModel->show_id(1);
		$reports = $this->ReportModel->show_report_tubelln($id,$report_type->id);
		// var_dump($reports);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "monitoringln",
            "content" => [],
			"category" => 'insurance',
			"users_id" => $id,
			"reports" => $reports
            
        ]);
	}

	public function dissemination()
	{
		$id = $this->uri->segment(4);
		$report_type = $this->ReporttypeModel->show_id(1);
		$reports = $this->ReportModel->show_report_tubelln($id,$report_type->id);
		// var_dump($reports);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "monitoringln",
            "content" => [],
			"category" => 'dissemination',
			"users_id" => $id,
			"reports" => $reports
            
        ]);
	}

	public function settlement()
	{
		$id = $this->uri->segment(4);
		$report_type = $this->ReporttypeModel->show_id(1);
		$reports = $this->ReportModel->show_report_tubelln($id,$report_type->id);
		// var_dump($reports);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "monitoringln",
            "content" => [],
			"category" => 'settlement',
			"users_id" => $id,
			"reports" => $reports
            
        ]);
	}

	public function entrance()
	{
		$id = $this->uri->segment(4);
		$report_type = $this->ReporttypeModel->show_id(1);
		$reports = $this->ReportModel->show_report_tubelln($id,$report_type->id);
		// var_dump($reports);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "monitoringln",
            "content" => [],
			"category" => 'entrance',
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
        redirect(base_url('admin/tubelln/livingcost/').$this->input->post('user_id'));
        
	}

	public function tuitionfee()
	{
		$id = $this->uri->segment(4);
		$report_type = $this->ReporttypeModel->show_id(2);
		$reports = $this->ReportModel->show_report_tubelln($id,$report_type->id);
		// $id = $this->uri->segment(4);
        $this->load->view('main_admin.php',[
            "page" => "monitoringln",
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
		$reports_living = $this->ReportModel->show_report_tubelln($id,1);
		// tuition
		$reports_tuition = $this->ReportModel->show_report_tubelln($id,2);
		// var_dump($bayar);
		// die();
        $this->load->view('main_admin.php',[
            "page" => "monitoringln",
            "content" => [],
			"category" => 'pembayaran',
			"users_id" => $id,
			"bayars" => $bayar,
			"report_livings" => $reports_living,
			"report_tuitions" => $reports_tuition,
            
        ]);
	}
	public function pembayaran_view_add()
	{
		$id = $this->uri->segment(5);
		// living
		$report_unpaids = $this->ReportModel->show_reportall_tubelln($id);
		$studys = $this->StudyModel->show_active_id($id);
		// var_dump($studys);
		// die();
		$this->load->view('main_admin.php',[
            "page" => "viewaddln",
            "content" => [],
			"category" => 'pembayaran',
			"users_id" => $id,
			"report_unpaids" => $report_unpaids,
            "studys" => $studys[0],
        ]);
	}

	public function pembayaran_add()
	{
		$id = $this->uri->segment(4);
		$user = $this->UserModel->show_user_session($this->session->userdata('session_admin')['username']);
		date_default_timezone_set("Asia/Jakarta");
		$biaya = $this->input->post('biaya');
		$kurs = $this->input->post('kurs');
		$parse1 = str_replace('.','',$kurs);
		$parse2 = str_replace(',','.',$parse1);
		$parse3 = round((float)$parse2, 2);
		$bayar = 0;
		for($i = 0; $i < count($biaya); $i++) {
			$bayar+= $this->ReportModel->show_id($biaya[$i])[0]->nominal;
		}
		$nominal = $bayar*$parse3+$this->input->post('biaya_admin');
        $data = [
			// "nama" => "Pembayaran".$this->input->post('tanggal_bayar'),
            "users_id" => $this->input->post('user_id'),
            "semester" => $this->input->post('semester'),
            "nomor_sk" => $this->input->post('nomor_sk'),
			"tanggal_bayar" => $this->input->post('tanggal_bayar'),
            "kurs" => $this->input->post('kurs'),
            "biaya_admin" => $this->input->post('biaya_admin'),
            "keterangan_biaya_admin" => $this->input->post('keterangan_biaya_admin'),
            "nominal" => $nominal,
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            "admin" => $user[0]->id,
            
        ];
        $report_bayar = $this->ReportbayarModel->insert($data);
		
		for($i = 0; $i < count($biaya); $i++) {
			
			$report = [
				'report_bayar_id' => $report_bayar,
			];
			$this->ReportModel->update($report,$biaya[$i]);
		}

        redirect(base_url('admin/tubelln/pembayaran/').$this->input->post('user_id'));
	}

	public function pembayaran_cetak()
	{
		$id = $this->uri->segment(4);
		
		// living
		$reports = $this->ReportModel->show_bayar($id);
		$reportbayars = $this->ReportbayarModel->show_id2($id);
		$users = $this->UserModel->show_id($reportbayars[0]->users_id);
		$users_detail = $this->UserDetailModel->show_users_id($users[0]->id);
		$study = $this->StudyModel->show_active_id($users[0]->id);
		
		// var_dump($reports);
		// var_dump($reportbayars);
		// var_dump($users);
		// die();
        $this->load->view('pages/admin/cetakpembayaran.php',[
			"users_id" => $id,
			"reports" => $reports,
			"reportbayars" => $reportbayars[0],
			"users" => $users[0],
			"users_detail" => $users_detail[0],
			"study" => $study[0],
			
            
        ]);
	}

}
