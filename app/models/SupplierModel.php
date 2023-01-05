<?php 

  class SupplierModel {
    private $table = 'supplier';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllSupplier()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getSupplierById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataSupplier($data) 
    {
      $query = "INSERT INTO supplier
                VALUES
                ('', :nis, :nama, :gender, :no_hp, :perusahaan, :alamat)";
      
      $this->db->query($query);

      $this->db->bind('nis', $data['nis']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('gender', $data['gender']);
      $this->db->bind('no_hp', $data['no_hp']);
      $this->db->bind('perusahaan', $data['perusahaan']);
      $this->db->bind('alamat', $data['alamat']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataSupplier($id) {
      $query = "DELETE FROM supplier WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataSupplier($data) {
      $query = "UPDATE supplier SET
                  nis = :nis, 
                  nama = :nama,
                  gender = :gender,
                  no_hp = :no_hp,
                  perusahaan = :perusahaan,
                  alamat = :alamat
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('nis', $data['nis']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('gender', $data['gender']);
      $this->db->bind('no_hp', $data['no_hp']);
      $this->db->bind('perusahaan', $data['perusahaan']);
      $this->db->bind('alamat', $data['alamat']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataSupplier() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM supplier WHERE nama LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  