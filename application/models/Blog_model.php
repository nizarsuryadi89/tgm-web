<?php
	class Blog_model extends CI_Model {
		public function getBlog($limit, $offsite){
			$filter =  $this->input->get('find');
			$this->db->like('title', $filter);
			$this->db->limit($limit, $offsite);
			$this->db->order_by('date', 'DESC');
			return $this->db->get('tbl_article');

		}

		public function getTotalBlog()
		{
			$filter =  $this->input->get('find');
			$this->db->like('title', $filter);
			$this->db->order_by('date', 'DESC');
			return $this->db->count_all_results('tbl_article');
		}

		public function getdetailBlog($field, $value){
			$this->db->where($field, $value); // select berdasarkan URL
            return $this->db->get('tbl_article'); // mengambil query dari tabel blog
		}

		public function insertBlog($data){
			$this->db->insert('tbl_article', $data);
			return $this->db->insert_id();
		}

		public function updateBlog($id, $post){
			$this->db->where('id',$id);
			$this->db->update('tbl_article', $post);
			return $this->db->affected_rows();
		}

		public function deleteBlog($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('btbl_articlelog');
			return $this->db->affected_rows();
		}

		public function login($table,$where ){
			return $this->db->get_where($table, $where);
		}

//Model kategori

		public function kategori(){
			$query = $this->db->get("tbl_kategori");
			return $query->result_array();
		}

		public function addKategori($data){
			$this->db->insert('tbl_kategori', $data);
		}

		public function delKategori($id)
		{
			$this->db->where('kategori_kode', $id);
			$this->db->delete('tbl_kategori');
			return $this->db->affected_rows();
		}
//Model Bahan
		public function bahan(){
			$query=$this->db->get("tbl_bahan");
			return $query->result_array();
		}

		public function editBahan($id, $post){
			$this->db->where('bahan_id', $id);
			$this->db->update('tbl_bahan', $post);
			return $this->db->affected_rows();
		}
	}

?>
