<?php 

  class Supplier extends Controller
  {
    public function index()
    {
      $data['judul'] = 'Supplier';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['spl'] = $this->model('SupplierModel')->getAllSupplier();
      $this->view('templates/header', $data);
      $this->view('supplier/index', $data);
      $this->view('templates/footer');
    }

    public function detail($id) {
      $data['judul'] = 'Detail Supplier';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['spl'] = $this->model('SupplierModel')->getSupplierById($id);
      $this->view('templates/header', $data);
      $this->view('supplier/detail', $data);
      $this->view('templates/footer');
    }

    public function create() 
    {
      if ( $this->model('SupplierModel')->addDataSupplier($_POST) > 0 ) {
        Flasher::setFlash('supplier', 'berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/supplier');
        exit;
      } else {
        Flasher::setFlash('supplier','gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/supplier');
        exit;
      }
    }

    public function delete($id) {
      if ( $this->model('SupplierModel')->deleteDataSupplier($id) > 0 ) {
        Flasher::setFlash('supplier', 'berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/supplier');
        exit;
      } else {
        Flasher::setFlash('supplier', 'gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/supplier');
        exit;
      }
    }
    
    public function getUpdate() {
      echo json_encode($this->model('SupplierModel')->getSupplierById($_POST['id']));
    }
    
    public function update() {
      if ( $this->model('SupplierModel')->updateDataSupplier($_POST) > 0 ) {
        Flasher::setFlash('supplier', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/supplier');
        exit;
      } else {
        Flasher::setFlash('supplier', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/supplier');
        exit;
      }
    }
    
    public function search() {
      $data['judul'] = 'Supplier';
      $data['nama'] = $this->model('UserModel')->getUser();
      $data['spl'] = $this->model('SupplierModel')->searchDataSupplier();
      $this->view('templates/header', $data);
      $this->view('supplier/index', $data);
      $this->view('templates/footer');
    }










  }