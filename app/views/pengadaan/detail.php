<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?= $data['judul']; ?></h2>
          <div>
            <h5>No. Pengadaan: <?= $data['pgdn']['no']; ?></h5>
            <h5>Tanggal Pengadaan: <?= $data['pgdn']['tgl_pengadaan']; ?></h5>
            <h5>Jenis Pengadaan: <?= $data['pgdn']['jenis']; ?></h5>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-striped">
              <thead>
                <tr class="table-info">
                  <th>Nama Barang</th>
                  <th>Supplier</th>
                  <th>Petugas</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?= $data['pgdn']['barang']; ?></td>
                  <td><?= $data['pgdn']['supplier']; ?></td>
                  <td><?= $data['pgdn']['petugas']; ?></td>
                  <td><?= $data['pgdn']['keterangan']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <a href="<?= BASEURL; ?>/pengadaan/" class="card-link badge bg-success mt-3" title="Back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            &nbsp;Back
          </a>
        </div>
      </div>
    </div>
  </div>
</div>