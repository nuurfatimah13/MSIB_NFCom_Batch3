<div class="content-wrapper">
  <!-- flash message -->
  <div class="row">
    <div class="col-lg-6">
      <?= Flasher::flash(); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card card-rounded">
        <div class="card-body">
          <h2 class="card-title"><?= $data['judul']; ?></h2>
          <div class="d-sm-flex justify-content-end">
            <!-- Button trigger modal -->
            <button class="btn btn-primary addButtonDataPS" data-bs-toggle="modal" data-bs-target="#formModal" title="Add Data">
              <i class="mdi mdi-account-plus"></i>
              &nbsp;Add Data
            </button>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>#</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>No HP</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                foreach ($data['pts'] as $pts ) : 
                  $color = ($no % 2 == 0) ? 'warning' : 'info';
              ?>
                <tr class="table-<?= $color ?>">
                  <td><?= $no++ ?></td>
                  <td><?= $pts['nip']; ?></td>
                  <td><?= $pts['nama']; ?></td>
                  <td><?= $pts['gender']; ?></td>
                  <td><?= $pts['no_hp']; ?></td>
                  <td>
                    <a href="<?= BASEURL; ?>/petugas/detail/<?= $pts['id']; ?>" class="badge bg-primary ms-1" title="Detail">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/petugas/update/<?= $pts['id']; ?>" class="badge bg-success ms-1 viewModalUpdatePS" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $pts['id']; ?>" title="Update">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/petugas/delete/<?= $pts['id']; ?>" class="badge bg-danger ms-1" onclick="return confirm('Anda yakin, ingin menghapusnya?');" title="Delete">
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
        <h1 class="modal-title fs-5" id="titleModalPS">Add Petugas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-boter">
        <form action="<?= BASEURL; ?>/petugas/create" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="nip">NIP</label>
              <input type="text" class="form-control" id="nip" name="nip">
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