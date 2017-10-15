<?php  

class C_adminlogin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		$this->load->library('form_validation');
		
	}
 
	function index(){
			$this->load->view('admin/login');
	}

	function masukRegister(){
			$this->load->view('admin/bodyAdmin');
	}



	function adminmasuk() {
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$where = array(
				'username' => $username,
				'password' => $password);
		$cek = $this->My_Model->cek_admin("admin",$where)->num_rows(); 
		if($cek > 0){
			$data_session = array(
				'nama'=>$username,
				'status'=> "login"); 
			$this->session->set_userdata($data_session);
			redirect(base_url('index.php/C_admin/index'));}
		else {
			$this->index();
            echo '<script language="javascript">';
			echo 'alert("Login Gagal");';
			echo 'window.history.go(-1);';
			echo '</script>';
            redirect(base_url('index.php/C_adminlogin/index')); } }

	function validationAdmin(){
		$this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[12]|is_unique[admin.username]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]');
		
		if($this->form_validation->run() != false){
			//echo "Form validation oke";
			//$this->session->set_flashdata('message', 'Validate Oke dan sudah terdaftar');
			$this->registerAdmin();
		}else{
			$data['message'] = 'Gagal Validate';
                        $this->load->view('admin/bodyAdmin');
			//$this->session->set_flashdata('message', 'Gagal Daftar');
		}
	}

	function registerAdmin(){
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$where = array(
					'username' => $username,
					'password' => $password);
		$this->My_Model->insert_admin($where);
		$data['message'] = 'Validate berhasil';
		$this->load->view('admin/bodyAdmin', $data);

	}

	function adminlogout() {
		$this->session->sess_destroy();
		redirect(base_url('index.php/C_adminlogin')); } }
