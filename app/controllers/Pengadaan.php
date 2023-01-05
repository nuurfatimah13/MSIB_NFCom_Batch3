<?php 

  class Pengadaan extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Pengadaan';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['brg'] = $this->model('BarangModel')->getAllBarang();
      $data['spl'] = $this->model('SupplierModel')->getAllSupplier();
      $data['pts'] = $this->model('PetugasModel')->getAllPetugas();
      $data['pgdn'] = $this->model('PengadaanModel')->getAllPengadaan();
      $this->view('templates/header', $data);
      $this->view('pengadaan/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Pengadaan';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['brg'] = $this->model('BarangModel')->getBarangById($id);
      $data['spl'] = $this->model('SupplierModel')->getSupplierById($id);
      $data['pts'] = $this->model('PetugasModel')->getPetugasById($id);
      $data['pgdn'] = $this->model('PengadaanModel')->getPengadaanById($id);
      $this->view('templates/header', $data);
      $this->view('pengadaan/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('PengadaanModel')->addDataPengadaan($_POST) > 0 ) {
        Flasher::setFlash('pengadaan', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/pengadaan');
        exit;
      } else {
        Flasher::setFlash('pengadaan','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/pengadaan');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('PengadaanModel')->deleteDataPengadaan($id) > 0 ) {
        Flasher::setFlash('pengadaan', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/pengadaan');
        exit;
      } else {
        Flasher::setFlash('pengadaan', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/pengadaan');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('PengadaanModel')->getPengadaanById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('PengadaanModel')->updateDataPengadaan($_POST) > 0 ) {
        Flasher::setFlash('pengadaan', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/pengadaan');
        exit;
      } else {
        Flasher::setFlash('pengadaan', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/pengadaan');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Pengadaan';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['pgdn'] = $this->model('PengadaanModel')->searchDataPengadaan();
      $this->view('templates/header', $data);
      $this->view('pengadaan/index', $data);
      $this->view('templates/footer');
    }










  }