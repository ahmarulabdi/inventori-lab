<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Profil Saya</h4>
            </div>
            <div class="panel-body">
                <?php $this->flashSession->Output(); ?>
                <ul class="list-group list-unstyled">
                    <li class="list-group-item">
                        <strong>Nama : </strong>
                        <p>
                            <?= $user->nama ?>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <strong>Username : </strong>
                        <p>
                            <?= $user->username ?>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="panel-footer">
                <a href="editprofil" class="btn btn-info btn-block">
                    Edit Profil
                </a>
            </div>
        </div>

    </div>
</div>
