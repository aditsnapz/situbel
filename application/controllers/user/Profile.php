<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
	}

	public function index()
	{
		
		$user = $this->db->get_where('users',['username' =>  $this->session->userdata('session_user')['username']])->result_array();
		$profile = $this->UserModel->show_detail_study_id($user[0]['id'])[0];
		// var_dump($profile);
		// die();
		$this->load->view('main_user.php',[
			"page" => "profile",
			"content" => [], 
			"profile" => $profile
		]);   
	}
}
