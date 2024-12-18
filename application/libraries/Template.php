<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template {
    // Properti untuk menyimpan data template
    private $template_data = array();

    // Menambahkan properti untuk instance CodeIgniter
    private $CI;

    // Fungsi untuk menetapkan data ke dalam template
    public function set($name, $value) {
        $this->template_data[$name] = $value;
    }

    // Fungsi untuk memuat template dan view
    public function load($template = '', $view = '', $view_data = array(), $return = FALSE) {
        // Mendapatkan instance CodeIgniter dan menyimpannya ke dalam properti $CI
        $this->CI = &get_instance();

        // Memasukkan konten view ke dalam template
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));

        // Memuat template dengan data yang sudah di-set
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}
