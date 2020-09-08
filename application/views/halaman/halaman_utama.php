<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-input" data-whatever="@nama">Tambah Data</button>

<div class="modal fade" id="modal-input" tabindex="-1" role="dialog" aria-labelledby="modal-input-lable">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal-input-lable">Tambah Data Barang</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal">
  <div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" placeholder="Nama">
    </div>
  </div>
  <div class="form-group">
    <label for="harga" class="col-sm-2 control-label">Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="harga" placeholder="harga">
    </div>
  </div>
  <div class="form-group">
    <label for="harga" class="col-sm-2 control-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jumlah" placeholder="jumlah">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="tambah-data">Tambah</button>
      </div>
    </div>
  </div>
</div>
<?= $table ?>