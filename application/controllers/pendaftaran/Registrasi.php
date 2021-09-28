<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
		$this->load->model('UserDetailModel');
    }

	public function index()
	{
		$this->load->view('main_frontend.php',[
			"page" => "registrasi",
			"content" => [], 
		]);  
    }

	public function proses()
	{
		date_default_timezone_set("Asia/Jakarta");
        $data = [
            "nama" => $this->input->post('nama'),
            "username" => $this->input->post('username'),
            "role" => 10,
            "password" => md5($this->input->post('password')),
			"email" => $this->input->post('email'),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
            
        ];
		$user = $this->UserModel->insert($data);

		$data2 = [
			"id" => $user,
            "nip" => $this->input->post('nip'),
            "mobile_phone" => $this->input->post('mobile_phone'),
            
        ];
		$this->UserDetailModel->insert($data2);
        redirect(base_url());
	}
}
