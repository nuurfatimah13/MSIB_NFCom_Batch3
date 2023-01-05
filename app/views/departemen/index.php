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
            <button class="btn btn-primary addButtonDataD" data-bs-toggle="modal" data-bs-target="#formModal" title="Add Data">
              <i class="fa fa-plus-square-o" aria-hidden="true"></i>
              &nbsp;Add Data
            </button>
          </div>
          <div class="table-responsive pt-3">
            <table class="table table-dark">
              <thead>
                <tr>
                <th>#</th>
                <th>Code</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $no = 1;
                foreach ($data['dpn'] as $dpn) : 
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $dpn['kode']; ?></td>
                  <td><?= $dpn['nama']; ?></td>
                  <td><?= $dpn['keterangan']; ?></td>
                  <td>
                    <a href="<?= BASEURL; ?>/departemen/detail/<?= $dpn['id']; ?>" class="badge bg-primary ms-1" title="Detail">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/departemen/update/<?= $dpn['id']; ?>" class="badge bg-success ms-1 viewModalUpdateD" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $dpn['id']; ?>" title="Update">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <a href="<?= BASEURL; ?>/departemen/delete/<?= $dpn['id']; ?>" class="badge bg-danger ms-1" onclick="return confirm('Anda yakin, ingin menghapusnya?');" title="Delete">
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
        <h1 class="modal-title fs-5" id="titleModalD">Add Departemen</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-boter">
        <form action="<?= BASEURL; ?>/departemen/create" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="kode">Code</label>
              <input type="text" class="form-control" id="kode" name="kode">
            </div>
            <div class="form-group">
              <label for="nama">Name</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="keterangan">Description</label>
              <input type="text" class="form-control" id="keterangan" name="keterangan">
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