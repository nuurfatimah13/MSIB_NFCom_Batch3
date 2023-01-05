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
            <button class="btn btn-primary addButtonDataM" data-bs-toggle="modal" data-bs-target="#formModal" title="Add Data">
              <i class="fa fa-plus-square-o" aria-hidden="true"></i>
              &nbsp;Add Data
            </button>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>#</th>
                <th>Tgl. Mutasi</th>
                <th>Lokasi Lama</th>
                <th>Lokasi Baru</th>
                <th>Petugas</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                foreach ($data['mts'] as $mts ) : 
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $mts['tgl_mutasi']; ?></td>
                  <td><?= $mts['lokasi_lama']; ?></td>
                  <td><?= $mts['lokasi_baru']; ?></td>
                  <td><?= $mts['petugas']; ?></td>
                  <td>
                    <a href="<?= BASEURL; ?>/mutasi/detail/<?= $mts['id']; ?>" class="badge bg-primary ms-1" title="Detail">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/mutasi/update/<?= $mts['id']; ?>" class="badge bg-success ms-1 viewModalUpdateM" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mts['id']; ?>" title="Update">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/mutasi/delete/<?= $mts['id']; ?>" class="badge bg-danger ms-1" onclick="return confirm('Anda yakin, ingin menghapusnya?');" title="Delete">
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
        <h1 class="modal-title fs-5" id="titleModalM">Add Mutasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-boter">
        <form action="<?= BASEURL; ?>/mutasi/create" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="no">No. Mutasi</label>
              <input type="text" class="form-control" id="no" name="no">
            </div>
            <div class="form-group">
              <label for="tgl_mutasi">Tgl. Mutasi</label>
              <input type="date" class="form-control" id="tgl_mutasi" name="tgl_mutasi">
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="lokasi_id">Lokasi Lama</label>
              <select class="form-control" id="lokasi_id" name="lokasi_id">
                <?php foreach ($data['lks'] as $lks) { 
                  $lkm = $mts['lokasi_id'] == $lks['id'] ? 'selected' : '';
                  ?>
                  <option value="<?= $lks['id'] ?>" <?= $lkm ?>><?= $lks['nama'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="penempatan_id">Lokasi Baru</label>
                <select class="form-control" id="penempatan_id" name="penempatan_id">
                  <?php foreach ($data['pmpt'] as $pmpt) { 
                    $pmt = $mts['penempatan_id'] == $pmpt['id'] ? 'selected' : '';
                  ?>
                    <option value="<?= $pmpt['id'] ?>" <?= $pmt ?>><?= $pmpt['lokasi'] ?></option>
                  <?php } ?>
                </select>
              </div>
            <div class="form-group">
              <label for="petugas_id">Petugas</label>
              <select class="form-control" id="petugas_id" name="petugas_id">
                <?php foreach ($data['pts'] as $pts) { 
                  $mtp = $mts['petugas_id'] == $pts['id'] ? 'selected' : '';
                ?>
                  <option value="<?= $pts['id'] ?>" <?= $mtp ?>><?= $pts['nama'] ?></option>
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