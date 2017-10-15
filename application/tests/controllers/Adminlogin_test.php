<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Adminlogin_test extends TestCase{
	
        protected $backupGlobalsBlacklist = array( '_SESSION' );
    
        public function setUp(){
            if ( isset( $_SESSION ) ) $_SESSION = array( );
            $this->resetInstance();
            $this->CI->load->model('M_crud');
            $this->obj1 = $this->CI->M_crud;
            $this->CI->load->model('My_model');
            $this->obj = $this->CI->My_model;
        }

        public function test_halamanloginadmin(){
    		$output = $this->request('GET', 'C_adminlogin/index');
    		$this->assertContains(' <title>Login || Admin</title>', $output);
	   }
        
        public function test_bodyadmin(){
    		$output = $this->request('GET', 'C_adminlogin/masukRegister');
    		$this->assertContains('<title>Register Admin || Admin</title>', $output);
	   }
        
        public function test_adminlogin(){
            $this->request('POST', 'C_adminlogin/adminmasuk',
                            [
                            'username' => 'dhila',
                            'password' => 'qqq', 
                            ]
                            );
            $this->assertEquals('dhila', $_SESSION['nama']);
	   }
        
        public function test_adminlogin_gagal1(){
            $this->request('POST', 'C_adminlogin/adminmasuk',
                [
                    'username' => 'dhila',
                    'password' => 'unmatch',
                ]);
            $this->assertRedirect('C_adminlogin/index');
            $this->assertFalse( isset($_SESSION['nama']) );
        }
        
        public function test_adminlogin_gagal2(){
            $this->request('POST', 'C_adminlogin/adminmasuk',
                [
                    'username' => '',
                    'password' => 'qqq',
                ]);
            $this->assertRedirect('C_adminlogin/index');
            $this->assertFalse( isset($_SESSION['nama']) );
        }
        
        public function test_adminlogin_gagal3(){
            $this->request('POST', 'C_adminlogin/adminmasuk',
                [
                    'username' => 'dhila',
                    'password' => '',
                ]);
            $this->assertRedirect('C_adminlogin/index');
            $this->assertFalse( isset($_SESSION['nama']) );
        }
        
        public function test_adminlogin_gagal4(){
            $this->request('POST', 'C_adminlogin/adminmasuk',
                [
                    'username' => 'dhila',
                    'password' => 'qqqw',
                ]);
            $this->assertRedirect('C_adminlogin/index');
            $this->assertFalse( isset($_SESSION['nama']) );
        }
         
        public function test_admin_logout(){
            $_SESSION['nama'] = "dhila";
            $_SESSION['status'] = "login";
            //$this->assertTrue( isset($_SESSION['nama']) );
            $this->request('GET', 'C_adminlogin/adminlogout');
            //$this->assertEquals( '', $_SESSION['nama'] );
            $this->assertRedirect(base_url('index.php/C_adminlogin'));
            //$this->assertFalse( isset($_SESSION['username']) );
        }
        //HAPUS SETELAH DI INPUT -------------------------------------------------------------------------
        
        public function test_validationAdmin_success(){
    		//$this->assertFalse( isset($_SESSION['customer']) );
    		$_SESSION['username'] = 'indra';
            $_SESSION['status'] = 'login';
            $output = $this->request('POST',
			'C_adminlogin/validationAdmin',
				[
					'username' => 'doraaa',
					'password' => '123',
                    'confirm_password' => '123',
				]
		);
		$this->assertContains('Valid', $output);
        $where = 'doraaa';
        $this->obj1->hapus_admin($where);
             //$this->assertRedirect('c_adminlogin/registerAdmin');
        }
       
        public function test_validationAdmin_fail(){
            $_SESSION['username'] = 'indra';
            $_SESSION['status'] = 'login';
                //$this->assertFalse( isset($_SESSION['customer']) );
		    $output = $this->request('POST',
			'C_adminlogin/validationAdmin',
				[
					'username' => 'testingadmingagal',
					'password' => '',
				]
		);
		    $this->assertContains('<title>Register Admin || Admin</title>', $output);
        }
        
        //adminlogin
        public function test_index_not_logged_in_admin(){
    		// This request is redirected to '/auth/login'
    		$this->request('GET', 'C_adminlogin/adminmasuk');
    		$this->assertRedirect('C_adminlogin/index');
	   }        
}
