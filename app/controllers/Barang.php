<?php 

  class Barang extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['ktg'] = $this->model('KategoriModel')->getAllKategori();
      $data['brg'] = $this->model('BarangModel')->getAllBarang();
      $this->view('templates/header', $data);
      $this->view('barang/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['ktg'] = $this->model('KategoriModel')->getKategoriById($id);
      $data['brg'] = $this->model('BarangModel')->getBarangById($id);
      $this->view('templates/header', $data);
      $this->view('barang/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('BarangModel')->addDataBarang($_POST) > 0 ) {
        Flasher::setFlash('barang', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/barang');
        exit;
      } else {
        Flasher::setFlash('barang','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/barang');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('BarangModel')->deleteDataBarang($id) > 0 ) {
        Flasher::setFlash('barang', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/barang');
        exit;
      } else {
        Flasher::setFlash('barang', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/barang');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('BarangModel')->getBarangById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('BarangModel')->updateDataBarang($_POST) > 0 ) {
        Flasher::setFlash('barang', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/barang');
        exit;
      } else {
        Flasher::setFlash('barang', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/barang');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Barang';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['brg'] = $this->model('BarangModel')->searchDataBarang();
      $this->view('templates/header', $data);
      $this->view('barang/index', $data);
      $this->view('templates/footer');
    }










  }