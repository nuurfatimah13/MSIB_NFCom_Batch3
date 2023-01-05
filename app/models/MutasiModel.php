<?php 

  class MutasiModel {
    private $table = 'mutasi';
    private $table_vw = 'mutasi_vw';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllMutasi()
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw);
      return $this->db->resultSet();
    }

    public function getMutasiById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataMutasi($data) 
    {
      $query = "INSERT INTO mutasi
                VALUES
                ('', :no, :tgl_mutasi, :keterangan, :lokasi_id, :penempatan_id, :petugas_id)";
      
      $this->db->query($query);

      $this->db->bind('no', $data['no']);
      $this->db->bind('tgl_mutasi', $data['tgl_mutasi']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('lokasi_id', $data['lokasi_id']);
      $this->db->bind('penempatan_id', $data['penempatan_id']);
      $this->db->bind('petugas_id', $data['petugas_id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataMutasi($id) {
      $query = "DELETE FROM mutasi WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataMutasi($data) {
      $query = "UPDATE mutasi SET
                  no = :no, 
                  tgl_mutasi = :tgl_mutasi,
                  keterangan = :keterangan,
                  lokasi_id = :lokasi_id,
                  penempatan_id = :penempatan_id,
                  petugas_id = :petugas_id
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('no', $data['no']);
      $this->db->bind('tgl_mutasi', $data['tgl_mutasi']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('lokasi_id', $data['lokasi_id']);
      $this->db->bind('penempatan_id', $data['penempatan_id']);
      $this->db->bind('petugas_id', $data['petugas_id']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataMutasi() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM mutasi WHERE tgl_mutasi LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  