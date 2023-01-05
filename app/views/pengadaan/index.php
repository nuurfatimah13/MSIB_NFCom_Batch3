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
            <button class="btn btn-primary addButtonDataPG" data-bs-toggle="modal" data-bs-target="#formModal" title="Add Data">
              <i class="fa fa-plus-square-o" aria-hidden="true"></i>
              &nbsp;Add Data
            </button>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>#</th>
                <th>Tgl. Pengadaan</th>
                <th>Jenis Pengadaan</th>
                <th>Nama Barang</th>
                <th>Supplier</th>
                <th>Petugas</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                foreach ($data['pgdn'] as $pgdn ) : 
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $pgdn['tgl_pengadaan']; ?></td>
                  <td><?= $pgdn['jenis']; ?></td>
                  <td><?= $pgdn['barang']; ?></td>
                  <td><?= $pgdn['supplier']; ?></td>
                  <td><?= $pgdn['petugas']; ?></td>
                  <td>
                    <a href="<?= BASEURL; ?>/pengadaan/detail/<?= $pgdn['id']; ?>" class="badge bg-primary ms-1" title="Detail">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/pengadaan/update/<?= $pgdn['id']; ?>" class="badge bg-success ms-1 viewModalUpdatePG" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $pgdn['id']; ?>" title="Update">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/pengadaan/delete/<?= $pgdn['id']; ?>" class="badge bg-danger ms-1" onclick="return confirm('Anda yakin, ingin menghapusnya?');" title="Delete">
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
        <h1 class="modal-title fs-5" id="titleModalPG">Add Pengadaan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-boter">
        <form action="<?= BASEURL; ?>/pengadaan/create" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="no">No. Pengadaan</label>
              <input type="text" class="form-control" id="no" name="no">
            </div>
            <div class="form-group">
              <label for="tgl_pengadaan">Tgl. Pengadaan</label>
              <input type="date" class="form-control" id="tgl_pengadaan" name="tgl_pengadaan">
            </div>
            <div class="form-group">
              <label for="jenis">Jenis Pengadaan</label>
              <select class="form-control" id="jenis" name="jenis">
                <option value="Pembelian">Pembelian</option>
                <option value="Inventaris">Inventaris</option>
                <option value="Hibah">Hibah</option>
              </select>
            </div>
            <div class="form-group">
              <label for="barang_id">Nama Barang</label>
              <select class="form-control" id="barang_id" name="barang_id">
                <?php foreach ($data['brg'] as $brg) { 
                  $brpg = $pgdn['barang_id'] == $brg['id'] ? 'selected' : '';
                ?>
                  <option value="<?= $brg['id'] ?>" <?= $brpg ?>><?= $brg['nama'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="supplier_id">Supplier</label>
              <select class="form-control" id="supplier_id" name="supplier_id">
                <?php foreach ($data['spl'] as $spl) { 
                  $slpg = $pgdn['supplier_id'] == $spl['id'] ? 'selected' : '';
                ?>
                  <option value="<?= $spl['id'] ?>" <?= $slpg ?>><?= $spl['nama'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="petugas_id">Petugas</label>
              <select class="form-control" id="petugas_id" name="petugas_id">
                <?php foreach ($data['pts'] as $pts) { 
                  $pspg = $pgdn['petugas_id'] == $pts['id'] ? 'selected' : '';
                ?>
                  <option value="<?= $pts['id'] ?>" <?= $pspg ?>><?= $pts['nama'] ?></option>
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