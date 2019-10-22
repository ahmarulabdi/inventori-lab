<div class="panel panel-primary">
  <div class="panel-heading">
    <h4>Preview Pembelian</h4>
  </div>
  <form class="" action="pembelianhasil" method="post">

      <div class="panel-body">
          <?php $this->flashSession->Output(); ?>
          <ul class="list-group list-unstyled">
              <?php $i = 0 ?>
                <li class="list-group-item">
                    sumber dana  = <?= $sumber_dana->sumber_dana ?> |
                    dana yang tersedia  = Rp. <?= $sumber_dana->sisa_dana ?>
                    <span class="badge">total uang yang diperlukan ( total harga beli ) : <?= $total_harga_beli  ?></span>
                    <input type="hidden" name="sumber_dana" value="<?= $sumber_dana->id_keuangan ?>">
                    <input type="hidden" name="dana_tersedia" value="<?= $sumber_dana->sisa_dana ?>">
                    <input type="hidden" name="total_harga_beli" value="<?= $total_harga_beli ?>">
                </li>
                  <li class="list-group-item">`
                       <table class="table table-hover">
                           <tr>
                               <th>Merk </th>
                               <th>Nama </th>
                               <th>Keterangan Barang  </th>
                               <th>Stok saat ini </th>
                               <th>minimum stok dibutuhkan </th>
                               <th>harga per stok</th>
                               <th>penambahan stok </th>
                               <th>penambahan stok x harga per stok </th>
                            </tr>
                            <?php foreach ($barangs as $barang): ?>
                                <tr>
                                    <td><?= $barang->merk  ?></td>
                                    <td><?= $barang->nama_barang  ?></td>
                                    <td><?= $barang->keterangan_barang  ?></td>
                                    <td>
                                        <?= $barang->stok  ?>
                                        <?php if ($barang->stok  == null ): ?>
                                        0
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $barang->minimum_stok  ?></td>
                                    <td><?= $barang->harga_per_stok  ?></td>
                                    <td><?= $tambah_stoks[$i]  ?></td>
                                    <td>
                                        <?php $tambah_harga_per_barang = $tambah_stoks[$i] * $barang->harga_per_stok; ?>
                                        <?=  $tambah_harga_per_barang  ?>
                                    </td>
                                    <input type="hidden" name="id_barang[]" value="<?=  $barang->id_barang ?>">
                                    <input type="hidden" name="tambah_stok[]" value="<?= $tambah_stoks[$i]  ?>">
                                    <input type="hidden" name="tambah_harga_per_barang[]" value="<?=  $tambah_harga_per_barang  ?>">
                                </tr>
                            <?php $i += 1; ?>
                            <?php endforeach; ?>
                       </table>
                  </li>
          </ul>
      </div>
      <div class="panel-footer">
          <button type="sumbit" class="btn btn-success">
            Submit
          </button>
      </div>
    </form>
</div>
