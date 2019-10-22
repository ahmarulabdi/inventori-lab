<div class="panel panel-default">
  <div class="panel-heading">
    <h4>Laporan <?= date('d M Y'); ?></h4>

    <input id='print' name="b_print" type="button" class="btn btn-success pull-right"   onClick="printdiv('printLaporanView');" value=" Print Laporan">

  </div>
  <div class="panel-body">
          <div class="row">
              <div class="col-md-12">
                  <h4 id="g">Info Barang</h4>
                  <hr>
                  <table class="table table-bordered" id="example" >
                      <thead>
                          <tr>
                              <th>Nama Barang</th>
                              <th>Keterangan Barang</th>
                              <th>Harga per stok</th>
                              <th>Harga per barang (stok x harga per stok )</th>
                              <th>Merk</th>
                              <th>Stok</th>
                              <th>Minimum Stok</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($barangs as $barang): ?>
                          <tr>

                              <td>
                                  <?= $barang->nama_barang ?>
                              </td>
                              <td>
                                  <?= $barang->keterangan_barang ?>
                              </td>
                              <td>
                                  <?= $barang->harga_per_stok ?>
                              </td>
                              <td>
                                  <?= $barang->harga_per_barang ?>
                              </td>
                              <td>
                                  <?= $barang->merk ?>
                              </td>
                              <td>
                                  <?= $barang->stok ?>
                              </td>
                              <td>
                                  <?= $barang->minimum_stok ?>
                              </td>
                          </tr>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <h4>Info Keuangan</h4>
                <hr>
                <table id="example2" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>ID keuangan</th>
                            <th>Sumber Dana</th>
                            <th>Dana Masuk</th>
                            <th>Dana Keluar</th>
                            <th>Sisa Dana</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($keuangans as $keuangan): ?>
                        <tr>
                            <td>
                                <?= $keuangan->id_keuangan ?>
                            </td>
                            <td>
                                <?= $keuangan->sumber_dana ?>
                            </td>
                            <td>
                                <?= $keuangan->dana_masuk ?>
                            </td>
                            <td>
                                <?= $keuangan->dana_keluar ?>
                            </td>
                            <td>
                                <?= $keuangan->sisa_dana ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <h4>Info Unit</h4>
                <hr>
                <table id="example3" class="table table-bordered table-striped" id="example">
                    <thead>
                        <tr>
    						<th>ID Unit</th>
                            <th>Tanggal Beli</th>
                            <th>Total Harga Beli</th>
                            <th>Jumlah Stok Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($units as $unit_pembelian): ?>
                            <tr>
    							<td><?= $unit_pembelian->id_unit ?></td>
                                <td><?= $unit_pembelian->tanggal_beli ?></td>
                                <td><?= $unit_pembelian->total_harga_beli ?></td>
                                <td><?= $unit_pembelian->jumlah ?></td>
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
<div id="printLaporanView" class="panel col-md-10 col-md-offset-1">
    <style media="screen">
        h4.h4{
            font-family: serif;
        }
        h3{
            font-family: serif;
        }
    </style>
    <div class="row">
      <div class="col-md-12">
          <img src="<?= $this->url->get('public/images/cop.png') ?>" alt="cop" width="100%">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 pull-right">
          <?= date('d M Y'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="text text-center">
            <h3>
                <strong>LAPORAN INVENTORI LABOR SMK TARUNA SATRIA</strong>
            </h3>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="h4">Info Barang</h4>
            <hr>
            <table class="table table-bordered" id="example" >
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Keterangan Barang</th>
                        <th>Harga per stok</th>
                        <th>Harga per barang (stok x harga per stok )</th>
                        <th>Merk</th>
                        <th>Stok</th>
                        <th>Minimum Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barangs as $barang): ?>
                    <tr>

                        <td>
                            <?= $barang->nama_barang ?>
                        </td>
                        <td>
                            <?= $barang->keterangan_barang ?>
                        </td>
                        <td>
                            <?= $barang->harga_per_stok ?>
                        </td>
                        <td>
                            <?= $barang->harga_per_barang ?>
                        </td>
                        <td>
                            <?= $barang->merk ?>
                        </td>
                        <td>
                            <?= $barang->stok ?>
                        </td>
                        <td>
                            <?= $barang->minimum_stok ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <h4 class="h4">Info Keuangan</h4>
          <hr>
          <table id="example2" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
              <thead>
                  <tr>
                      <th>ID keuangan</th>
                      <th>Sumber Dana</th>
                      <th>Dana Masuk</th>
                      <th>Dana Keluar</th>
                      <th>Sisa Dana</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($keuangans as $keuangan): ?>
                  <tr>
                      <td>
                          <?= $keuangan->id_keuangan ?>
                      </td>
                      <td>
                          <?= $keuangan->sumber_dana ?>
                      </td>
                      <td>
                          <?= $keuangan->dana_masuk ?>
                      </td>
                      <td>
                          <?= $keuangan->dana_keluar ?>
                      </td>
                      <td>
                          <?= $keuangan->sisa_dana ?>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <h4 class="h4">Info Unit</h4>
          <hr>
          <table id="example3" class="table table-bordered table-striped" id="example">
              <thead>
                  <tr>
                      <th>ID Unit</th>
                      <th>Tanggal Beli</th>
                      <th>Total Harga Beli</th>
                      <th>Jumlah Stok Barang</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($units as $unit_pembelian): ?>
                      <tr>
                          <td><?= $unit_pembelian->id_unit ?></td>
                          <td><?= $unit_pembelian->tanggal_beli ?></td>
                          <td><?= $unit_pembelian->total_harga_beli ?></td>
                          <td><?= $unit_pembelian->jumlah ?></td>
                      </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
    </div>
</div>
<script type="text/javascript">
    $('#printLaporanView').hide();
</script>
