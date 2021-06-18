<?php

class Promo extends Controller {
    public function index () 
    {
        $data ["judul"] = "promo";
        $data ['user'] = $this ->model('User_model') ->getUserById($_SESSION['id_user']);
        $_SESSION['username'] = $data['user']['username'];
        $data['promo'] = $this->model('Promo_model')->getAllPromo($_SESSION['id_user']);
        $data['coba'] = $this->model('Promo_model')->getPromoUser();
        $this ->view ("templates/headerdash", $data);
        $this ->view ("promo/index", $data);
        $this ->view ("templates/footerdash");
    }

    public function follow()
    {
        $data['judul'] = "follow";
        $data ['user'] = $this ->model('User_model') ->getUserById($_SESSION['id_user']);
        $_SESSION['username'] = $data['user']['username'];
        $data['promo'] = $this->model('Promo_model')->getJoinPromo($_SESSION['id_user']);
        $this ->view ("templates/headerdash", $data);
        $this ->view ("follow/index", $data);
        $this ->view ("templates/footerdash");
    }

    public function postJoin($data)
    {   

        if ($this->model('Promo_model')->postJoin($data) > 0) {
            Flasher::setFlash('Berhasil', 'join', 'success');
            header('Location: ' . BASEURL.'/promo/follow');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'join', 'danger');
            header('Location: ' . BASEURL. '/promo/index');
            exit;
        }
    }

}