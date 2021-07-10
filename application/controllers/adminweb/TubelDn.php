<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TubelDn extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->path = 'assets/images/';
    }

	public function index()
	{
        $users = $this->UserModel->show_user_tubeldn();
		// var_dump($users);
		// die();
      
        $this->load->view('main_admin.php',[
            "page" => "tubeldn",
            "content" => [],
            "users" => $users, 
        ]);
    }

}
