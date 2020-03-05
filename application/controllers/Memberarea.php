<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memberarea extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}
	//index
	public function index()
	{
		$data = array(	'title' 		=> 'TGM Web Digital Print',
						'isi' 			=> 'home/home',
						'perusahaan'	=> $this->m_home->dataPerusahaan(),
						'kategori' 		=> $this->m_home->dataKategori()
					 );

		$this->load->view('layout/wrapper', $data);
	}

    public function pendaftaran(){
        $data = array(	'title' 		=> 'TGM Web Digital Print',
						'isi' 			=> 'memberarea/pendaftaran-member',
						'perusahaan'	=> $this->m_home->dataPerusahaan(),
						'kategori' 		=> $this->m_home->dataKategori()
                     );
        $this->load->view('layout/wrapper', $data);
    }
	

}
