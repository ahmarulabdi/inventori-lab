<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->ses_user = $this->session->get('ses_username');
        $this->ses_hak_akses = $this->session->get('ses_hak_akses');
        $this->ses_nama = $this->session->get('ses_nama');
        if ($this->ses_user == null){
            $this->response->redirect('auth/loginform');
        }
        if ($this->ses_hak_akses == 'administrator'){
            $this->response->redirect('user/data');
        }

        if ($this->ses_hak_akses == 'kepalasekolah'){
            $this->response->redirect('laporan/data');
        }
    }
    public function indexAction()
    {

        if ($this->ses_hak_akses == 'administrator'){
            $this->response->redirect('barang/data');
        }

        if ($this->ses_hak_akses == 'kepalasekolah'){
            $this->response->redirect('laporan/data');
        }
        $this->view->labors = Labor::find();
		$this->view->barangs = Barang::find(
			[
				'conditions' => 'stok < 10'
			]
		);
    }
    public function isiLaborAction($id_labor)
    {
        if ($this->ses_hak_akses == 'administrator'){
            $this->response->redirect('barang/data');
        }
        if ($this->ses_hak_akses == 'kepalasekolah'){
            $this->response->redirect('laporan/data');
        }
        $this->view->rowlabor = Labor::findFirstByIdLabor($id_labor);
        $this->view->databarang = Barang::find(
            [
                'conditions' => 'id_labor like '.$id_labor
            ]
        );
    }
    public function logout(){
        $this->ses_user = null;
    }

}
