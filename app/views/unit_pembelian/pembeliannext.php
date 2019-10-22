<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4>Pembelian barang baru</h4>
            </div>
            <form class="" action="pembelianreview" method="post">
                <div class="panel-body">
                    <ul class="list-group list-unstyled">
                        <li class="list-group-item">
                            <strong for="">Asal Dana</strong>
                            
                            <input type="hidden" name="sumber_dana" value="<?= $keuangans->id_keuangan ?>">
                            <p>
                                <?= $keuangans->sumber_dana ?>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <strong>Jumlah Barang</strong>
                            <p>
                                <?= $jumlah ?>
                            </p>
                        </li>
                        <li class="list-group-item">
                            <label>Pilih barang</label>
                            <ul class="list-group list-unstyled">
                                <?php for ($i=0; $i < $jumlah ; $i++) { ?>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <select class="form-control" name="barang[]">
                                                <option value="">-- pilih barang --</option>
                                                <?php foreach ($barangs as $barang): ?>
                                                    <option value="<?= $barang->id_barang ?>">
                                                        <?= $barang->merk ?> |
                                                        <?= $barang->nama_barang ?> |
                                                        <?= $barang->keterangan_barang ?> |
                                                        Harga per Stok Rp.<?= $barang->harga_per_stok ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" name="tambah_stok[]" class="form-control" placeholder="stok...">
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                            <span class="help-block">barang di ambil dari data master barang</span>
                        </li>
                    </ul>
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
