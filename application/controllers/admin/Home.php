<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Periksa apakah pengguna memiliki sesi yang valid
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }

    public function index() {
      
        $data = array(
            'judul_halaman' => 'halaman dashboard'
        );
        $this->template->load('admin/template','admin/dashboard');
    }
}
