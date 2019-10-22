<?php

class BarangController extends IndexController
{

    public function dataAction()
    {
        $this->view->barangs = Barang::find();
    }
    public function addAction()
    {
        $this->view->labor = Labor::find();
    }
    public function insertAction()
    {
        // post
        $nama_barang = $this->request->getPost('nama_barang');
        $keterangan_barang = $this->request->getPost('keterangan_barang');
        $merk = $this->request->getPost('merk');
        $minimum_stok = $this->request->getPost('minimum_stok');
        $harga_per_stok = $this->request->getPost('harga_per_stok');
        $id_labor = $this->request->getPost('id_labor');

        // init
        $barang = new Barang();

        // DB query
        $barang->save(
            [
                  'nama_barang' => $nama_barang,
                  'keterangan_barang' => $keterangan_barang,
                  'merk' => $merk,
                  'minimum_stok' => $minimum_stok,
                  'harga_per_stok' =>$harga_per_stok,
                  'id_labor' =>$id_labor
            ]
        );
        // condition
        if ($barang->save()) {
            $this->flashSession->success('berhasil tambah barang');
            $this->response->redirect('barang/data');
        }else{
            $this->flashSession->danger('gagal tambah barang');
            $this->response->redirect('barang/data');
        }
    }
    public function editAction($id_barang){
        $this->view->barang = Barang::findFirstByIdBarang($id_barang);
    }
    public function updateAction()
    {
        // post
        $id_barang = $this->request->getPost('id_barang');
        $nama_barang = $this->request->getPost('nama_barang');
        $keterangan_barang = $this->request->getPost('keterangan_barang');
        $merk = $this->request->getPost('merk');
        $minimum_stok = $this->request->getPost('minimum_stok');

        // init
        $barang = Barang::findFirstByIdBarang($id_barang);
        // DB query
        $barang->save(
            [
                  'nama_barang' => $nama_barang,
                  'keterangan_barang' => $keterangan_barang,
                  'merk' => $merk,
                  'minimum_stok' => $minimum_stok
            ]
        );
        // condition
        if ($barang->save()) {
            $this->flashSession->success('berhasil update barang');
            $this->response->redirect('barang/data');
        }else{
            $this->flashSession->danger('gagal update barang');
            $this->response->redirect('barang/data');
        }
    }


}
