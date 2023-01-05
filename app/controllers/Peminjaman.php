<?php 

  class Peminjaman extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Peminjaman Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['brg_inven'] = $this->model('BarangInvenModel')->getAllBarangInven();
      $data['pts'] = $this->model('PetugasModel')->getAllPetugas();
      $data['pgi'] = $this->model('PegawaiModel')->getAllPegawai();
      $data['pjn'] = $this->model('PeminjamanModel')->getAllPeminjaman();
      $this->view('templates/header', $data);
      $this->view('peminjaman/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Peminjaman Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['brg_inven'] = $this->model('BarangInvenModel')->getBarangInvenById($id);
      $data['pts'] = $this->model('PetugasModel')->getPetugasById($id);
      $data['pgi'] = $this->model('PegawaiModel')->getPegawaiById($id);
      $data['pjn'] = $this->model('PeminjamanModel')->getPeminjamanById($id);
      $this->view('templates/header', $data);
      $this->view('peminjaman/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('PeminjamanModel')->addDataPeminjaman($_POST) > 0 ) {
        Flasher::setFlash('peminjaman', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/peminjaman');
        exit;
      } else {
        Flasher::setFlash('peminjaman','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/peminjaman');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('PeminjamanModel')->deleteDataPeminjaman($id) > 0 ) {
        Flasher::setFlash('peminjaman', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/peminjaman');
        exit;
      } else {
        Flasher::setFlash('peminjaman', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/peminjaman');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('PeminjamanModel')->getPeminjamanById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('PeminjamanModel')->updateDataPeminjaman($_POST) > 0 ) {
        Flasher::setFlash('peminjaman', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/peminjaman');
        exit;
      } else {
        Flasher::setFlash('peminjaman', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/peminjaman');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Peminjaman Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['pjn'] = $this->model('PeminjamanModel')->searchDataPeminjaman();
      $this->view('templates/header', $data);
      $this->view('peminjaman/index', $data);
      $this->view('templates/footer');
    }










  }