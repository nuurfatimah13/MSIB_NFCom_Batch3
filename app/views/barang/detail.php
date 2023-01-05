<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?= $data['judul']; ?></h2>
          <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Kode: <?= $data['brg']['kode']; ?>
              </li>
              <li class="list-group-item">
                Nama: <?= $data['brg']['nama']; ?>
              </li>
              <li class="list-group-item">
                Kategori: <?= $data['brg']['kategori']; ?>
              </li>
              <li class="list-group-item">
                Merek: <?= $data['brg']['merek']; ?>
              </li>
              <li class="list-group-item">
                Harga: Rp <?= $data['brg']['harga']; ?>
              </li>
              <li class="list-group-item">
                Jumlah: <?= $data['brg']['jumlah']; ?> <?= $data['brg']['satuan']; ?>
              </li>
              <li class="list-group-item">
                Keterangan: <?= $data['brg']['keterangan']; ?>
              </li>
            </ul>
          </div>
          <a href="<?= BASEURL; ?>/barang/" class="card-link badge bg-success mt-3" title="Back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            &nbsp;Back
          </a>
        </div>
      </div>
    </div>
  </div>
</div>