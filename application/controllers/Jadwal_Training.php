<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal_training extends CI_Controller {

	public function index(){
			$jumlah= $this->model_utama->view('jadwal_training')->num_rows();
			$config['base_url'] = base_url().'jadwal_training/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 15; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "jadwal_training";
			$data['description'] = description();
			$data['keywords'] = keywords();
			if (is_numeric($dari)) {
				$data['jadwal_training'] = $this->model_utama->view_join('v_jadwal_training','users','username','id_training','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/jadwal_training',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_join_one('v_jadwal_training','users','username',array('tema_seo' => $this->uri->segment(2)),'id_training','DESC',0,1);
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$data['title'] = cetak($row['tema']);
			$data['description'] = cetak($row['isi_klien']);
			$data['keywords'] = cetak(str_replace(' ',', ',$row['tema']));
			$data['rows'] = $row;

			$dataa = array('dibaca'=>$row['dibaca']+1);
			$where = array('id_training' => $row['id_training']);
			$this->model_utama->update('jadwal_training', $dataa, $where);
			$this->template->load(template().'/template',template().'/detail_jadwal_training',$data);
		}
	}
}
