<?php 

  class Departemen extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Departemen';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['dpn'] = $this->model('DepartemenModel')->getAllDepartemen();
      $this->view('templates/header', $data);
      $this->view('departemen/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Departemen';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['dpn'] = $this->model('DepartemenModel')->getDepartemenById($id);
      $this->view('templates/header', $data);
      $this->view('departemen/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('DepartemenModel')->addDataDepartemen($_POST) > 0 ) {
        Flasher::setFlash('departemen', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/departemen');
        exit;
      } else {
        Flasher::setFlash('departemen','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/departemen');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('DepartemenModel')->deleteDataDepartemen($id) > 0 ) {
        Flasher::setFlash('departemen', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/departemen');
        exit;
      } else {
        Flasher::setFlash('departemen', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/departemen');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('DepartemenModel')->getDepartemenById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('DepartemenModel')->updateDataDepartemen($_POST) > 0 ) {
        Flasher::setFlash('departemen', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/departemen');
        exit;
      } else {
        Flasher::setFlash('departemen', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/departemen');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Departemen';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['dpn'] = $this->model('DepartemenModel')->searchDataDepartemen();
      $this->view('templates/header', $data);
      $this->view('departemen/index', $data);
      $this->view('templates/footer');
    }










  }