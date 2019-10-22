<?php

class UserController extends ControllerBase
{
    public function initialize()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->ses_user = $this->session->get('ses_username');
        $this->ses_hak_akses = $this->session->get('ses_hak_akses');
        $this->ses_nama = $this->session->get('ses_nama');
        if ($this->ses_hak_akses != 'administrator'){
            $this->response->redirect('');
        }
    }
    public function dataAction()
    {
        $this->view->users = User::find(
            [
                'conditions' => 'username != "'.$this->ses_user.'"',
            ]
        );
    }
    public function insertAction()
    {
        // post
        $nama = $this->request->getPost('nama');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $konfirmasi_password = $this->request->getPost('konfirmasi_password');
        $hak_akses = $this->request->getPost('hak_akses');

        // init
        $user = new User();

        if($password == $konfirmasi_password ){
            // DB query
            $user->save(
                [
                    'password' => md5($password),
                    'username' => $username,
                    'nama' => $nama,
                    'hak_akses' => $hak_akses
                ]
            );
//            // condition
            if ($user->save()) {
                $this->flashSession->success('berhasil menambah user baru');
                $this->response->redirect('user/data');
            }else{
                $this->flashSession->danger('gagal menambah user baru');
                $this->response->redirect('user/data');
            }
        }else{
            $this->flashSession->danger('password dan konfirmasi password tidak sama');
            $this->response->redirect('user/data');
        }
    }
    public function updateAction()
    {
        // post
        $id_user = $this->request->getPost('id_user');
        $nama = $this->request->getPost('nama');
        $username = $this->request->getPost('username');
        $hak_akses = $this->request->getPost('hak_akses');

        // init
        $user = User::findFirstByIdUser($id_user);
        // DB query
        $user->nama = $nama;
        $user->username = $username;
        $user->hak_akses = $hak_akses;
        $user->save();
        // condition
        if ($user->save()) {
            $this->flashSession->success('berhasil update user');
            $this->response->redirect('user/data');
        }else{
            $this->flashSession->danger('gagal update user');
            $this->response->redirect('user/data');
        }
    }
    public function deleteAction()
    {
        $user = User::findFirstByIdUser($this->request->getPost('id_user'));
        if ($user->delete()) {
            $this->flashSession->success('User '.$user->nama.' berhasil dihapus');
            $this->response->redirect('user/data');
        }
    }

}
