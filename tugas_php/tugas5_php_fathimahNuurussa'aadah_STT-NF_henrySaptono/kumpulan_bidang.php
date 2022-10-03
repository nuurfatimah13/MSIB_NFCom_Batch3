<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kumpulan Bangun Datar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"/>
    <style>
      .card {
        margin: 2rem;
      }
      .card-header {
        background-color: #5cf4f8;
        font-size: 1.3rem;
        font-weight: bold;
      }
      table {
        border: 1px solid black;
        width: 100%;
      }
      tr, th, td {
        border: 1px solid black;
      }
      th {
        text-align: center;
      }
      .center {
        text-align: center;
      }
      /* responsive */
      @media screen and (max-width: 400px) {
        .card-header {
          background-color: #fdc758;
          font-size: 0.5rem;
          font-weight: bold;
          text-align: center;
        }
        .scroll {
          display: block;
          width: 100%;
          overflow: scroll;
        }
      }
      @media screen and (min-width: 401px) and (max-width: 768px) {
        .card-header {
          background-color: #f8562e;
          font-size: 0.5rem;
          text-align: center;
        }
      }
    </style>
  </head>
  <body>
    <?php
      //sertakan file induk class
      require_once "Lingkaran.php";
      require_once "Segitiga.php";
      require_once "PersegiPanjang.php";
      
      //array scalar
      $li1 = new Lingkaran(14);
      $se1 = new Segitiga(3, 4);
      $pe1 = new PersegiPanjang(5, 4);
      $li2 = new Lingkaran(7);
      $pe2 = new PersegiPanjang(10, 5);
      
      $arr_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
      
      //array associative
      $kump_bidang = [$li1, $se1, $pe1, $li2, $pe2];
    ?>
    
    <div class="card">
      <div class="card-header">
        DATA KUMPULAN BANGUN DATAR 
      </div>
      <div class="card-body">
        <p class="card-text">
          <table class="scroll" cellpadding="10" cellspacing="0">
            <thead>
              <tr bgcolor="cyan">
                <?php foreach ($arr_judul as $jdl) { ?>
                <th><?= $jdl ?></th>
                <?php } ?>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($kump_bidang as $bidang) { 
              
              ?>
              
              <tr>
                <th><?= $no ?></th>
                <td><?= $bidang->namaBidang() ?></td>
                <td><?= $bidang->keterangan() ?></td>
                <td class="center"><?= $bidang->luasBidang() ?></td>
                <td class="center"><?= $bidang->kelilingBidang() ?></td>
              </tr>
              <?php $no++; } ?>
            </tbody>
          </table>
        </p>
      </div>
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>