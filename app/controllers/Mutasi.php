<?php 

  class Mutasi extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Mutasi Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['lks'] = $this->model('LokasiModel')->getAllLokasi();
      $data['pts'] = $this->model('PetugasModel')->getAllPetugas();
      $data['pmpt'] = $this->model('PenempatanModel')->getAllPenempatan();
      $data['mts'] = $this->model('MutasiModel')->getAllMutasi();
      $this->view('templates/header', $data);
      $this->view('mutasi/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Mutasi Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['lks'] = $this->model('LokasiModel')->getLokasiById($id);
      $data['pts'] = $this->model('PetugasModel')->getPetugasById($id);
      $data['pmpt'] = $this->model('PenempatanModel')->getPenempatanById($id);
      $data['mts'] = $this->model('MutasiModel')->getMutasiById($id);
      $this->view('templates/header', $data);
      $this->view('mutasi/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('MutasiModel')->addDataMutasi($_POST) > 0 ) {
        Flasher::setFlash('mutasi', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/mutasi');
        exit;
      } else {
        Flasher::setFlash('mutasi','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/mutasi');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('MutasiModel')->deleteDataMutasi($id) > 0 ) {
        Flasher::setFlash('mutasi', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/mutasi');
        exit;
      } else {
        Flasher::setFlash('mutasi', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/mutasi');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('MutasiModel')->getMutasiById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('MutasiModel')->updateDataMutasi($_POST) > 0 ) {
        Flasher::setFlash('mutasi', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/mutasi');
        exit;
      } else {
        Flasher::setFlash('mutasi', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/mutasi');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Mutasi Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['mts'] = $this->model('MutasiModel')->searchDataMutasi();
      $this->view('templates/header', $data);
      $this->view('mutasi/index', $data);
      $this->view('templates/footer');
    }










  }