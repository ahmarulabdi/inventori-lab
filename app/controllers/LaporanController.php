<?php
/**
 *
 */
class LaporanController extends ControllerBase
{
    public function dataAction()
    {
        $this->view->barangs = Barang::find();
        $this->view->keuangans = Keuangan::find();
        $this->view->units = UnitPembelian::find();
    }
}

 ?>
