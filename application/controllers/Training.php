<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Training extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('training')->num_rows();
			$config['base_url'] = base_url().'training/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 15;

			$data['title'] = "Training";
			$data['description'] = description();
			$data['keywords'] = keywords();

			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/training',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_where('training',array('seo_judul' => $this->uri->segment(2)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('training',array('id_training' => $row['id_training']))->num_rows();
			$config['base_url'] = base_url().'training/'.$this->uri->segment(2);
			$data['title'] = "Training $row[judul]";
			$data['description'] = cetak($row['isi_keterangan']);
			$data['keywords'] = cetak($row['judul']);
			$data['rows'] = $row;

			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/detailtraining',$data);
		}
	}
}
