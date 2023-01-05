<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?= $data['judul']; ?></h2>
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Code: <?= $data['lks']['kode']; ?>
              </li>
              <li class="list-group-item">
                Name: <?= $data['lks']['nama']; ?>
              </li>
              <li class="list-group-item">
                Departemen: <?= $data['lks']['departemen']; ?>
              </li>
            </ul>
          </div>
          <a href="<?= BASEURL; ?>/lokasi/" class="card-link badge bg-success mt-3" title="Back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            &nbsp;Back
          </a>
        </div>
      </div>
    </div>
  </div>
</div>