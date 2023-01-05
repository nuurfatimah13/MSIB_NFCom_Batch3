<?php 

  class PengadaanModel {
    private $table = 'pengadaan';
    private $table_vw = 'pengadaan_vw';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllPengadaan()
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw);
      return $this->db->resultSet();
    }

    public function getPengadaanById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataPengadaan($data) 
    {
      $query = "INSERT INTO pengadaan
                VALUES
                ('', :no, :tgl_pengadaan, :jenis, :keterangan, :barang_id, :supplier_id, :petugas_id)";
      
      $this->db->query($query);

      $this->db->bind('no', $data['no']);
      $this->db->bind('tgl_pengadaan', $data['tgl_pengadaan']);
      $this->db->bind('jenis', $data['jenis']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('barang_id', $data['barang_id']);
      $this->db->bind('supplier_id', $data['supplier_id']);
      $this->db->bind('petugas_id', $data['petugas_id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataPengadaan($id) {
      $query = "DELETE FROM pengadaan WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataPengadaan($data) {
      $query = "UPDATE pengadaan SET
                  no = :no, 
                  tgl_pengadaan = :tgl_pengadaan,
                  jenis = :jenis,
                  keterangan = :keterangan,
                  barang_id = :barang_id,
                  supplier_id = :supplier_id,
                  petugas_id = :petugas_id
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('no', $data['no']);
      $this->db->bind('tgl_pengadaan', $data['tgl_pengadaan']);
      $this->db->bind('jenis', $data['jenis']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('barang_id', $data['barang_id']);
      $this->db->bind('supplier_id', $data['supplier_id']);
      $this->db->bind('petugas_id', $data['petugas_id']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataPengadaan() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM pengadaan WHERE tgl_pengadaan LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  