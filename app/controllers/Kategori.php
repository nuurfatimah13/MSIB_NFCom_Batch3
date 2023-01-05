<?php 

  class Kategori extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Kategori Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['ktg'] = $this->model('KategoriModel')->getAllKategori();
      $this->view('templates/header', $data);
      $this->view('kategori/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Kategori';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['ktg'] = $this->model('KategoriModel')->getKategoriById($id);
      $this->view('templates/header', $data);
      $this->view('kategori/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('KategoriModel')->addDataKategori($_POST) > 0 ) {
        Flasher::setFlash('kategori', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/kategori');
        exit;
      } else {
        Flasher::setFlash('kategori','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/kategori');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('KategoriModel')->deleteDataKategori($id) > 0 ) {
        Flasher::setFlash('kategori', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/kategori');
        exit;
      } else {
        Flasher::setFlash('kategori', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/kategori');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('KategoriModel')->getKategoriById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('KategoriModel')->updateDataKategori($_POST) > 0 ) {
        Flasher::setFlash('kategori', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/kategori');
        exit;
      } else {
        Flasher::setFlash('kategori', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/kategori');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Kategori Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['ktg'] = $this->model('KategoriModel')->searchDataKategori();
      $this->view('templates/header', $data);
      $this->view('kategori/index', $data);
      $this->view('templates/footer');
    }










  }