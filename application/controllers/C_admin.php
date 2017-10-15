<?php  

class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		$this->load->model('M_Crud');
			
	}

	function index() {
		$this->load->view('admin/HeaderAdmin');
		$this->load->view('admin/AdminPage');
	}

	function tambahproduk() {
		$this->load->view('admin/BodyForm');
		$this->load->view('admin/HeaderAdmin');
	}

	function dataproduk() {
		$data = $this->M_Crud->GetBarang();
		$this->load->view('admin/HeaderAdmin');
		$this->load->view('admin/BodyTabelProduk', array('data' => $data));
	}

	function editproduk($produk_id) {
		$produk = $this->M_Crud->getBarangWhere($produk_id);
		$data = array(
			"produk_id"			=> $produk[0]['produk_id'],	
			"produk_nama" 		=> $produk[0]['produk_nama'],
			"produk_deskripsi" 	=> $produk[0]['produk_deskripsi'],
			"produk_harga"	 	=> $produk[0]['produk_harga'],
			"produk_size" 		=> $produk[0]['produk_size'],
			
		);

		$this->load->view('admin/BodyEdit', $data);
		$this->load->view('admin/HeaderAdmin');
	}

	
	function uploadproduk() {
        $produk_id 			= $_POST['produk_id'];
		$produk_nama		= $_POST['produk_nama'];
		$produk_harga 		= $_POST['produk_harga'];
		$produk_deskripsi 	= $_POST['produk_deskripsi'];
		$produk_size		= $_POST['produk_size'];
				
		$data_insert 	= array(			
		'produk_nama' 		=> $produk_nama,
		'produk_harga' 		=> $produk_harga,
		'produk_deskripsi'	=> $produk_deskripsi,
		'produk_size'		=> $produk_size,
		);
		$where = array('produk_id' => $produk_id);
		$res = $this->M_Crud->Update_Data('tbl_produk', $data_insert, $where);
				
		if($res>=1){
			redirect('/C_admin/dataproduk');
		}
    }

	function docreateproduk() {
        $data = array(
		'produk_nama' => $this->input->post('produk_nama'),
		'produk_harga' => $this->input->post('produk_harga'),
		'produk_deskripsi' => $this->input->post('produk_deskripsi'),
		'produk_size' => $this->input->post('produk_size'),
		);
		$this->My_Model->addProduk($data);
		$this->tambahproduk();}

	function delproduk($produk_id) {
		$this->M_Crud->hapus_produk($produk_id);
        $this->dataproduk(); }

	
}
