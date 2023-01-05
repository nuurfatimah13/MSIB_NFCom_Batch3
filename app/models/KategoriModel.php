<?php 

  class KategoriModel {
    private $table = 'kategori';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllKategori()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getKategoriById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataKategori($data) 
    {
      $query = "INSERT INTO kategori
                VALUES
                ('', :kode, :nama)";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataKategori($id) {
      $query = "DELETE FROM kategori WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataKategori($data) {
      $query = "UPDATE kategori SET
                  kode = :kode, 
                  nama = :nama
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataKategori() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM kategori WHERE nama LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  