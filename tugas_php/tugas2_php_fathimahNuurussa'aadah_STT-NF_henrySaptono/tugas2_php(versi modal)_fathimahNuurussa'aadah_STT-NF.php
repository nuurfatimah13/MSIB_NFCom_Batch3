<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Memproses Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      form {
        margin-bottom: 2rem;
      }
    </style>
  </head>
  <body>
    <div class="container px-5 my-5">
      <h3 class="text-center">Form Data Pegawai</h3>
      <form id="inputForm" method="post">
        <div class="mb-3">
          <label class="form-label" for="namaPegawai">Nama Pegawai</label>
          <input class="form-control" name="namaPegawai" type="text" placeholder="Nama pegawai" required/>
        </div>
        <div class="mb-3">
          <label class="form-label" for="agama">Agama</label>
          <select class="form-select" name="agama" aria-label="Agama">
              <option value="----- Pilih Agama -----">----- Pilih Agama -----</option>
              <option value="Islam">Islam</option>
              <option value="Katholik">Katholik</option>
              <option value="Kristen">Kristen</option>
              <option value="Budha">Budha</option>
              <option value="Hindu">Hindu</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label d-block">Jabatan</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" value="Manager" type="radio" name="jabatan" />
            <label class="form-check-label" for="manager">Manager</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" value="Asisten" type="radio" name="jabatan" />
            <label class="form-check-label" for="asisten">Asisten</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" value="Kabag" type="radio" name="jabatan" />
            <label class="form-check-label" for="kabag">Kabag</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" value="Staff" type="radio" name="jabatan" />
            <label class="form-check-label" for="staff">Staff</label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label d-block">Status</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" value="Menikah" type="radio" name="status" />
            <label class="form-check-label" for="menikah">Menikah</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" value="Belum Menikah" type="radio" name="status" />
            <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="jumlahAnak">Jumlah Anak</label>
          <input class="form-control" name="jumlahAnak" type="text" placeholder="Jumlah Anak"/>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary" data-bs-toggle="modal" name="proses" data-bs-target="#exampleModal">
            Simpan
          </button>
        </div>
      </form>
      <div class="alert alert-success" role="alert">
        Note: Perlu diingat, button <b>Simpan</b> wajib di klik dua kali. <b>Pertama</b>, untuk mengirim data. <b>Kedua</b>, untuk menampilkan data yang telah dikirim. Terimakasih.
      </div>
      <?php 
      //tangkap request
      $nama = $_POST['namaPegawai'];
      $agama = $_POST['agama'];
      $posisi = $_POST['jabatan'];
      $status = $_POST['status'];
      $anak = $_POST['jumlahAnak'];
      $submit = $_POST['proses'];
      //gaji pokok
      switch($posisi){
        case 'Manager': $gapo = 20000000; break;
        case 'Asisten': $gapo = 15000000; break;
        case 'Kabag': $gapo = 10000000; break;
        case 'Staff': $gapo = 4000000; break;
        default: $gapo = ''; break;
      }
      //tunjangan jabatan
      $tubat = 0.2 * $gapo;
      //tunjangan keluarga
      if($status == 'Menikah' && $anak == 1 && $anak <= 2) $tuga = 0.05 * $gapo;
      else if($status == 'Menikah' && $anak == 3 && $anak <= 5) $tuga = 0.1 * $gapo;
      else if($status == 'Menikah' && $anak > 5) $tuga = 0.15 * $gapo;
      else $tuga;
      //gaji kotor
      $gato = $gapo + $tubat + $tuga;
      //zakat profesi
      $zapro = ($agama == 'Islam' && $gato >= 6000000) ? 0.025 * $gato : 0;
      //take home pay
      $thp = $gato - $zapro;
      
      if(isset($submit)){ ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                Data Pegawai 
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Nama Pegawai: <?= $nama; ?>
              <br />Agama: <?= $agama; ?>
              <br />Jabatan: <?= $posisi; ?>
              <br />Status: <?= $status; ?>
              <br />Jumlah Anak: <?= $anak; ?>
              <br />Gaji Pokok: <?= 'Rp. '. number_format($gapo, 2, ',', '.'); ?>
              <br />Tunjangan Jabatan: <?= 'Rp. '. number_format($tubat, 2, ',', '.'); ?>
              <br />Tunjangan Keluarga: <?= 'Rp. '. number_format($tuga, 2, ',', '.'); ?>
              <br />Gaji Kotor: <?= 'Rp. '. number_format($gato, 2, ',', '.'); ?>
              <br />Zakat Profesi: <?= 'Rp. '. number_format($zapro, 2, ',', '.'); ?>
              <br />Take Home Pay: <?= 'Rp. '. number_format($thp, 2, ',', '.'); ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>