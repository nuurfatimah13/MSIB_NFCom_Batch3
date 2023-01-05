(function($) {

  // Kategori
  $('.addButtonDataK').on('click', function() {

    $('#titleModalK').html('Add Kategori');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdateK').on('click', function() {

    $('#titleModalK').html('Update Kategori');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/kategori/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/kategori/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#kode').val(data.kode);
        $('#nama').val(data.nama);
        $('#id').val(data.id);
      }
    });

  });



  // Departemen
  $('.addButtonDataD').on('click', function() {

    $('#titleModalD').html('Add Departemen');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdateD').on('click', function() {

    $('#titleModalD').html('Update Departemen');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/departemen/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/departemen/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#kode').val(data.kode);
        $('#nama').val(data.nama);
        $('#keterangan').val(data.keterangan);
        $('#id').val(data.id);
      }
    });

  });



  // Lokasi
  $('.addButtonDataL').on('click', function() {

    $('#titleModalL').html('Add Lokasi');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdateL').on('click', function() {

    $('#titleModalL').html('Update Lokasi');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/lokasi/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/lokasi/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#kode').val(data.kode);
        $('#nama').val(data.nama);
        $('#departemen_id').val(data.departemen_id);
        $('#id').val(data.id);
      }
    });

  });
  
  
  // Barang
  $('.addButtonDataB').on('click', function() {

    $('#titleModalB').html('Add Barang');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdateB').on('click', function() {

    $('#titleModalB').html('Update Barang');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/barang/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/barang/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#kode').val(data.kode);
        $('#nama').val(data.nama);
        $('#merek').val(data.merek);
        $('#harga').val(data.harga);
        $('#satuan').val(data.satuan);
        $('#jumlah').val(data.jumlah);
        $('#keterangan').val(data.keterangan);
        $('#kategori_id').val(data.kategori_id);
        $('#id').val(data.id);
      }
    });

  });
  
  
  
  // Supplier
  $('.addButtonDataS').on('click', function() {

    $('#titleModalS').html('Add Supplier');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdateS').on('click', function() {

    $('#titleModalS').html('Update Supplier');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/supplier/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/supplier/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#nis').val(data.nis);
        $('#nama').val(data.nama);
        $('#gender').val(data.gender);
        $('#no_hp').val(data.no_hp);
        $('#perusahaan').val(data.perusahaan);
        $('#alamat').val(data.alamat);
        $('#id').val(data.id);
      }
    });

  });
  
  
  
  // Pegawai
  $('.addButtonDataPI').on('click', function() {

    $('#titleModalPI').html('Add Pegawai');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdatePI').on('click', function() {

    $('#titleModalPI').html('Update Pegawai');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/pegawai/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/pegawai/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#nip').val(data.nip);
        $('#nama').val(data.nama);
        $('#gender').val(data.gender);
        $('#no_hp').val(data.no_hp);
        $('#alamat').val(data.alamat);
        $('#id').val(data.id);
      }
    });

  });
  
  
  
  // Petugas
  $('.addButtonDataPS').on('click', function() {

    $('#titleModalPS').html('Add Petugas');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdatePS').on('click', function() {

    $('#titleModalPS').html('Update Petugas');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/petugas/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/petugas/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#nip').val(data.nip);
        $('#nama').val(data.nama);
        $('#gender').val(data.gender);
        $('#no_hp').val(data.no_hp);
        $('#alamat').val(data.alamat);
        $('#id').val(data.id);
      }
    });

  });
  
  
  
  // Pengadaan
  $('.addButtonDataPG').on('click', function() {

    $('#titleModalPG').html('Add Pengadaan');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdatePG').on('click', function() {

    $('#titleModalPG').html('Update Pengadaan');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/pengadaan/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/pengadaan/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#no').val(data.no);
        $('#tgl_pengadaan').val(data.tgl_pengadaan);
        $('#jenis').val(data.jenis);
        $('#keterangan').val(data.keterangan);
        $('#barang_id').val(data.barang_id);
        $('#supplier_id').val(data.supplier_id);
        $('#petugas_id').val(data.petugas_id);
        $('#id').val(data.id);
      }
    });

  });
  
  
  
  // Penempatan
  $('.addButtonDataPM').on('click', function() {

    $('#titleModalPM').html('Add Penempatan');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdatePM').on('click', function() {

    $('#titleModalPM').html('Update Penempatan');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/penempatan/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/penempatan/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#no').val(data.no);
        $('#tgl_penempatan').val(data.tgl_penempatan);
        $('#keterangan').val(data.keterangan);
        $('#brg_inventaris_id').val(data.brg_inventaris_id);
        $('#lokasi_id').val(data.lokasi_id);
        $('#petugas_id').val(data.petugas_id);
        $('#id').val(data.id);
      }
    });

  });

  
  
  // Peminjaman
  $('.addButtonDataPJ').on('click', function() {

    $('#titleModalPJ').html('Add Peminjaman');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdatePJ').on('click', function() {

    $('#titleModalPJ').html('Update Peminjaman');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/peminjaman/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/peminjaman/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#no').val(data.no);
        $('#tgl_peminjaman').val(data.tgl_peminjaman);
        $('#tgl_kembali').val(data.tgl_kembali);
        $('#keterangan').val(data.keterangan);
        $('#brg_inventaris_id').val(data.brg_inventaris_id);
        $('#pegawai_id').val(data.pegawai_id);
        $('#petugas_id').val(data.petugas_id);
        $('#id').val(data.id);
      }
    });

  });
  
  
  
  // Mutasi
  $('.addButtonDataM').on('click', function() {

    $('#titleModalM').html('Add Mutasi');
    $('.modal-footer button[type=submit]').html('Add Data');

  });


  $('.viewModalUpdateM').on('click', function() {

    $('#titleModalM').html('Update Mutasi');
    $('.modal-footer button[type=submit]').html('Update Data');
    $('.modal-boter form').attr('action', 'http://localhost/inventory/public/mutasi/update');

    const id = $(this).data('id');
    

    $.ajax({
      url: 'http://localhost/inventory/public/mutasi/getUpdate',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function( data ) {
        $('#no').val(data.no);
        $('#tgl_mutasi').val(data.tgl_mutasi);
        $('#keterangan').val(data.keterangan);
        $('#lokasi_id').val(data.lokasi_id);
        $('#penempatan_id').val(data.penempatan_id);
        $('#petugas_id').val(data.petugas_id);
        $('#id').val(data.id);
      }
    });

  });














})(jQuery);