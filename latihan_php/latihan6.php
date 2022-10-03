<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myCalculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
    <style>
      .hasil {
        margin: 2rem;
      }
    </style>
  </head>
  <body>
    <div class="container px-5 my-5">   
      <div class="alert alert-primary" role="alert">
        <h3 align="center">myCalculator</h3>
      </div>
      <form id="calcForm" method="post" action="latihan5.php">
        <div class="form-floating mb-3">
          <input class="form-control" name="angka1" type="text" placeholder="Angka 1" data-sb-validations="required" />
          <label for="angka1">Angka 1</label>
          <div class="invalid-feedback" data-sb-feedback="angka1:required">Angka 1 is required.</div>
        </div>
        <div class="form-floating mb-3">
          <input class="form-control" name="angka2" type="text" placeholder="Angka 2" data-sb-validations="required" />
          <label for="angka2">Angka 2</label>
          <div class="invalid-feedback" data-sb-feedback="angka2:required">Angka 2 is required.</div>
        </div>
        <!-- <div class="form-floating mb-3">
          <input class="form-control" name="hasil" type="text" placeholder="Hasil" data-sb-validations="" value="" disabled/>
          <label for="">Hasil</label>
        </div> -->
        <div class="text-center">
          <button class="btn btn-primary btn-lg" value="+" name="proses" type="submit">+</button>
          <button class="btn btn-info btn-lg" value="-" name="proses" type="submit">-</button>
          <button class="btn btn-success btn-lg" value="×" name="proses" type="submit">×</button>
          <button class="btn btn-warning btn-lg" value="÷" name="proses" type="submit">÷</button>
        </div>
      </form>
    </div>
    <?php 
      //tangkap request form calculator
      $a1 = $_POST['angka1'];
      $a2 = $_POST['angka2'];
      $tombol = $_POST['proses'];
      //proses hitung
      function hitung($a1, $a2, $tombol){
        if($tombol == '+') $hasil = $a1 + $a2;
        else if($tombol == '-') $hasil = $a1 - $a2;
        else if($tombol == '×') $hasil = $a1 * $a2;
        else if($tombol == '÷') $hasil = $a1 / $a2;
        else $hasil = 0;
        return $hasil;  
      }
      //menampilkan hasil
      if(isset($tombol)){
    ?>
        <div class="alert alert-primary hasil" role="alert">
          Hasil perhitungan: <?= $a1 ?> <?= $tombol ?> <?= $a2 ?> = <?= hitung($a1, $a2, $tombol) ?>
        </div>
    <?php  } ?>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>