<div class="row">
  <div class="col-md-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4>Pembelian barang baru</h4>
      </div>
      <form class="" action="pembeliannext" method="post">
          <div class="panel-body">
              <?php $this->flashSession->Output() ?>
            <div class="form-group">
              <label for="">Pilih Sumber Dana</label>
              <select  name="id_keuangan" class="form-control">
                  <?php foreach ($keuangans as $keuangan): ?>
                      <option value="<?= $keuangan->id_keuangan ?>"><?= $keuangan->sumber_dana ?> | dengan anggaran Rp.<?= $keuangan->dana_masuk ?></option>

                  <?php endforeach; ?>
              </select>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Jumlah Macam Barang</label>
                        <input  type="number" name="jumlah_macam" class="form-control" id="" placeholder="Jumlah macam barang yang dibeli...">
                        <span class="help-block">jumlah macam barang tersedia di data master adalah <strong><?= $countbarang  ?> barang</strong>
                            <span class="text text-info">
                                <a href="../barang/add">
                                    Tambah Barang Baru ?
                                </a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
          </div>
          <div class="panel-footer">
              <button type="submit" class="btn btn-info">
                  next
              </button>
          </div>
      </form>
    </div>
  </div>
</div>
