<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function auth()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $cekdata = $this->login_model->auth_user($username, $password);
        if ($cekdata->num_rows()>0) {
            $data = $cekdata->row_array();
            $this->session->set_userdata('masuk', TRUE);
            if ($data['role']=='admin') {
                $this->session->set_userdata('akses', 'admin');
                $this->session->set_userdata('ses_id', $data['username']);
                redirect('admin');//isi dengan controller yang dituju
            }elseif ($data['role']=='pendaftar') {
                $this->session->set_userdata('akses', 'pendaftar');
                $this->session->set_userdata('ses_id', $data['username']);
                redirect('regis_pelatihan');
            }
        }else {
            echo $this->session->set_flashdata('msg', 'Username atau Password anda salah...');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        //$url = //isi dengan url login
        redirect($url);
    }
}