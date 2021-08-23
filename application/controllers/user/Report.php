<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('StudyModel');
        $this->load->model('ReportModel');
        $this->load->model('ReporttypeModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
		$session = $this->session->userdata('session_user');
		$user = $this->db->get_where('users',['username' => $session['username']])->result_array();
        $reports = $this->ReportModel->show_id($user[0]['id']);
      
        $this->load->view('main_user.php',[
            "page" => "report",
            "content" => [],
            "reports" => $reports, 
        ]);
    }

	public function livingcost()
	{
		$id = $this->UserModel->show_user_session($this->session->userdata('session_user')['username'])[0]->id;
		$report_type = $this->ReporttypeModel->show_id(1);
		$reports = $this->ReportModel->show_report_tubeldn($id,$report_type->id);
		// var_dump($reports);
		// die();
        $this->load->view('main_user.php',[
            "page" => "report",
            "content" => [],
			"category" => 'Living Cost',
			"users_id" => $id,
			"reports" => $reports
            
        ]);
	}

	

	public function tuitionfee()
	{
		$id = $this->UserModel->show_user_session($this->session->userdata('session_user')['username'])[0]->id;
		$report_type = $this->ReporttypeModel->show_id(2);
		$reports = $this->ReportModel->show_report_tubeldn($id,$report_type->id);
		// $id = $this->uri->segment(4);
        $this->load->view('main_user.php',[
            "page" => "report",
            "content" => [],
			"category" => 'Tuition Fee',
			"users_id" => $id,
			"reports" => $reports
            
        ]);
	}

	public function tuitionfee_add()
	{
		
		$id = $this->UserModel->show_user_session($this->session->userdata('session_user')['username'])[0]->id;
		$study = $this->StudyModel->show_active_id($id);
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
            "admin" => 0,
            "approved_at" => 0,
            "report_type_id" => 2,
            
        ];
		// var_dump($data);
		// die();
        
        
        $this->ReportModel->insert($data);
        redirect(base_url('user/tuitionfee'));
        
	}

    

}
