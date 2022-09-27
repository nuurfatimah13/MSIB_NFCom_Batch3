<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Memproses Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
      .right {
        text-align: right;
      }
      .scroll {
        display: block;
        width: 100%;
        overflow: scroll;
      }
      /* responsive */
      @media screen and (max-width: 400px) {
        .card-header {
          background-color: #fdc758;
          font-size: 0.5rem;
          font-weight: bold;
          text-align: center;
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
    <div class="card">
      <div class="card-header">
        FORM DATA PEGAWAI
      </div>
      <div class="card-body">
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
            <button type="submit" class="btn btn-primary" name="proses">
              Simpan
            </button>
          </div>
        </form>
      </div>
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
    <div class="card">
      <div class="card-header">
        DATA PEGAWAI
      </div>
      <div class="card-body">
        <p class="card-text">
          <table class="scroll" cellpadding="10" cellspacing="0">
            <thead>
              <tr bgcolor="Cyan">
                <th>Nama Pegawai</th>
                <th>Agama</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Jumlah Anak</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan Jabatan</th>
                <th>Tunjangan Keluarga</th>
                <th>Gaji Kotor</th>
                <th>Zakat Profesi</th>
                <th>Take Home Pay</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?= $nama; ?></td>
                <td><?= $agama; ?></td>
                <td><?= $posisi; ?></td>
                <td><?= $status; ?></td>
                <td><?= $anak; ?></td>
                <td class="right">
                  <?= 'Rp. '. number_format($gapo, 2, ',', '.'); ?>
                </td>
                <td class="right">
                  <?= 'Rp. '. number_format($tubat, 2, ',', '.'); ?>
                </td>
                <td class="right">
                  <?= 'Rp. '. number_format($tuga, 2, ',', '.'); ?>
                </td>
                <td class="right">
                  <?= 'Rp. '. number_format($gato, 2, ',', '.'); ?>
                </td>
                <td class="right">
                  <?= 'Rp. '. number_format($zapro, 2, ',', '.'); ?>
                </td>
                <td class="right">
                  <?= 'Rp. '. number_format($thp, 2, ',', '.'); ?>
                </td>
              </tr>
            </tbody>
          </table>
        </p>
      </div>
    </div>
    <?php } ?>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>