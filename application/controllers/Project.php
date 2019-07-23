<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('project')->num_rows();
			$config['base_url'] = base_url().'project/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 15; 	
			
			$data['title'] = "Project";
			$data['description'] = description();
			$data['keywords'] = keywords();
		
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/project',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_where('project',array('seo_judul' => $this->uri->segment(2)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('project',array('id_project' => $row['id_project']))->num_rows();
			$config['base_url'] = base_url().'project/'.$this->uri->segment(2);
			$data['title'] = "Project $row[judul]";
			$data['description'] = cetak($row['keterangan']);
			$data['keywords'] = cetak($row['judul']);
			$data['rows'] = $row;
			
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/detailproject',$data);
		}
	}
}
