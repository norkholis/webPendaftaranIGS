<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

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
        $crud->columns('id','username','password','role');
        $crud->display_as('id','ID')
				 ->display_as('username','Username')
                 ->display_as('password','Password')
				 ->display_as('role','Role');
        
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
}