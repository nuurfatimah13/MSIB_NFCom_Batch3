<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?= $data['judul']; ?></h2>
          <div>
            <h5>No. Peminjaman: <?= $data['pjn']['no']; ?></h5>
            <h5>Tanggal Peminjaman: <?= $data['pjn']['tgl_peminjaman']; ?></h5>
            <h5>Tanggal Pengembalian: <?= $data['pjn']['tgl_kembali']; ?></h5>
            <h5>Data Pegawai: [<?= $data['pjn']['nip_pegawai']; ?>] <?= $data['pjn']['pegawai']; ?></h5>
            <h5>Petugas: <?= $data['pjn']['petugas']; ?></h5>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-striped">
              <thead>
                <tr class="table-info">
                  <th>Kode Inventaris</th>
                  <th>Nama Barang</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?= $data['pjn']['kode_iventaris']; ?></td>
                  <td><?= $data['pjn']['barang_inven']; ?></td>
                  <td><?= $data['pjn']['keterangan']; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <a href="<?= BASEURL; ?>/peminjaman/" class="card-link badge bg-success mt-3" title="Back">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            &nbsp;Back
          </a>
        </div>
      </div>
    </div>
  </div>
</div>