<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
    public function get_all($number,$offset){
        
        return $query = $this->db->get('tbl_bahan',$number,$offset)->result_array();
        
    }

    public function jumlah_data(){
		return $this->db->get('tbl_bahan')->num_rows();
    }
    
    public function getdetail($field, $value){
        $this->db->where($field, $value); // select berdasarkan URL
        return $this->db->get('tbl_bahan')->row_array(); // mengambil query dari tabel bahan
    }
    function search_bahan($bahan){
        $this->db->like('bahan_nama', $bahan, 'both');
        $this->db->order_by('tbl_bahan','ASC');
        $this->db->limit(10);
        return $this->db->get('tbl_bahan');
    }
    
    public function dataPerusahaan(){
        $this->db->order_by('id_perusahaan','ASC');
        $this->db->limit(1);
        return $this->db->get('tbl_perusahaan')->row_array();
    }

    public function dataKategori(){
        return $this->db->get('tbl_kategori')->result_array();
        
    }

    public function get_product_keyword($keyword){
			$this->db->select('*');
            $this->db->from('tbl_bahan');
            $this->db->join('')
			$this->db->like('bahan_nama',$keyword);

			return $this->db->get()->result_array();
		}
}
