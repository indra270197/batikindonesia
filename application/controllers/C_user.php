<?php  

class C_user extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
                $this->load->library('form_validation');
	}

	function index() {
		$data = $this->My_Model->getProduk();
		$this->load->view('user/home', array('data' => $data));
	}


	function userlogin() {
		$this->load->view('user/login');
	}

	function cekLogin(){
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$where = array(
				'username' => $username,
				'password' => $password);
		$cek = $this->My_Model->cek_user('users',$where)->num_rows(); 
		if($cek > 0){
			$data_session = array(
				'nama'=>$username,
				'status'=> "login"); 
			$this->session->set_userdata($data_session);
			redirect(base_url('index.php/C_user/index'));
		}
		else {
			echo '<script language="javascript">';
			echo 'alert("Login Gagal");';
			echo 'window.history.go(-1);';
			echo '</script>';
		}
	}

	function validationUser(){
		$this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[12]|is_unique[users.username]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('nama','Nama','trim|required');
		
		if($this->form_validation->run() != false){ 
            $this->registerUser();
		}else{
			$data['message'] = 'Gagal Validate';
			$this->load->view('user/login', $data);

		}
	}
	
	function registerUser(){
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');

		$where = array(
					'username' => $username,
					'password' => $password,
					'email'	   => $email,
					'nama' 	   => $nama,
					);
		$this->My_Model->insert_user("users",$where);		
		$data['message'] = 'Validate berhasil';
		$this->load->view('user/login', $data);


	}

}
