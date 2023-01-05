<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?= $data['judul']; ?></h2>
          <div>
            <h5>No. Penempatan: <?= $data['pmpt']['no']; ?></h5>
            <h5>Tanggal Penempatan: <?= $data['pmpt']['tgl_penempatan']; ?></h5>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-striped">
              <thead>
                <tr class="table-info">
                  <th>Kode Inventaris</th>
                  <th>Nama Barang</th>
                  <th>Lokasi</th>
                  <th>Petugas</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?= $data['pmpt']['kode_iventaris']; ?></td>
                  <td><?= $data['pmpt']['barang_inven']; ?></td>
                  <td><?= $data['pmpt']['lokasi']; ?></td>
                  <td><?= $data['pmpt']['petugas']; ?></td>
                  <td><?= $data['pmpt']['keterangan']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <a href="<?= BASEURL; ?>/penempatan/" class="card-link badge bg-success mt-3" title="Back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            &nbsp;Back
          </a>
        </div>
      </div>
    </div>
  </div>
</div>