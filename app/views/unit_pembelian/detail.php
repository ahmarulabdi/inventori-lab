<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4>
                    <a type="button" class="btn btn-default" href="../data">
                        <i class="glyphicon glyphicon-arrow-left"></i>
                    </a>
                    Detail Unit Pembelian
                </h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Detail Barang Terbeli</h4>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Keterangan Barang</th>
                                    <th>Harga Per Stok</th>
                                    <th>Merk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($arr_barang as $barang): ?>
                                    <tr>
                                        <td><?= $barang->nama_barang ?></td>
                                        <td><?= $barang->keterangan_barang ?></td>
                                        <td><?= $barang->harga_per_stok ?></td>
                                        <td><?= $barang->merk ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                  <div class="col-md-4">
                      <h4>Detail Pembelian</h4>
                      <table class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Jumlah Stok Terbeli</th>
                                  <th>Total</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($detail_pembelians as $detail_pembelian): ?>
                                  <tr>
                                      <td><?php echo $detail_pembelian->jumlah_stok_terbeli ?> Unit</td>
                                      <td><?php echo $detail_pembelian->jumlah_harga ?></td>
                                  </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                </div>
            </div>
            <div class="panel-footer">

            </div>
        </div>
    </div>
</div>
