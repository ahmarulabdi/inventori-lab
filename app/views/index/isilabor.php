<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4>Isi Barang <strong><?= $rowlabor->nama_labor ?></strong></h4>
      </div>
      <div class="panel-body">
          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover" id="example">
              <thead>
                  <tr>
                      <th>Nama Barang</th>
                      <th>Keterangan Barang</th>
                      <th>Merk</th>
                      <th>Stok</th>
                      <th>Minimum Stok</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($databarang as $barang): ?>
                  <tr>
                      <td>
                          <?= $barang->nama_barang ?>
                      </td>
                      <td>
                          <?= $barang->keterangan_barang ?>
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
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
      </div>
      <div class="panel-footer">

      </div>
    </div>
  </div>
</div>
