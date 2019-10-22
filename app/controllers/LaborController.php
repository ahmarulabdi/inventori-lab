<?php

class LaborController extends IndexController
{

    public function dataAction()
    {
        $this->view->labors = Labor::find();
    }
    public function insertAction()
    {
        // post
        $nama_labor = $this->request->getPost('nama_labor');

        // init
        $labor = new Labor();

        // DB query
        $labor->nama_labor = $nama_labor;
        $labor->save();

        // condition
        if ($labor->save()) {
            $this->flashSession->success('berhasil menambah labor baru');
            $this->response->redirect('labor/data');
        }else{
            $this->flashSession->danger('gagal menambah labor baru');
            $this->response->redirect('labor/data');
        }
    }
    public function updateAction()
    {
        // post
        $id_labor = $this->request->getPost('id_labor');
        $nama_labor = $this->request->getPost('nama_labor');

        // init
        $labor = Labor::findFirstByIdLabor($id_labor);
        // DB query
        $labor->nama_labor = $nama_labor;
        $labor->save();
        // condition
        if ($labor->save()) {
            $this->flashSession->success('berhasil update labor');
            $this->response->redirect('labor/data');
        }else{
            $this->flashSession->danger('gagal update labor');
            $this->response->redirect('labor/data');
        }
    }
    public function deleteAction($id_labor)
    {
        // get $id_labor
        // init
        $labor = Labor::findFirstByIdLabor($id_labor);
        // DB query
        $nama_labor = $labor->nama_labor;
        $labor->delete();
        // condition
        if ($labor->delete()) {
            $this->flashSession->success('berhasil hapus '.$nama_labor);
            $this->response->redirect('labor/data');
        }else{
            $this->flashSession->danger('gagal hapus '.$nama_labor);
            $this->response->redirect('labor/data');
        }
    }

}
