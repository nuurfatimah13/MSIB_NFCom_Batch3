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
            <button class="btn btn-primary addButtonDataB" data-bs-toggle="modal" data-bs-target="#formModal" title="Add Data">
              <i class="fa fa-plus-square-o" aria-hidden="true"></i>
              &nbsp;Add Data
            </button>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-dark">
              <thead>
                <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Merek</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                foreach ($data['brg'] as $brg ) : 
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $brg['kode']; ?></td>
                  <td><?= $brg['nama']; ?></td>
                  <td><?= $brg['merek']; ?></td>
                  <td>Rp <?= $brg['harga']; ?></td>
                  <td><?= $brg['satuan']; ?></td>
                  <td><?= $brg['jumlah']; ?></td>
                  <td>
                    <a href="<?= BASEURL; ?>/barang/detail/<?= $brg['id']; ?>" class="badge bg-primary ms-1" title="Detail">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/barang/update/<?= $brg['id']; ?>" class="badge bg-success ms-1 viewModalUpdateB" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $brg['id']; ?>" title="Update">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/barang/delete/<?= $brg['id']; ?>" class="badge bg-danger ms-1" onclick="return confirm('Anda yakin, ingin menghapusnya?');" title="Delete">
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
        <h1 class="modal-title fs-5" id="titleModalB">Add Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-boter">
        <form action="<?= BASEURL; ?>/barang/create" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="kode">Kode</label>
              <input type="text" class="form-control" id="kode" name="kode">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="merek">Merek</label>
              <input type="text" class="form-control" id="merek" name="merek">
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
              <label for="satuan">Satuan</label>
              <select class="form-control" id="satuan" name="satuan">
                <option value="Unit">Unit</option>
                <option value="Buah">Buah</option>
                <option value="Lembar">Lembar</option>
                <option value="Rim">Rim</option>
                <option value="Roll">Roll</option>
                <option value="Set">Set</option>
              </select>
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah">
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="kategori_id">Kategori</label>
              <select class="form-control" id="kategori_id" name="kategori_id">
                <?php foreach ($data['ktg'] as $ktg) { 
                  $ktb = $brg['kategori_id'] == $ktg['id'] ? 'selected' : '';
                ?>
                  <option value="<?= $ktg['id'] ?>" <?= $ktb ?>><?= $ktg['nama'] ?></option>
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