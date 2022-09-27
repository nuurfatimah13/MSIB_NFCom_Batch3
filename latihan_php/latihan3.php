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
    <h3 class="text-center">Form Input Nilai</h3>
    <form id="contactForm" method="post">
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" name="nama" type="text" placeholder="Nama Mahasiswa" required/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="matkul">Mata Kuliah</label>
            <select class="form-select" name="matkul" aria-label="Mata Kuliah">
                <option value="--- Pilih Mata Kuliah ---">--- Pilih Mata Kuliah ---</option>
                <option value="Matematika Komputer">Matematika Komputer</option>
                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                <option value="Big Data">Big Data</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilai">Nilai</label>
            <input class="form-control" name="nilai" type="text" placeholder="Nilai" required/>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" name="proses" type="submit">Simpan</button>
        </div>
    </form>
    <?php 
    //tangkap request
    $nama = $_POST['nama'];
    $pelajaran = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];
    //tentukan kelulusan
    $ket = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";
    //tentukan grade nilai
    if($nilai >= 85 && $nilai <= 100) $grade = 'A';
    else if($nilai >= 75 && $nilai < 85) $grade = 'B';
    else if($nilai >= 60 && $nilai < 55) $grade = 'C';
    else if($nilai >= 30 && $nilai < 60) $grade = 'D';
    else if($nilai >= 0 && $nilai < 30) $grade = 'E';
    else $grade = '';
    //tentukan predikat
    switch($grade){
      case 'A': $predikat = 'Sangat Bagus'; break;
      case 'B': $predikat = 'Bagus'; break;
      case 'C': $predikat = 'Cukup'; break;
      case 'D': $predikat = 'Kurang Bagus'; break;
      case 'E': $predikat = 'Buruk'; break;
      default: $predikat = ''; break;
    }
    
    if(isset($tombol)){ ?>
    <div class="alert alert-primary" role="alert">
      Nama Mahasiswa: <?= $nama; ?>
      <br />Mata Kuliah: <?= $pelajaran; ?>
      <br />Nilai: <?= number_format($nilai, 2, ',', '.'); ?>
      <br />Keterangan: <?= $ket; ?>
      <br />Grade: <?= $grade; ?>
      <br />Predikat: <?= $predikat; ?>
    </div>
    <?php } ?>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>