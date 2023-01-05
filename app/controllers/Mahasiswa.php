<?php

  class Mahasiswa extends Controller {
    public function index() {
      $data['judul'] = 'Daftar Mahasiswa';
      $data['mhs'] = $this->model('MahasiswaModel')->getAllMahasiswa();
      $this->view('templates/header', $data);
      $this->view('mahasiswa/index', $data);
      $this->view('templates/footer');
    }
    
    public function detail($id) {
      $data['judul'] = 'Detail Mahasiswa';
      $data['mhs'] = $this->model('MahasiswaModel')->getMahasiswaById($id);
      $this->view('templates/header', $data);
      $this->view('mahasiswa/detail', $data);
      $this->view('templates/footer');
    }
    
    public function add() {
      if ( $this->model('MahasiswaModel')->addDataMahasiswa($_POST) > 0 ) {
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      } else {
        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      }
    }
    
    public function delete($id) {
      if ( $this->model('MahasiswaModel')->deleteDataMahasiswa($id) > 0 ) {
        Flasher::setFlash('berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      } else {
        Flasher::setFlash('gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('MahasiswaModel')->getMahasiswaById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('MahasiswaModel')->updateDataMahasiswa($_POST) > 0 ) {
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      } else {
        Flasher::setFlash('gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Daftar Mahasiswa';
      $data['mhs'] = $this->model('MahasiswaModel')->searchDataMahasiswa();
      $this->view('templates/header', $data);
      $this->view('mahasiswa/index', $data);
      $this->view('templates/footer');
    }













  }