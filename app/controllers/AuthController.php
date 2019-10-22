<?php

use Phalcon\Mvc\Controller;

class AuthController extends Controller
{
    public function loginFormAction(){
        $this->ses_user = $this->session->get('ses_username');
        if ($this->ses_user != null){
            $this->response->redirect('');
        }
    }
    public function loginProsesAction(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $password = md5($password);
        $user = User::findFirstByUsername($username);


        if ($user->username == $username && $user->password == $password){
            $this->session->set('ses_username',$user->username);
            $this->session->set('ses_hak_akses',$user->hak_akses);
            $this->session->set('ses_nama',$user->nama);
            if($this->session->get('ses_hak_akses') == 'kepalasekolah'){
				$this->response->redirect('laporan/data');
			}else{
				$this->response->redirect('');
			}
        }else{
            $this->flashSession->warning('Login gagal, username dan password tidak ditemukan');
            $this->response->redirect('auth/loginform');
        }
    }
    public function logoutAction(){
        $this->session->destroy();
        $logout = new IndexController();
        $logout->logout();
        $this->response->redirect('auth/loginform');
    }
    public function profilAction()
    {
        $user = User::findFirstByUsername($this->session->get('ses_username'));
        $this->view->user = $user;
    }
    public function editProfilAction()
    {
        $user = User::findFirstByUsername($this->session->get('ses_username'));
        $this->view->user = $user;
        $this->view->null = '';
    }
    public function updateAction()
    {
        $user = User::findFirstByUsername($this->request->getPost('username'));

        if ($this->request->getPost('password') != $this->request->getPost('konfirmasi_password')) {
            $this->flashSession->warning('password tidak sesuai');
        }else{
            $this->flashSession->success('berhasil merubah password');
            $user->save(
                [
                    'password' => md5($this->request->getPost('password'))
                ]
            );
        }
            $this->response->redirect('auth/profil');
    }

}
