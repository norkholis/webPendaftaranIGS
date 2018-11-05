<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_Pelatihan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();

        $this->load->model('Regis_model');
    }

    public function index()
    {
        $x['data'] = $this->Regis_model->getDataLayanan();
        $this->load->view('pendaftaran_pelatihan', $x);
    }

    public function getDetailLayanan()
    {
        $id=$this->input->post('id');
        $data=$this->Regis_model->getDetailLayanan($id);
        // $test = $this->db->last_query();
        echo json_encode($data);
    }

    public function getRincian()
    {
        $id=$this->input->post('id');
        $data=$this->Regis_model->getDetailedLayanan($id);
        echo json_encode($data);
    }

    public function proses_add()
    {
        
            $nama = $this->input->post('nama');
            $tl = $this->input->post('tl');
            $alamat = $this->input->post('alamat');
            $email = $this->input->post('email');
            $no_telp = $this->input->post('no_telp');
            $file = $this->input->post('file_upload');
            $keterbatasan = $this->input->post('keterbatasan');
            $gender = $this->input->post('gender');
            $layanan = $this->input->post('layanan_pilihan');
            $jumlah_keseluruhan = $this->input->post('harga');
            $tempat = $this->input->post('tempat');
            $jam = $this->input->post('jam');

            $this->Regis_model->addPendaftar($nama, $alamat, $email, $tl, $no_telp, $file, $keterbatasan, $gender, $jumlah_keseluruhan, $tempat, $jam, $layanan);
            
            $data = array();
            $data['nama'] = $nama;
            $data['email'] = $email;
            $data['jumlah_keseluruhan'] = $jumlah_keseluruhan;
            $this->load->view('instruksi_pembayaran', $data);
            
        
    }
}