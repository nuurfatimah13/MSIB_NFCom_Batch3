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
            <button class="btn btn-primary addButtonDataS" data-bs-toggle="modal" data-bs-target="#formModal" title="Add Data">
              <i class="mdi mdi-account-plus"></i>
              &nbsp;Add Data
            </button>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>#</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>No HP</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                foreach ($data['spl'] as $spl ) : 
                  $color = ($no % 2 == 0) ? 'warning' : 'info';
              ?>
                <tr class="table-<?= $color ?>">
                  <td><?= $no++ ?></td>
                  <td><?= $spl['nis']; ?></td>
                  <td><?= $spl['nama']; ?></td>
                  <td><?= $spl['gender']; ?></td>
                  <td><?= $spl['no_hp']; ?></td>
                  <td>
                    <a href="<?= BASEURL; ?>/supplier/detail/<?= $spl['id']; ?>" class="badge bg-primary ms-1" title="Detail">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/supplier/update/<?= $spl['id']; ?>" class="badge bg-success ms-1 viewModalUpdateS" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $spl['id']; ?>" title="Update">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/supplier/delete/<?= $spl['id']; ?>" class="badge bg-danger ms-1" onclick="return confirm('Anda yakin, ingin menghapusnya?');" title="Delete">
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
        <h1 class="modal-title fs-5" id="titleModalS">Add Supplier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-boter">
        <form action="<?= BASEURL; ?>/supplier/create" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="nis">NIS</label>
              <input type="text" class="form-control" id="nis" name="nis">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select class="form-control" id="gender" name="gender">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="no_hp">No HP</label>
              <input type="text" class="form-control" id="no_hp" name="no_hp">
            </div>
            <div class="form-group">
              <label for="perusahaan">Perusahaan</label>
              <input type="text" class="form-control" id="perusahaan" name="perusahaan">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
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