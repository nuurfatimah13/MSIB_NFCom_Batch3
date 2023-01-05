<?php 

  class PeminjamanModel {
    private $table = 'peminjaman';
    private $table_vw = 'peminjaman_vw';
    private $db;


    public function __construct() 
    {
      $this->db = new Database;
    }

    public function getAllPeminjaman()
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw);
      return $this->db->resultSet();
    }

    public function getPeminjamanById($id) 
    {
      $this->db->query('SELECT * FROM ' . $this->table_vw . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
    }

    public function addDataPeminjaman($data) 
    {
      $query = "INSERT INTO peminjaman
                VALUES
                ('', :no, :tgl_peminjaman, :tgl_kembali, :keterangan, :brg_inventaris_id, :petugas_id, :pegawai_id)";
      
      $this->db->query($query);

      $this->db->bind('no', $data['no']);
      $this->db->bind('tgl_peminjaman', $data['tgl_peminjaman']);
      $this->db->bind('tgl_kembali', $data['tgl_kembali']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('brg_inventaris_id', $data['brg_inventaris_id']);
      $this->db->bind('petugas_id', $data['petugas_id']);
      $this->db->bind('pegawai_id', $data['pegawai_id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function deleteDataPeminjaman($id) {
      $query = "DELETE FROM peminjaman WHERE id = :id";
      
      $this->db->query($query);
      
      $this->db->bind('id', $id);
      
      $this->db->execute();
      
      return $this->db->rowCount();
      
    }
    
    public function updateDataPeminjaman($data) {
      $query = "UPDATE peminjaman SET
                  no = :no, 
                  tgl_peminjaman = :tgl_peminjaman,
                  keterangan = :keterangan,
                  brg_inventaris_id = :brg_inventaris_id,
                  petugas_id = :petugas_id,
                  pegawai_id = :pegawai_id
                WHERE id = :id";
      
      $this->db->query($query);

      $this->db->bind('no', $data['no']);
      $this->db->bind('tgl_peminjaman', $data['tgl_peminjaman']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('brg_inventaris_id', $data['brg_inventaris_id']);
      $this->db->bind('petugas_id', $data['petugas_id']);
      $this->db->bind('pegawai_id', $data['pegawai_id']);
      $this->db->bind('id', $data['id']);

      $this->db->execute();

      return $this->db->rowCount();

    }

    public function searchDataPeminjaman() {
      $keyword = $_POST['keyword'];

      $query = "SELECT * FROM peminjaman WHERE tgl_peminjaman LIKE :keyword";

      $this->db->query($query);
      $this->db->bind('keyword', "%$keyword%");

      return $this->db->resultSet();
    }







































  }
  