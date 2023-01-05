<?php

class Dashboard extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setFlash('Login','','Tidak ditemukan.','danger');
			header('location: '. BASEURL . '/login');
			exit;
		}
	} 
	public function index()
	{
		$data['judul'] = 'Dashboard';
    $data['nama'] = $this->model('UserModel')->getUser();

		$this->view('templates/header', $data);
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
	}
}