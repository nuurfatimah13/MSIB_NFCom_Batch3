<?php 

  class BarangInvenModel {
    private $table = 'brg_inventaris';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllBarangInven()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getBarangInvenById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataBarangInven($data) 
    {
      $query = "INSERT INTO brg_inventaris
                VALUES
                ('', :kode, :nama, :barang_id)";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('barang_id', $data['barang_id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataBarangInven($id) {
      $query = "DELETE FROM brg_inventaris WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataBarangInven($data) {
      $query = "UPDATE brg_inventaris SET
                  kode = :kode, 
                  nama = :nama,
                  barang_id = :barang_id
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('barang_id', $data['barang_id']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataBarangInven() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM brg_inventaris WHERE nama LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  