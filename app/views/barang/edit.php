<div class="panel panel-info">
    <div class="panel-heading">
        Edit Barang
    </div>
    <div class="panel-body">
        <form class="" action="../update" method="post">
            <div class="modal-body">
                <input type="hidden" name="id_barang" value="<?= $barang->id_barang ?>">
                <div class="form-group">
                    <label for="">Nama :</label>
                    <input type="text" name="nama_barang" value="<?= $barang->nama_barang ?>" placeholder="Nama barang..." class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Keterangan Barang :</label>
                    <input type="text" name="keterangan_barang" value="<?= $barang->keterangan_barang ?>" placeholder="keterangan barang..." class="form-control" required>
                </div>
				<div class="form-group">
                    <label for="">Harga Per Stok :</label>
                    <input type="text" name="merk" value="<?= $barang->harga_per_stok ?>" placeholder="Harga Per stok..." class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Merk :</label>
                    <input type="text" name="merk" value="<?= $barang->merk ?>" placeholder="Merk barang..." class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Minimum Stok:</label>
                    <input type="text" name="minimum_stok" value="<?= $barang->minimum_stok ?>" placeholder="Minimum stok..." class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Edit Barang</button>
                <a href="<?= $this->url->get('barang/data') ?>" class="btn btn-default" data-dismiss="modal">Close</a>
            </div>
        </form>
    </div>
</div>
