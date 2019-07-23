<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Staff extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('staff')->num_rows();
			$config['base_url'] = base_url().'staff/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 15; 	
			
			$data['title'] = "Staff";
			$data['description'] = description();
			$data['keywords'] = keywords();



			$data['staff'] = $this->model_utama->view_ordering_limit('staff','id_staff','DESC',$dari,$config['per_page']);
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/staff',$data);
	}


}
