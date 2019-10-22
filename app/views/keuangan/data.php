<div class="panel panel-info">
    <div class="panel-heading">
        <h4>Data Keuangan</h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahKeuangan">
                    Tambah dana keuangan Lab ?
                </button>
                <?php $this->flashSession->Output() ?>
                <hr>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Sumber Dana</th>
                            <th>Dana Masuk</th>
                            <th>Dana Keluar</th>
                            <th>Sisa Dana</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($keuangans as $keuangan): ?>
                        <tr>
                            <td>
                                <?= $i++ ?>
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
                            <td>
                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#editkeuangan<?= $keuangan->id_keuangan ?>">
                                    Edit
                                </button>
                                <a href="delete/<?= $keuangan->id_keuangan ?>" type="button" class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <div class="modal fade" id="editkeuangan<?= $keuangan->id_keuangan ?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> Edit Keuangan
                                    </div>
                                    <form class="" action="update" method="post">
                                        <div class="modal-body">
                                            <input type="hidden" name="id_keuangan" value="<?= $keuangan->id_keuangan ?>">
                                            <div class="form-group">
                                                <label for="">Sumber Dana :</label>
                                                <input type="text" name="sumber_dana" value="<?= $keuangan->sumber_dana ?>" placeholder="Sumber dana..." class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Dana Masuk</label>
                                                <?php if ($keuangan->dana_keluar == null ): ?>
                                                    <input type="text" name="dana_masuk" class="form-control" id="" placeholder="Dana masuk..." value="<?= $keuangan->dana_masuk?>">
                                                <?php else: ?>
                                                    <input type="text"  class="form-control" id="" placeholder="Dana masuk..." value="<?= $keuangan->dana_keluar?>" disabled>
                                                <?php endif; ?>
                                            </div>
                                            <span class="text text-danger">Perhitungan dana tidak bisa dirubah apabila dana sudah dipakai</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Edit Keuangan</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="panel-footer">
    </div>
    <div class="modal fade" id="tambahKeuangan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> Tambah dana keuangan Laboratorium
                </div>
                <form class="" action="insert" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Sumber Dana :</label>
                            <input type="text" name="sumber_dana" value="" placeholder="Sumber dana..." class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Dana Masuk :</label>
                            <input type="number" name="dana_masuk" value="" placeholder="Dana Masuk dalam rupiah dari sumber dana ..." class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah Dana</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
