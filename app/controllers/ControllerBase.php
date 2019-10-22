<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected $ses_user = null;
    protected $ses_hak_akses = null;
    protected $ses_nama = null;
    protected $default_timezone ;
    public function initialize(){
        date_default_timezone_set('Asia/Jakarta');
        $this->ses_user = $this->session->get('ses_username');
        $this->ses_hak_akses = $this->session->get('ses_hak_akses');
        $this->ses_nama = $this->session->get('ses_nama');
        if ($this->ses_user == null){
            $this->response->redirect('auth/loginform');
        }else{
            if ($this->ses_hak_akses == 'administrator') {
                $this->response->redirect('user/data');
            }
        }
        $this->default_timezone = date_default_timezone_set('Asia/Jakarta');
    }

}
