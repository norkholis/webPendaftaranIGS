<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller{

    public function index()
    {
        $this->load->view('instruksi_pembayaran');
    }
}