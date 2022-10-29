<?php 
class Login extends CI_Controller{

		Public function __construct(){
			parent::__construct();
            $this->load->helper('url');	
			$this->load->library('session');	
			$this->load->model('m_data');
			date_default_timezone_set("Asia/Jakarta");
		}

		Public function index(){//halaman utama login
			$this->load->view('login');
		}
		
		Public function aksi_login(){//Jika user login
			$captcha_response = trim($this->input->post('g-recaptcha-response'));

			if($captcha_response != '')
			{
				$keySecret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
	
				$check = array(
					'secret'		=>	$keySecret,
					'response'		=>	$this->input->post('g-recaptcha-response')
				);
	
				$startProcess = curl_init();
	
				curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	
				curl_setopt($startProcess, CURLOPT_POST, true);
	
				curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));
	
				curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);
	
				curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);
	
				$receiveData = curl_exec($startProcess);
	
				$finalResponse = json_decode($receiveData, true);
	
				if($finalResponse['success'])
				{
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$passwordmd=md5($password);
			$where = array(
				'username' => $username,
				'password' => md5($password),
				);
			$datauser = $this->m_data->getWhere($where)->row_array();
		
		
				
			if($datauser){
				$data_session = array(
					'nama' => $username,
					'status' => "login",
					);
					$this->session->set_userdata($data_session);
					redirect('pengaduan');
			}
			else{
				$this->session->set_flashdata('gagal', 'Username dan Password Tidak Ditemukan');
				redirect('login');
			}
		}
		else
		{
			$this->session->set_flashdata('gagal', 'Validation Fail Try Again');

			redirect('login');
		}
	          
		}
	}

		

		Public function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}	
}