<div class="panel panel-info">
    <div class="panel-heading">
        <h4>Data Unit Pembelian</h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-1-12">
                <table class="table table-bordered table-striped" id="example">
                    <thead>
                        <tr>
                            <th>Tanggal Beli</th>
                            <th>Total Harga Beli</th>
                            <th>Jumlah Stok Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($unit_pembelians as $unit_pembelian): ?>
                            <tr>
                                <td><?= $unit_pembelian->tanggal_beli ?></td>
                                <td><?= $unit_pembelian->total_harga_beli ?></td>
                                <td><?= $unit_pembelian->jumlah ?></td>
                                <td>
                                    <a class="btn btn-primary" href="detail/<?= $unit_pembelian->id_unit ?>">Detail</a>
                                    <a class="btn btn-danger" href="hapus/<?= $unit_pembelian->id_unit ?>">Hapus</a>
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
