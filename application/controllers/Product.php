<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	//index
	public function index(){
		$data = array(	'title' 		=> 'TGM Web Digital Print',
						'isi' 			=> 'home/daftarproduct',
                        'perusahaan'	=> $this->m_home->dataPerusahaan(),
                        'kategori'      => $this->m_home->dataKategori()
					 );

		$jumlah_data 			= $this->m_home->jumlah_data();
		$config['base_url'] 	= base_url().'product/index';
		$config['total_rows'] 	= $jumlah_data;

		$config['per_page'] 	    = floatval(12);
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

		$from 						= $this->uri->segment(10);
		$this->pagination->initialize($config);

		$data['bahan'] 				= $this->m_home->get_all($config['per_page'],$from);

		$this->load->view('layout/wrapper',$data);
	}

	public function cariProduct(){
		$data = array(	'title' 		=> 'TGM Web Digital Print',
						'isi' 			=> 'home/cariproduct',
                        'perusahaan'	=> $this->m_home->dataPerusahaan(),
                        'kategori'      => $this->m_home->dataKategori()
					 );
		
		$keyword 		= $this->input->post('keyword');
		// echo"$keyword";
		$data['bahan']	=$this->m_home->get_product_keyword($keyword);

		// print_r($data['bahan']);
		 $this->load->view('layout/wrapper', $data);


	}
	public function detail($kode){

		$data = array(	'title' 		=> 'TGM Web Digital Print',
						'isi' 			=> 'home/detailproduct',
                        'perusahaan'	=> $this->m_home->dataPerusahaan(),
                        'kategori'      => $this->m_home->dataKategori()
					 );

		$data['bahan'] 					= $this->m_home->getdetail('bahan_id',$kode);

        $this->load->view('layout/wrapper', $data);
	}

}
