<?php
    class Blog extends CI_Controller{

        function __construct(){
            parent:: __construct();
            // $this->load->database();
            // $this->load->helper('url');
			// $this->load->helper('form');
			$this->load->library('session');
			$this->load->model('Blog_model');
        }
        public function index($offsite = 0){
			$this->load->library('pagination');
			$data = array(	'title' 		=> 'TGM Web Digital Print',
							'isi' 			=> 'blog/home',
							'perusahaan'	=> $this->m_home->dataPerusahaan(),
							'kategori' 		=> $this->m_home->dataKategori()
						);

			$config['base_url'] = site_url('blog/index');
			$config['total_rows'] = $this->Blog_model->getTotalBlog();
			$config['per_page'] = 4;

			$this->pagination->initialize($config);


            $query = $this->Blog_model->getBlog($config['per_page'], $offsite);
            $data['blogs'] = $query->result_array();


            $this->load->view('layout/wrapper', $data);
        }

        public function detail($url){
			$this->load->library('pagination');
			$data = array(	'title' 		=> 'TGM Web Digital Print',
							'isi' 			=> 'blog/blog-detail',
							'perusahaan'	=> $this->m_home->dataPerusahaan(),
							'kategori' 		=> $this->m_home->dataKategori()
						);

            $query = $this->Blog_model->getdetailBlog('url',$url);
            $data['blogs'] = $query->row_array();

            $this->load->view('layout/wrapper', $data);
        }

		public function contact(){
			$this->load->view('contact');
		}

		public function login(){
			if ($this->input->post('username')){
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$where 	= array(
					'username' => $username,
					'password' => md5($password)
				);
				$ceklogin = $this->Blog_model->login('tbl_user', $where)->num_rows();

				// print_r($this->Blog_model->login('tbl_user', $where)->num_rows());

				if ($ceklogin >0){
					$data_session = array(
						'nama' 		=> $username,
						'status' 	=> 'login',
						'level' 	=> 'hak'
					);
					// if ($this->session->userdata("level") == 'dp')
					// {
						$this->session->set_userdata($data_session);
						redirect('/dashboard');
					// }
				}else{
					$this->session->set_flashdata('pesanLogin', '<div class="alert alert-danger">login gagal, Username/Password Salah</div>');
					redirect('blog/login');
				}
			}
				$this->load->view('login');
		}
		public function logout()
		{
			$this->session->set_flashdata('pesanLogout', '<div class="alert alert-danger">Anda Sudah Berhasil Logout</div>');
			$this->session->sess_destroy();
			redirect('/');
		}
		public function portopolio(){
			$this->load->view('portopolio');
		}
		public function about(){
			$this->load->view('about');
		}
		

    }
?>
