<?php  

class M_Crud extends CI_Model {

	function GetBarang(){
		$data =$this->db->get('tbl_produk');
		return $data->result_array();
 	}

 	function getBarangWhere($produk_id){
 		$this->db->where('produk_id', $produk_id);
		$data =$this->db->get('tbl_produk');
		return $data->result_array();
 	}

 	function getId($where){
 		$this->db->where('produk_nama', $where);
 		$data = $this->db->get('tbl_produk');
 		return $data->result_array();
 	}

 	function Update_Data($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}

	function hapus_produk($where) {
		$this->db->where('produk_id', $where);
		$this->db->delete('tbl_produk');
	}

	function hapus_user($where) {
		$this->db->where('username', $where);
		$this->db->delete('users');
	}   

	function hapus_admin($where) {
		$this->db->where('username', $where);
		$this->db->delete('admin');
	}

	function getTotalBarang(){
		$data =$this->db->get('tbl_produk');
		return $data->num_rows();
	} 

	
	
}