<!-- flash message -->
<div class="alert-area mg-tb-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <?= Flasher::flash(); ?>
      </div>
    </div>
  </div>
</div>
<div class="product-status mg-b-30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="product-status-wrap">
          <h4>Kategori List</h4>
          <div class="add-product">
            <a type="button" class="btn addData" data-toggle="modal" data-target="#formModal" href="#">Add Kategori</a>
          </div>
          <table>
              <tr>
                <th>No</th>
                <th>Code</th>
                <th>Name</th>
                <th>Action</th>
              </tr>
            <?php 
              $no = 1;
              foreach ($data['ktg'] as $ktg) : 
            ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $ktg['kode']; ?></td>
                <td><?= $ktg['nama']; ?></td>
                <td>
                  <button data-toggle="tooltip" title="Update" class="pd-setting-ed viewUpdate">
                    <a href="<?= BASEURL; ?>/kategori/update/<?= $ktg['id']; ?>" data-toggle="modal" data-target="#formModal" data-id="<?= $ktg['id']; ?>">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                  </button>
                  <button data-toggle="tooltip" title="Delete" class="pd-setting-ed">
                    <a href="<?= BASEURL; ?>/kategori/delete/<?= $ktg['id']; ?>" onclick="return confirm('Anda yakin, ingin menghapusnya?');">
                      <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                  </button>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Add Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-boter">
        <form action="<?= BASEURL; ?>/kategori/create" method="post">
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
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">
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