<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4>
                    <a type="button" class="btn btn-default" href="../data">
                        <i class="glyphicon glyphicon-arrow-left"></i>
                    </a>
                    Konfirmasi penghapusan
                </h4>
            </div>
            <form class="" action="<?= $this->url->get('unit_pembelian/delete') ?>" method="post">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>menghapus Unit Pembelian ini maka :</h4>
                            <input type="hidden" name="id_unit" value="<?= $unit_pembelian->id_unit ?>">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th colspan="5">Barang berikut </th>
                                        <th>stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0 ?>
                                    <?php foreach ($arr_barang as $barang): ?>
                                        <tr>
                                            <td>
                                                <input type="hidden" name="id_barang[]" value="<?= $barang->id_barang ?>">
                                                <?= $barang->nama_barang ?>
                                            </td>
                                            <td>
                                                <?= $barang->keterangan_barang ?>
                                            </td>
                                            <td>
                                                <?= $barang->merk ?>
                                            </td>
                                            <td> <span class="glyphicon glyphicon-arrow-right"></span></td>
                                            <td><span class="text text-info">Mengalami pengurangan stok sebanyak :</span>
                                                <strong><?= $detail_pembelians[$i]->jumlah_stok_terbeli ?> Unit</strong>
                                            </td>
                                            <td>
                                                <span class="glyphicon glyphicon-arrow-right"></span>
                                                <strong><?= $barang->stok ?> Unit</strong>
                                                <span class="tex text-info">menjadi</span>
                                                <input type="hidden" name="stok_pengurangan[]" value="<?= $detail_pembelians[$i]->jumlah_stok_terbeli ?>">
                                                <strong><?= $barang->stok - $detail_pembelians[$i]->jumlah_stok_terbeli ?> Unit</strong>

                                            </td>
                                        </tr>
                                        <?php $i++ ;
                                    endforeach; ?>
                                </tbody>
                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="1">Sumber Dana berikut</th>
                                        <th></th>
                                        <th>Dana Keluar</th>
                                        <th>Sisa Dana</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="id_keuangan" value="<?= $keuangan->id_keuangan ?>">
                                            <?= $keuangan->sumber_dana ?>
                                        </td>
                                        <td>
                                            <span class="glyphicon glyphicon-arrow-right"></span>
                                            <span class="text text-info">
                                                Mengalami pengembalian dana sebesar :
                                            </span>
                                            <strong>Rp.<?= $unit_pembelian->total_harga_beli ?></strong>
                                        </td>
                                        <td>
                                            <span class="glyphicon glyphicon-arrow-right"></span>
                                            <strong>Rp. <?= $keuangan->dana_keluar ?></strong>
                                            <span class="tex text-info">menjadi</span>
                                            <input type="hidden" name="dana_keluar" value="<?= $keuangan->dana_keluar-$unit_pembelian->total_harga_beli ?>">
                                            <strong>Rp. <?= $keuangan->dana_keluar-$unit_pembelian->total_harga_beli ?></strong>
                                        </td>
                                        <td>
                                            <span class="glyphicon glyphicon-arrow-right"></span>
                                            <strong>Rp. <?= $keuangan->sisa_dana ?></strong>
                                            <span class="tex text-info">menjadi</span>
                                            <strong>Rp. <?= $keuangan->sisa_dana+$unit_pembelian->total_harga_beli ?></strong>
                                            <input type="hidden" name="sisa_dana" value="<?= $keuangan->sisa_dana+$unit_pembelian->total_harga_beli ?>">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-danger">
                            Batalkan Penghapusan
                        </button>
                        <button type="submit" class="btn btn-success">
                            Lakukan Penghapusan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
