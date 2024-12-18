<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Konten extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level')==NULL){
			redirect('auth');
		}
	}
	public function index()
	{
		$this->db->from('kategori');
		$this->db->order_by('nama_kategori', 'ASC');
		$kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();
		$data     = array(
			'kategori'	=> $kategori,
            'konten'    => $konten
		);
		$this->template->load('admin/template', 'admin/konten_index' ,$data);
	}
	public function simpan() {
        date_default_timezone_set("Asia/Jakarta");
        $namafoto = date('YmdHis') . '.jpg'; // Nama file unik berdasarkan timestamp
        $upload_path = 'assets/Modernize/upload/konten/'; // Path penyimpanan file
        $config['upload_path'] = $upload_path; 
        $config['max_size'] = 500 * 1024; // Maksimal ukuran file 500 KB
        $config['file_name'] = $namafoto; 
        $config['allowed_types'] = '*'; // Semua jenis file diperbolehkan
        $this->load->library('upload', $config);
    
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                    Ukuran foto terlalu besar, upload ulang foto dengan ukuran kurang dari 500 KB.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
            redirect('admin/konten');
        } elseif (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                    Gagal mengupload file: ' . $this->upload->display_errors() . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ');
            redirect('admin/konten');
        }
    
        // Jika upload berhasil, simpan data ke database
        $file_path = $upload_path . $namafoto; // Path lengkap file
        $data = array(
            'judul'        => $this->input->post('judul'),
            'id_kategori'  => $this->input->post('id_kategori'),
            'keterangan'   => $this->input->post('keterangan'),
            'link'         => $file_path, // Path file yang disimpan ke database
            'tanggal'      => date('Y-m-d'),
            'foto'         => $namafoto,
            'username'     => $this->session->userdata('username'),
            'slug'         => str_replace(' ', '-', $this->input->post('judul'))
        );
    
        $this->db->insert('konten', $data);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-success alert-dismissible" role="alert">
                Berhasil menambahkan konten.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ');
        redirect('admin/konten');
    }
    
    public function update() {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/Modernize/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/konten');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        } 
        $data = array(
            'judul'         => $this->input->post('judul'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'keterangan'    => $this->input->post('keterangan'),
            'slug'          => str_replace(' ', '-', $this->input->post('judul'))
        );
        $where = array(
            'foto'  => $this->input->post('nama_foto')
        );
		$this->db->update('konten', $data, $where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible" role="alert">
          Berhasil memperbarui konten
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
		');
		redirect('admin/konten');
	}
	public function delete_data($id) {
        $filename=FCPATH.'/assets/Modernize/upload/konten/'.$id;
            if (file_exists($filename)){
                unlink("./assets/Modernize/upload/konten/".$id);
            }
		$where = array(
			'foto'	=> $id
		);
		$this->db->delete('konten', $where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible" role="alert">
          Berhasil menghapus konten
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
		');
		redirect('admin/konten');
	}
}  