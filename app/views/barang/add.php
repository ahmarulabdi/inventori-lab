<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4>Tambah Barang</h4>
      </div>
      <div class="panel-body">
          <form class="" action="../barang/insert" method="post">
                  <div class="form-group">
                      <label for="">Nama :</label>
                      <input type="text" name="nama_barang"  placeholder="Nama barang..." class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="">Keterangan Barang :</label>
                      <input type="text" name="keterangan_barang"  placeholder="keterangan barang..." class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="">Merk :</label>
                      <input type="text" name="merk"  placeholder="Merk barang..." class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label for="">Minimum Stok:</label>
                      <input type="text" name="minimum_stok"  placeholder="Minimum stok..." class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="">Tambah Harga per Stok</label>
                    <input type="text" class="form-control" id="" placeholder="Harga per stok barang..." name="harga_per_stok">
                  </div>
                  <div class="form-group">
                    <label for="">Letak barang</label>
                    <select class="form-control" name="id_labor">
                        <?php foreach ($labor as $val): ?>
                            <option value="<?php echo $val->id_labor ?>"><?php echo $val->nama_labor ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-success">Tambah Barang</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>

      </div>
      <div class="panel-footer">

      </div>
    </div>
  </div>
</div>
