<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');

        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null)
    {
        $this->load->view('admin.php',(array)$output);
    }
    
    public function index(){
        $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }

    public function user_manajemen()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('user');
        $crud->set_theme('datatables');
        $crud->columns('id','username','password','role','email');
        $crud->display_as('id','ID')
				 ->display_as('username','Username')
                 ->display_as('password','Password')
                 ->display_as('role','Role')
                 ->display_as('email','Email');
        
        $output = $crud->render();
		$this->_example_output($output);
    }

    public function berita_manajemen()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('berita');
        $crud->set_theme('datatables');
        $crud->columns('id','gambar','isi_berita','tanggal','tag');
        $crud->display_as('id','ID')
				 ->display_as('gambar','Gambar')
                 ->display_as('isi_berita','Konten')
                 ->display_as('tanggal','Tanggal')
                 ->display_as('tag', 'Tag');

        $crud->set_field_upload('gambar','assets/uploads/files');
        
        $output = $crud->render();
		$this->_example_output($output);
    }

    public function manajemen_layanan()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('layanan');
        $crud->set_theme('datatables');
        $crud->columns('nama_layanan', 'jenis_layanan', 'id_layanan');
        $crud->display_as('id_layanan', 'ID Layanan')
                ->display_as('nama_layanan', 'Nama Layanan')
                ->display_as('jenis_layanan', 'Jenis Layanan');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function manajemen_detail_layanan()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('detail_layanan');
        $crud->set_theme('datatables');
        $crud->columns('id_detail', 'tanggal_layanan', 'harga_layanan', 'jam_layanan', 'tempat_layanan', 'fk_id_layanan', 'detail_nama_layanan', 'deskripsi');
        $crud->display_as('id_detail', 'ID Detail')
                ->display_as('tanggal_layanan', 'Tanggal Pelaksanaan')
                ->display_as('harga_layanan', 'Biaya')
                ->display_as('jam_layanan', 'Jam Pelaksanaan')
                ->display_as('tempat_layanan', 'Tempat Pelaksanaan')
                ->display_as('fk_id_layanan', 'Kode Jenis Layanan')
                ->display_as('detail_nama_layanan', 'Nama Layanan')
                ->display_as('deskripsi', 'Deskripsi');

        $output = $crud->render();
        $this->_example_output($output);
    }
}