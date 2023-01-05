<?php 

  class Lokasi extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Lokasi';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['lks'] = $this->model('LokasiModel')->getAllLokasi();
      $data['dpn'] = $this->model('DepartemenModel')->getAllDepartemen();
      $this->view('templates/header', $data);
      $this->view('lokasi/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Lokasi';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['lks'] = $this->model('LokasiModel')->getLokasiById($id);
      $data['dpn'] = $this->model('DepartemenModel')->getDepartemenById($id);
      $this->view('templates/header', $data);
      $this->view('lokasi/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('LokasiModel')->addDataLokasi($_POST) > 0 ) {
        Flasher::setFlash('lokasi', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/lokasi');
        exit;
      } else {
        Flasher::setFlash('lokasi','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/lokasi');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('LokasiModel')->deleteDataLokasi($id) > 0 ) {
        Flasher::setFlash('lokasi', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/lokasi');
        exit;
      } else {
        Flasher::setFlash('lokasi', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/lokasi');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('LokasiModel')->getLokasiById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('LokasiModel')->updateDataLokasi($_POST) > 0 ) {
        Flasher::setFlash('lokasi', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/lokasi');
        exit;
      } else {
        Flasher::setFlash('lokasi', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/lokasi');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Lokasi';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['lks'] = $this->model('LokasiModel')->searchDataLokasi();
      $this->view('templates/header', $data);
      $this->view('lokasi/index', $data);
      $this->view('templates/footer');
    }










  }