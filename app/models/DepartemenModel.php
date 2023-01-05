<?php 

  class DepartemenModel {
    private $table = 'departemen';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllDepartemen()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getDepartemenById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataDepartemen($data) 
    {
      $query = "INSERT INTO departemen
                VALUES
                ('', :kode, :nama, :keterangan)";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('keterangan', $data['keterangan']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataDepartemen($id) {
      $query = "DELETE FROM departemen WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataDepartemen($data) {
      $query = "UPDATE departemen SET
                  kode = :kode, 
                  nama = :nama,
                  keterangan = :keterangan
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataDepartemen() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM departemen WHERE nama LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  