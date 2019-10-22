<?php

class UnitPembelianController extends IndexController
{
    public function dataAction()
    {
        $this->view->unit_pembelians  = UnitPembelian::find();
    }
    public function detailAction($id_unit)
    {
        $detail_pembelian = DetailPembelian::find(
            [
                'conditions' => 'id_unit like '.$id_unit
            ]
        );
        $this->view->detail_pembelians = $detail_pembelian;
        $arr_barang = [];
        foreach ($detail_pembelian as $val) {
            $barang  = Barang::findFirstByIdBarang($val->id_barang);
            array_push($arr_barang,$barang);
        }
        $this->view->arr_barang = $arr_barang;
    }
    public function pembelianAction()
    {
        $this->view->keuangans = Keuangan::find();
        $databarang = Barang::find();
        $countbarang = count($databarang);
        $this->view->countbarang = $countbarang;

    }
    public function pembelianNextAction()
    {
        $databarang = Barang::find();
        $countbarang = count($databarang);
        $jumlah = $this->request->getPost('jumlah_macam');
        $this->view->jumlah = $jumlah;

        if ($jumlah > $countbarang ) {
            $this->flashSession->error('jumlah macam barang melebihi dari data master barang');
            $this->response->redirect('unit_pembelian/pembelian');
        }else{
            $id_keuangan = $this->request->getPost('id_keuangan');
            $this->view->barangs = $databarang;
            $this->view->keuangans = Keuangan::findFirstByIdKeuangan($id_keuangan);


        }

    }
    public function pembelianReviewAction()
    {
        $sumber_dana = $this->request->getPost('sumber_dana');
        $arr_barang = $this->request->getPost('barang');
        $arr_tambah_stok = $this->request->getPost('tambah_stok');

        $sumber_dana = Keuangan::findFirstByIdKeuangan($sumber_dana);
        $this->view->sumber_dana = $sumber_dana;

        $this->view->barangs = $arr_barang;
        $this->view->tambah_stoks =  $arr_tambah_stok;

        $barangs = [];
        $i = 0;
        foreach ($arr_barang as $barang) {
            $barang = Barang::findFirstByIdBarang($barang);
            // $harga_per_barang = $arr_tambah_stok[$i] * $barang->harga_per_stok;
            $harga_per_barang = $arr_tambah_stok[$i] * $barang->harga_per_stok;
            $total += $harga_per_barang;
            $i += 1;

            array_push($barangs,$barang);
        }
        $this->view->barangs = $barangs;
        $this->view->total_harga_beli = $total;

    }
    public function pembelianHasilAction()
    {
        $dana_tersedia = $this->request->getPost('dana_tersedia');
        $total_harga_beli = $this->request->getPost('total_harga_beli');
        if ($dana_tersedia < $total_harga_beli ) {
            $this->flashSession->warning('total harga melebihi jumlah dana yang tersedia');
            $this->response->redirect('unit_pembelian/pembelian');
        }else {
            $arr_id_barang = $this->request->getPost('id_barang');
            $arr_tambah_stok = $this->request->getPost('tambah_stok');
            $arr_tambah_harga_per_barang = $this->request->getPost('tambah_harga_per_barang');
            $sumber_dana = $this->request->getPost('sumber_dana');

            foreach ($arr_tambah_stok as $tambah_stok) {
                $jumlah += $tambah_stok;
            }
            $unit_pembelian = new UnitPembelian();
            $id_unit = rand(0,1000000000);
            $ts = new DateTime();
            $unit_pembelian->save(
                [
                    'id_unit' => $id_unit,
                    'jumlah' => $jumlah,
                    'tanggal_beli' => $ts->format('Y-m-d H-i-s:u'),
                    'total_harga_beli' => $total_harga_beli,
                    'id_keuangan' => $sumber_dana
                ]
            );
            if ($unit_pembelian->save() == false) {
                $this->flashSession->error('Penyimpanan data gagal, coba ulangi');
                $this->response->redirect('unit_pembelian/pembelian');
            }else{
                $keuangan = Keuangan::findFirstByIdKeuangan($sumber_dana);
                $keuangan->save(
                    [
                        'dana_keluar' => $keuangan->dana_keluar+$total_harga_beli,
                        'sisa_dana' => $keuangan->sisa_dana - $total_harga_beli
                    ]
                );
                $i = 0;
                foreach ($arr_id_barang as $id_barang) {
                    $barang = Barang::findFirstByIdBarang($id_barang);
                    $harga_per_barang = $barang->harga_per_barang + $arr_tambah_harga_per_barang[$i];
                    $stok = $barang->stok + $arr_tambah_stok[$i];
                    $barang->save(
                        [
                            'harga_per_barang' => $harga_per_barang,
                            'stok' => $stok
                        ]
                    );
                    $detail_pembelian = new DetailPembelian();
                    $detail_pembelian->save(
                        [
                                'id_unit' => $id_unit,
                                'id_barang' => $id_barang,
                                'jumlah_stok_terbeli' => $arr_tambah_stok[$i],
                                'jumlah_harga' => $arr_tambah_harga_per_barang[$i],
                                'tanggal_detail_pembelian' =>$ts->format('Y-m-d H-i-s:u')
                        ]
                    );
                    $i += 1;
                }
                $this->flashSession->success('proses penyimpana data pembelian berhasil');
                $this->response->redirect('unit_pembelian/pembelian');

            }
        }
    }
    public function hapusAction($id_unit)
    {
        $unit_pembelian =UnitPembelian::findFirstByIdUnit($id_unit);
        $this->view->unit_pembelian = $unit_pembelian;
        $this->view->keuangan =Keuangan::findFirstByIdKeuangan($unit_pembelian->id_keuangan);
        $detail_pembelian = DetailPembelian::find(
            [
                'conditions' => 'id_unit like '.$id_unit
            ]
        );
        $this->view->detail_pembelians = $detail_pembelian;
        $arr_barang = [];
        foreach ($detail_pembelian as $val) {
            $barang  = Barang::findFirstByIdBarang($val->id_barang);
            array_push($arr_barang,$barang);
        }
        $this->view->arr_barang = $arr_barang;
    }
    public function deleteAction()
    {
        $id_barangs = $this->request->getPost('id_barang');
        $stok_pengurangan = $this->request->getPost('stok_pengurangan');
        $i = 0;
        foreach ($id_barangs as $id_barang) {
            $barang = Barang::findFirstByIdBarang($id_barang);
            $barang->stok -= $stok_pengurangan[$i];
            $barang->save();
            $i++;
        };
        $keuangan = Keuangan::findFirstByIdKeuangan($this->request->getPost('id_keuangan'));
        $keuangan->save(
            [
                'dana_keluar' => $this->request->getPost('dana_keluar'),
                'sisa_dana' => $this->request->getPost('sisa_dana'),
            ]
        );

        $unit_pembelian = UnitPembelian::findFirstByIdUnit($this->request->getPost('id_unit'));

        $detail_pembelians = DetailPembelian::find(
            [
                'conditions' => 'id_unit like '.$unit_pembelian->id_unit,
            ]
        );
        $unit_pembelian->delete();

        foreach ($detail_pembelians as $detail_pembelian) {
            $detail_pembelian->delete();
        };

        $this->flashSession->success('Penghapusan pembelian selesai');
        $this->response->redirect('unit_pembelian/data');
    }

}
