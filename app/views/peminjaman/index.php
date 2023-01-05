<div class="content-wrapper">
  <!-- flash message -->
  <div class="row">
    <div class="col-lg-6">
      <?= Flasher::flash(); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?= $data['judul']; ?></h2>
          <div class="add-items d-flex mb-0 justify-content-end">
            <!-- Button trigger modal -->
            <button class="btn btn-primary addButtonDataPJ" data-bs-toggle="modal" data-bs-target="#formModal" title="Add Data">
              <i class="fa fa-plus-square-o" aria-hidden="true"></i>
              &nbsp;Add Data
            </button>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>#</th>
                <th>Tgl. Peminjaman</th>
                <th>Tgl. Pengembalian</th>
                <th>Kode Inventaris</th>
                <th>Data Pegawai</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                foreach ($data['pjn'] as $pjn ) : 
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $pjn['tgl_peminjaman']; ?></td>
                  <td><?= $pjn['tgl_kembali']; ?></td>
                  <td><?= $pjn['kode_iventaris']; ?></td>
                  <td>[<?= $pjn['nip_pegawai']; ?>] <?= $pjn['pegawai']; ?></td>
                  <td>
                    <a href="<?= BASEURL; ?>/peminjaman/detail/<?= $pjn['id']; ?>" class="badge bg-primary ms-1" title="Detail">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/peminjaman/update/<?= $pjn['id']; ?>" class="badge bg-success ms-1 viewModalUpdatePJ" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $pjn['id']; ?>" title="Update">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/peminjaman/delete/<?= $pjn['id']; ?>" class="badge bg-danger ms-1" onclick="return confirm('Anda yakin, ingin menghapusnya?');" title="Delete">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="titleModalPJ">Add Peminjaman</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-boter">
        <form action="<?= BASEURL; ?>/peminjaman/create" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="no">No. Peminjaman</label>
              <input type="text" class="form-control" id="no" name="no">
            </div>
            <div class="form-group">
              <label for="tgl_peminjaman">Tgl. Peminjaman</label>
              <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman">
            </div>
            <div class="form-group">
              <label for="tgl_kembali">Tgl. Pengembalian</label>
              <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
            </div>
            <div class="form-group">
              <label for="brg_inventaris_id">Kode Inventaris</label>
              <select class="form-control" id="brg_inventaris_id" name="brg_inventaris_id">
                <?php foreach ($data['brg_inven'] as $brg_inven) { 
                  $slpg = $pjn['brg_inventaris_id'] == $brg_inven['id'] ? 'selected' : '';
                ?>
                  <option value="<?= $brg_inven['id'] ?>" <?= $slpg ?>><?= $brg_inven['kode'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="pegawai_id">Lokasi</label>
              <select class="form-control" id="pegawai_id" name="pegawai_id">
                <?php foreach ($data['pgi'] as $pgi) { 
                  $pgpn = $pjn['pegawai_id'] == $pgi['id'] ? 'selected' : '';
                ?>
                  <option value="<?= $pgi['id'] ?>" <?= $pgpn ?>>[<?= $pgi['nip'] ?>] <?= $pgi['nama'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="petugas_id">Petugas</label>
              <select class="form-control" id="petugas_id" name="petugas_id">
                <?php foreach ($data['pts'] as $pts) { 
                  $pgpn = $pjn['petugas_id'] == $pts['id'] ? 'selected' : '';
                ?>
                  <option value="<?= $pts['id'] ?>" <?= $pgpn ?>><?= $pts['nama'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">
              Cancel
            </button>
            <button type="submit" class="btn btn-primary">
              Add Data
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>