<?php 

  class BarangModel {
    private $table = 'barang';
    private $table_vw = 'barang_vw';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllBarang()
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw);
      return $this->db->resultSet();
    }

    public function getBarangById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataBarang($data) 
    {
      $query = "INSERT INTO barang
                VALUES
                ('', :kode, :nama, :merek, :harga, :satuan, :jumlah, :keterangan, :kategori_id)";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('merek', $data['merek']);
      $this->db->bind('harga', $data['harga']);
      $this->db->bind('satuan', $data['satuan']);
      $this->db->bind('jumlah', $data['jumlah']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('kategori_id', $data['kategori_id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataBarang($id) {
      $query = "DELETE FROM barang WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataBarang($data) {
      $query = "UPDATE barang SET
                  kode = :kode, 
                  nama = :nama,
                  merek = :merek,
                  harga = :harga,
                  satuan = :satuan,
                  jumlah = :jumlah,
                  keterangan = :keterangan,
                  kategori_id = :kategori_id
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('merek', $data['merek']);
      $this->db->bind('harga', $data['harga']);
      $this->db->bind('satuan', $data['satuan']);
      $this->db->bind('jumlah', $data['jumlah']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('kategori_id', $data['kategori_id']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataBarang() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM barang WHERE nama LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  