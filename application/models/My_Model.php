<?php  

class My_Model extends CI_Model {


	// function getUser() {
	// 	$query = $this->db->get('user');
	// 	return $query->result_array();
	// }

	function getProduk() {
		$query = $this->db->get('tbl_produk');
		return $query->result_array();
	}

	function cek_admin($table, $where){
		return $this->db->get_where($table, $where);
	}

	function addProduk($data) {
		$this->db->insert('tbl_produk', $data);
	}
	
	function insert_admin($where){
		$this->db->insert('admin', $where);
	}

	function insert_user($table, $where){
		return $this->db->insert($table, $where);
	}

	function cek_user($table, $where){
		return $this->db->get_where($table, $where);
	}

	function getCurrentRow() {
        return $this->db->get('tbl_produk')->num_rows();
    }

    function getCurrentRowAdmin() {
        return $this->db->get('admin')->num_rows();
    }

    function getCurrentRowUser(){
    	return $this->db->get('users')->num_rows();
    } 

	  
  
}
