<?php

class KeuanganController extends IndexController
{
    public function dataAction()
    {
        $this->view->keuangans = Keuangan::find();
    }
    public function insertAction()
    {
        $sumber_dana = $this->request->getPost('sumber_dana');
        $dana_masuk = $this->request->getPost('dana_masuk');

        $keuangan = new Keuangan();
        $keuangan->save(
            [
                'sumber_dana' => $sumber_dana,
                'dana_masuk' => $dana_masuk,
                'sisa_dana' => $dana_masuk
            ]
        );
        if ($keuangan->save()) {
            $this->flashSession->success('tambah dana keuangan dari '.$sumber_dana.' berhasil');
            $this->response->redirect('keuangan/data');
        }else{
            $this->flashSession->danger('tambah dana keuangan dari '.$sumber_dana.' gagal');
            $this->response->redirect('keuangan/data');
        }
    }
    public function updateAction()
    {
        $id_keuangan = $this->request->getPost('id_keuangan');
        $keuangan = Keuangan::findFirstByIdKeuangan($id_keuangan);
        $dana_masuk = $this->request->getPost('dana_masuk');
        $sumber_dana = $this->request->getPost('sumber_dana');

        if ($dana_masuk == null || $keuangan->dana_keluar != null ) {
            $keuangan->sumber_dana = $sumber_dana;
            $keuangan->save();
        }else{
            $keuangan->save(
                [
                    'sumber_dana' => $sumber_dana,
                    'dana_masuk' => $dana_masuk,
                    'sisa_dana' => $dana_masuk
                ]
            );
        }
        $this->flashSession->success('Berhasil melakukan perubahan');
        $this->response->redirect('keuangan/data');
    }
    public function deleteAction($id_keuangan)
    {
        $keuangan = Keuangan::findFirstByIdKeuangan($id_keuangan);
        $keuangan->delete();
        if ($keuangan->delete()) {
            $this->flashSession->success('Dana keuangan berhasil di hapus');
            $this->response->redirect('keuangan/data');
        }else{
            $this->flashSession->danger('Dana keuangan gagal di hapus');
            $this->response->redirect('keuangan/data');
        }
    }

}
