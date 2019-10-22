<div class="panel panel-info">
    <div class="panel-heading">
        <h4>Data User</h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahUser">
                    Tambah User ?
                </button>
                <?php $this->flashSession->Output() ?>
                <hr>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>username</th>
                            <th>hak akses</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td>
                                <?= $user->id_user ?>
                            </td>
                            <td>
                                <?= $user->nama ?>
                            </td>
                            <td>
                                <?= $user->username ?>
                            </td>
                            <td>
                                <?= $user->hak_akses ?>
                            </td>
                            <td>
                                <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#editUser<?= $user->id_user ?>">
                                    Edit
                                </button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $user->id_user ?>">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="editUser<?= $user->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                Edit Data User
                              </div>
                              <form class="" action="update" method="post">
                                  <div class="modal-body">
                                      <input type="hidden" name="id_user" value="<?= $user->id_user ?>">
                                      <div class="form-group">
                                        <label for="">Nama :</label>
                                        <input type="text" name="nama" value="<?= $user->nama ?>" placeholder="Nama User..." class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="">Username :</label>
                                        <input type="text" name="username" value="<?= $user->username ?>" placeholder="Username..." class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                        <label for="">Hak Akses :</label>
                                        <select class="form-control" name="hak_akses">
                                            <option value="administrator">Administrator</option>
                                            <option value="kepalaTIF">Kepala TIF</option>
											<option value="kepalasekolah">Kepala Sekolah</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="submit" class="btn btn-success">Edit User</button>
                                      <button type="reset" class="btn btn-danger">Reset</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div id="hapus<?= $user->id_user ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-body">
                                  Apakah anda ingin menghapus User <?= $user->nama ?> ini ?
                              </div>
                              <div class="modal-footer">
                                <form class="" action="<?= $this->url->get('user/delete') ?>" method="post">
                                    <input type="hidden" name="id_user" value="<?= $user->id_user ?>">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                              </div>
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
    <div class="modal fade" id="tambahUser" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> Tambah User Baru
                </div>
                <form class="" action="insert" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="">Nama :</label>
                          <input type="text" name="nama" value="" placeholder="Nama user..." class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Username :</label>
                            <input type="text" name="username" value="" placeholder="Username..." class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password :</label>
                            <input type="password" name="password" value="" placeholder="Password..." class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Konfirmasi Password:</label>
                            <input type="password" name="konfirmasi_password" value="" placeholder="Konfirmasi Password..." class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Hak Akses:</label>
                            <select name="hak_akses" class="form-control" id="">
                                <option value="administrator">Administrator</option>
                                <option value="kepalaTIF">Kepala TIF</option>
								<option value="kepalasekolah">Kepala Sekolah</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah User</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div
