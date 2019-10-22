<div class="panel panel-info">
    <div class="panel-heading">
        <h4>Data Barang</h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <a href="add" class="btn btn-primary">
                    Tambah Barang Baru ?
                </a>
                <?php $this->flashSession->Output() ?>
                <hr>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Keterangan Barang</th>
                            <th>Harga per stok</th>
                            <th>Harga per barang (stok x harga per stok )</th>
                            <th>Merk</th>
                            <th>Stok</th>
                            <th>Minimum Stok</th>
                            <th>Aksi</th>
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

                            <td>
                                <a class="btn btn-info btn-sm" href="edit/<?= $barang->id_barang ?>">
                                    Edit
                                </a>
								
                            </td>
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
