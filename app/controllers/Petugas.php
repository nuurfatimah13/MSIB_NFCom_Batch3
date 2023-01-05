<?php 

  class Petugas extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Petugas';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['pts'] = $this->model('PetugasModel')->getAllPetugas();
      $this->view('templates/header', $data);
      $this->view('petugas/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Petugas';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['pts'] = $this->model('PetugasModel')->getPetugasById($id);
      $this->view('templates/header', $data);
      $this->view('petugas/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('PetugasModel')->addDataPetugas($_POST) > 0 ) {
        Flasher::setFlash('petugas', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/petugas');
        exit;
      } else {
        Flasher::setFlash('petugas','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/petugas');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('PetugasModel')->deleteDataPetugas($id) > 0 ) {
        Flasher::setFlash('petugas', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/petugas');
        exit;
      } else {
        Flasher::setFlash('petugas', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/petugas');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('PetugasModel')->getPetugasById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('PetugasModel')->updateDataPetugas($_POST) > 0 ) {
        Flasher::setFlash('petugas', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/petugas');
        exit;
      } else {
        Flasher::setFlash('petugas', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/petugas');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Petugas';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['pts'] = $this->model('PetugasModel')->searchDataPetugas();
      $this->view('templates/header', $data);
      $this->view('petugas/index', $data);
      $this->view('templates/footer');
    }










  }