<?php 

  class PetugasModel {
    private $table = 'petugas';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllPetugas()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getPetugasById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataPetugas($data) 
    {
      $query = "INSERT INTO petugas
                VALUES
                ('', :nip, :nama, :gender, :no_hp, :alamat)";
      
      $this->db->query($query);

      $this->db->bind('nip', $data['nip']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('gender', $data['gender']);
      $this->db->bind('no_hp', $data['no_hp']);
      $this->db->bind('alamat', $data['alamat']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataPetugas($id) {
      $query = "DELETE FROM petugas WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataPetugas($data) {
      $query = "UPDATE petugas SET
                  nip = :nip, 
                  nama = :nama,
                  gender = :gender,
                  no_hp = :no_hp,
                  alamat = :alamat
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('nip', $data['nip']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('gender', $data['gender']);
      $this->db->bind('no_hp', $data['no_hp']);
      $this->db->bind('alamat', $data['alamat']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataPetugas() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM petugas WHERE nama LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  