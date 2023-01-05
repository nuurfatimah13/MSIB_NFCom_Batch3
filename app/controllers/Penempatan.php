<?php 

  class Penempatan extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Penempatan Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['brg_inven'] = $this->model('BarangInvenModel')->getAllBarangInven();
      $data['lks'] = $this->model('LokasiModel')->getAllLokasi();
      $data['pts'] = $this->model('PetugasModel')->getAllPetugas();
      $data['pmpt'] = $this->model('PenempatanModel')->getAllPenempatan();
      $this->view('templates/header', $data);
      $this->view('penempatan/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Penempatan Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['brg_inven'] = $this->model('BarangInvenModel')->getBarangInvenById($id);
      $data['lks'] = $this->model('LokasiModel')->getLokasiById($id);
      $data['pts'] = $this->model('PetugasModel')->getPetugasById($id);
      $data['pmpt'] = $this->model('PenempatanModel')->getPenempatanById($id);
      $this->view('templates/header', $data);
      $this->view('penempatan/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('PenempatanModel')->addDataPenempatan($_POST) > 0 ) {
        Flasher::setFlash('penempatan', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/penempatan');
        exit;
      } else {
        Flasher::setFlash('penempatan','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/penempatan');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('PenempatanModel')->deleteDataPenempatan($id) > 0 ) {
        Flasher::setFlash('penempatan', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/penempatan');
        exit;
      } else {
        Flasher::setFlash('penempatan', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/penempatan');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('PenempatanModel')->getPenempatanById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('PenempatanModel')->updateDataPenempatan($_POST) > 0 ) {
        Flasher::setFlash('penempatan', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/penempatan');
        exit;
      } else {
        Flasher::setFlash('penempatan', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/penempatan');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Penempatan Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['pmpt'] = $this->model('PenempatanModel')->searchDataPenempatan();
      $this->view('templates/header', $data);
      $this->view('penempatan/index', $data);
      $this->view('templates/footer');
    }










  }