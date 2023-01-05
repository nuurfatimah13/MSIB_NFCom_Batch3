<?php 

  class LokasiModel {
    private $table = 'lokasi';
    private $table_vw = 'lokasi_vw';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllLokasi()
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw);
      return $this->db->resultSet();
    }

    public function getLokasiById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataLokasi($data) 
    {
      $query = "INSERT INTO lokasi
                VALUES
                ('', :kode, :nama, :departemen_id)";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('departemen_id', $data['departemen_id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataLokasi($id) {
      $query = "DELETE FROM lokasi WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataLokasi($data) {
      $query = "UPDATE lokasi SET
                  kode = :kode, 
                  nama = :nama,
                  departemen_id = :departemen_id
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('kode', $data['kode']);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('departemen_id', $data['departemen_id']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataLokasi() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM lokasi WHERE nama LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  