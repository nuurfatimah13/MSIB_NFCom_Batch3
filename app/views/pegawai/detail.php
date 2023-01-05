<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?= $data['judul']; ?></h2>
          <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                NIP: <?= $data['pgi']['nip']; ?>
              </li>
              <li class="list-group-item">
                Nama: <?= $data['pgi']['nama']; ?>
              </li>
              <li class="list-group-item">
                Gender: <?= $data['pgi']['gender']; ?>
              </li>
              <li class="list-group-item">
                No HP: <?= $data['pgi']['no_hp']; ?>
              </li>
              <li class="list-group-item">
                Alamat: <?= $data['pgi']['alamat']; ?>
              </li>
            </ul>
          </div>
          <a href="<?= BASEURL; ?>/pegawai/" class="card-link badge bg-success mt-3" title="Back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            &nbsp;Back
          </a>
        </div>
      </div>
    </div>
  </div>
</div>