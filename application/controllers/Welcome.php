<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('Welcome_model');
		$this->load->helper('url');
	}
	
	 public function index()
	{
		$this->load->view('welcome_message');
	}

	public function showPelatihan()
	{
		$y['data'] = $this->Welcome_model->getPelatihan();
		$this->load->view('jenis_pelatihan', $y);
	}

	public function testPelatihan()
	{
		$d['data'] = $this->Welcome_model->getPelatihan();
		$this->load->view('pelatihan', $d);
	}

	public function showSertifikasi()
	{
		$x['data'] = $this->Welcome_model->getSertifikasi();
		$this->load->view('jenis_sertifikasi', $x);
	}
}
