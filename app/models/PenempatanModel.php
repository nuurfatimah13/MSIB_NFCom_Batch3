<?php 

  class PenempatanModel {
    private $table = 'penempatan';
    private $table_vw = 'penempatan_vw';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllPenempatan()
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw);
      return $this->db->resultSet();
    }

    public function getPenempatanById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataPenempatan($data) 
    {
      $query = "INSERT INTO penempatan
                VALUES
                ('', :no, :tgl_penempatan, :keterangan, :brg_inventaris_id, :lokasi_id, :petugas_id)";
      
      $this->db->query($query);

      $this->db->bind('no', $data['no']);
      $this->db->bind('tgl_penempatan', $data['tgl_penempatan']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('brg_inventaris_id', $data['brg_inventaris_id']);
      $this->db->bind('lokasi_id', $data['lokasi_id']);
      $this->db->bind('petugas_id', $data['petugas_id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataPenempatan($id) {
      $query = "DELETE FROM penempatan WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataPenempatan($data) {
      $query = "UPDATE penempatan SET
                  no = :no, 
                  tgl_penempatan = :tgl_penempatan,
                  keterangan = :keterangan,
                  brg_inventaris_id = :brg_inventaris_id,
                  lokasi_id = :lokasi_id,
                  petugas_id = :petugas_id
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('no', $data['no']);
      $this->db->bind('tgl_penempatan', $data['tgl_penempatan']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('brg_inventaris_id', $data['brg_inventaris_id']);
      $this->db->bind('lokasi_id', $data['lokasi_id']);
      $this->db->bind('petugas_id', $data['petugas_id']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataPenempatan() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM penempatan WHERE tgl_penempatan LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  