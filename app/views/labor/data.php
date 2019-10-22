<div class="panel panel-info">
    <div class="panel-heading">
        <h4>Data Labor</h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahLabor">
                    Tambah Labor ?
                </button>
                <?php $this->flashSession->Output() ?>
                <hr>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nama lab</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($labors as $labor): ?>
                        <tr>
                            <td>
                                <?= $labor->id_labor ?>
                            </td>
                            <td>
                                <?= $labor->nama_labor ?>
                            </td>
                            <td>
                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#editLabor<?= $labor->id_labor ?>">
                                    Edit
                                </button>
                                <a href="delete/<?= $labor->id_labor ?>" type="button" class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <div class="modal fade" id="editLabor<?= $labor->id_labor ?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                Edit Data Labor
                              </div>
                              <form class="" action="update" method="post">
                                  <div class="modal-body">
                                      <input type="hidden" name="id_labor" value="<?= $labor->id_labor ?>">
                                      <div class="form-group">
                                        <label for="">Nama :</label>
                                        <input type="text" name="nama_labor" value="<?= $labor->nama_labor ?>" placeholder="Nama labor..." class="form-control" required>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="submit" class="btn btn-success">Edit Labor</button>
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
    <div class="modal fade" id="tambahLabor" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> Tambah Labor Baru
                </div>
                <form class="" action="insert" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="">Nama :</label>
                          <input type="text" name="nama_labor" value="" placeholder="Nama labor..." class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah Labor</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
