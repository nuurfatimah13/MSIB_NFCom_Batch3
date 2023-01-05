<?php

class Login extends Controller {
	public function index()
	{
		$data['title'] = 'Halaman Login';

		$this->view('login/login', $data);
	}

	public function prosesAuth() {
		if($row = $this->model('LoginModel')->checkAuth($_POST) > 0 ) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['session_login'] = 'sudah_login'; 

				//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);
				
				header('location: '. base_url . '/dashboard');
		} else {
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. base_url . '/login');
			exit;	
		}
	}
}