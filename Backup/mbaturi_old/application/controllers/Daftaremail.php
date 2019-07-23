<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftaremail extends CI_Controller {
	public function index(){

		$data['title'] = 'Daftar Email';
		$data['description'] = 'Silahkan Mendaftarkan email anda untuk informasi terbaru dari kami';
		$data['keywords'] = 'daftar, email';
		$data['rows'] = $row;
		$this->template->load(template().'/template',template().'/daftaremail',$data);
	}

	function kirim(){
		if (isset($_POST['submit'])){
			
				$data = array('email'=>cetak($this->input->post('a')));
				$this->model_utama->insert('email',$data);
				echo $this->session->set_flashdata('message', '<span class="flat-input"><div class="alert alert-success"><center>Data Terkirim ke database kami..... ! </center></div></span>');
			
			redirect('daftaremail');
		}
	}
}
