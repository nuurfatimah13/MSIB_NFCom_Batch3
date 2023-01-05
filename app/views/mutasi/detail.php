<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?= $data['judul']; ?></h2>
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                No. Mutasi: <?= $data['mts']['no']; ?>
              </li>
              <li class="list-group-item">
                Tanggal Mutasi: <?= $data['mts']['tgl_mutasi']; ?>
              </li>
              <li class="list-group-item">
                Lokasi Lama: <?= $data['mts']['lokasi_lama']; ?>
              </li>
              <li class="list-group-item">
                Lokasi Baru: <?= $data['mts']['lokasi_baru']; ?>
              </li>
              <li class="list-group-item">
                Petugas: <?= $data['mts']['petugas']; ?>
              </li>
              <li class="list-group-item">
                Keterangan: <?= $data['mts']['keterangan']; ?>
              </li>
            </ul>
          </div>
          <a href="<?= BASEURL; ?>/mutasi/" class="card-link badge bg-success mt-3" title="Back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            &nbsp;Back
          </a>
        </div>
      </div>
    </div>
  </div>
</div>