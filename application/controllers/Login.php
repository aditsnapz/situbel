<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		if($this->session->userdata('session_user')){
            redirect(base_url('Dashboard'));
        }
        $this->load->view('login_user');
    }
    
    public function do_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users',['username' => $username, 'password' => md5($password)])->result_array();
		$detail = $this->db->get_where('users_detail',['users_id' => $user[0]['id']])->result_array();
		// var_dump($detail);
		// die();
        if($user[0] != NULL && $user[0]['role'] == 10) {
        
            $data = [
                'username' => $username,
				'foto' => $user[0]['foto'],
				'nama' => $user[0]['nama'],
				'role' => $user[0]['role'],
				'status' => $detail[0]['status'],
            ];

            $this->session->set_userdata("session_user",$data);
            redirect(base_url('user/dashboard'));
        }
        $this->session->set_flashdata('info','maaf username atau password salah');
        redirect(base_url('Login'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
