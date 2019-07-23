<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Service extends CI_Controller {
	public function index(){
			$jumlah= $this->model_utama->view('service')->num_rows();
			$config['base_url'] = base_url().'service/index/'.$this->uri->segment(3);
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 15;

			$data['title'] = "Service";
			$data['description'] = description();
			$data['keywords'] = keywords();

			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/service',$data);
	}

	public function detail(){
		$query = $this->model_utama->view_where('service',array('seo_judul' => $this->uri->segment(2)));
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$jumlah= $this->model_utama->view_where('service',array('id_service' => $row['id_service']))->num_rows();
			$config['base_url'] = base_url().'service/'.$this->uri->segment(2);
			$data['title'] = "Service $row[judul]";
			$data['description'] = cetak($row['isi_keterangan']);
			$data['keywords'] = cetak($row['judul']);
			$data['rows'] = $row;

			$this->pagination->initialize($config);
			$this->template->load(template().'/template',template().'/detailservice',$data);
		}
	}
	public function watch(){
		$query = $this->model_utama->view_join_two('video','users','service','username','id_service',array('video.video_seo' => $this->uri->segment(3)),'id_video','DESC',0,1);
		if ($query->num_rows()<=0){
			redirect('main');
		}else{
			$row = $query->row_array();
			$data['title'] = cetak($row['jdl_video']);
			$data['description'] = cetak($row['keterangan']);
			$data['keywords'] = cetak($row['tagvid']);
			$data['rows'] = $row;

			$dataa = array('dilihat'=>$row['dilihat']+1);
			$where = array('id_video' => $row['id_video']);
			$this->model_utama->update('video', $dataa, $where);

			$this->load->helper('captcha');
			$vals = array(
                'img_path'	 => './captcha/',
                'img_url'	 => base_url().'captcha/',
                'font_path' => './asset/Tahoma.ttf',
                'font_size'     => 17,
                'img_width'	 => '150',
                'img_height' => 33,
                'border' => 0,
                'word_length'   => 5,
                'expiration' => 7200
            );

            $cap = create_captcha($vals);
            $data['image'] = $cap['image'];
            $this->session->set_userdata('mycaptcha', $cap['word']);
			$this->template->load(template().'/template',template().'/play',$data);
		}
	}

	function kirim_komentar(){
		if (isset($_POST['submit'])){
			$cek = $this->model_utama->view_where('video',array('id_video' => $this->input->post('a')));
			$row = $cek->row_array();
			if ($cek->num_rows()<=0){
				redirect('main');
			}else{
				if ($this->input->post() && (strtolower($this->input->post('secutity_code')) == strtolower($this->session->userdata('mycaptcha')))) {
					$data = array('id_video'=>cetak($this->input->post('a')),
		                            'nama_komentar'=>cetak($this->input->post('b')),
		                            'url'=>cetak($this->input->post('c')),
		                            'isi_komentar'=>cetak($this->input->post('e')),
		                            'tgl'=>date('Y-m-d'),
		                            'jam_komentar'=>date('H:i:s'),
		                            'aktif'=>'N');
					$this->model_utama->insert('komentarvid',$data);
					echo $this->session->set_flashdata('message', '<div class="alert alert-success"><center>Komentar anda akan tampil setelah kami setujui!</center></div>');
				}else{
					echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Security Code yang anda masukkan salah!</center></div>');
				}
			}

			redirect('service/watch/'.$row['video_seo'].'#listcomment');

		}
	}
}
