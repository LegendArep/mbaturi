<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class klien extends CI_Controller {

	public function index(){
			$jumlah= $this->model_utama->view('klien')->num_rows();
			$config['base_url'] = base_url().'klien/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 15; 	
			if ($this->uri->segment('4')==''){
				$dari = 0;
			}else{
				$dari = $this->uri->segment('4');
			}
			$data['title'] = "klien";
			$data['description'] = description();
			$data['keywords'] = keywords();
			if (is_numeric($dari)) {
				$data['klien'] = $this->model_utama->view_join('klien','users','username','id_klien','DESC',$dari,$config['per_page']);
			}else{
				redirect('main');
			}
			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/klien',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_join_one('klien','users','username',array('tema_seo' => $this->uri->segment(2)),'id_klien','DESC',0,1);
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$data['title'] = cetak($row['tema']);
			$data['description'] = cetak($row['isi_klien']);
			$data['keywords'] = cetak(str_replace(' ',', ',$row['tema']));
			$data['rows'] = $row;

			$dataa = array('dibaca'=>$row['dibaca']+1);
			$where = array('id_klien' => $row['id_klien']);
			$this->model_utama->update('klien', $dataa, $where);
			$this->template->load(template().'/template',template().'/detailklien',$data);
		}
	}
}
