<?php 

  class Pegawai extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Pegawai';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['pgi'] = $this->model('PegawaiModel')->getAllPegawai();
      $this->view('templates/header', $data);
      $this->view('pegawai/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Pegawai';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['pgi'] = $this->model('PegawaiModel')->getPegawaiById($id);
      $this->view('templates/header', $data);
      $this->view('pegawai/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('PegawaiModel')->addDataPegawai($_POST) > 0 ) {
        Flasher::setFlash('pegawai', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/pegawai');
        exit;
      } else {
        Flasher::setFlash('pegawai','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/pegawai');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('PegawaiModel')->deleteDataPegawai($id) > 0 ) {
        Flasher::setFlash('pegawai', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/pegawai');
        exit;
      } else {
        Flasher::setFlash('pegawai', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/pegawai');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('PegawaiModel')->getPegawaiById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('PegawaiModel')->updateDataPegawai($_POST) > 0 ) {
        Flasher::setFlash('pegawai', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/pegawai');
        exit;
      } else {
        Flasher::setFlash('pegawai', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/pegawai');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Pegawai';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['pgi'] = $this->model('PegawaiModel')->searchDataPegawai();
      $this->view('templates/header', $data);
      $this->view('pegawai/index', $data);
      $this->view('templates/footer');
    }










  }