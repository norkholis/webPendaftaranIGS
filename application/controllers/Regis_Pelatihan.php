<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_Pelatihan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();

        $this->load->model('Regis_Model');
    }

    public function index()
    {
        $this->load->view('pendaftaran_pelatihan');
    }

    public function proses_add()
    {
            $pelatihan = implode(',', $_POST['pelatihan']);
            $nama = $this->input->post('nama');
            $tl = $this->input->post('tl');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $no_telp = $this->input->post('no_telp');
            $file = $this->input->post('file_upload');
            $keterbatasan = $this->input->post('keterbatasan');
            $gender = $this->input->post('gender');
            $sertifikasi = $this->input->post('sertiifikasi');
            $jumlah_keseluruhan = 600;

            $this->Regis_Model->addPendaftar($nama, $alamat, $email, $tl, $no_telp, $file, $keterbatasan, $gender, $pelatihan, $sertifikasi, $jumlah_keseluruhan);
            
            $this->load->view('instruksi_pembayaran');
        
    }
}