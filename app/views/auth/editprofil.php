<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Profil Saya</h4>
            </div>
            <form class="" action="<?= $this->url->get('auth/update') ?>" method="post">
                <div class="panel-body">
                    <div class="form-group">
                        <label>Username : </label>
                        <input type="text" name="username" class="form-control" value="<?= $user->username; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nama : </label>
                        <input type="text" name="nama" class="form-control" value="<?= $user->nama; ?>"required>
                    </div>
                    <div class="form-group">
                        <label>Password : </label>
                        <input type="password" name="password" class="form-control" value="" placeholder="Password baru ..."  required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password : </label>
                        <input type="password" name="konfirmasi_password" class="form-control" placeholder="Password baru ... " required>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" href="editprofil" class="btn btn-success">
                        Simpan
                    </button>
                    <button href="reset" class="btn btn-default">
                        Reset
                    </button>
                    <a href="profil" class="btn btn-danger">
                        Batal
                    </a>
            </form>
            </div>
        </div>

    </div>
</div>
