<div class="panel panel-info">
    <div class="panel-heading">
        Dashboard
    </div>
    <div class="panel-body">
		
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="text text-center">PINTASAN MENU</h4>
                <a href="unit_pembelian/pembelian" type="button" class="btn btn-success btn-block">
                Pembelian Baru
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="text text-center">DAFTAR LABOR</h4>
                <?php foreach ($labors as $labor): ?>
                    <a href="index/isilabor/<?= $labor->id_labor ?>" type="button" class="btn btn-info btn-block">
                      <?= $labor->nama_labor ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
