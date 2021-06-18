<?php

class Home extends Controller {
    public function index () 
    {
        $data ["judul"] = "Login";
        $data ["nama"] = $this ->model ("User_model") ->getUser();
        $this ->view ("templates/header", $data);
        $this ->view ("home/index", $data);
        $this ->view ("templates/footer");
    }

    public function register()
    {   
        $data ["judul"] = "Register";
        $this ->view ("templates/header", $data);
        $this ->view ("home/register", $data);
        $this ->view ("templates/footer");
    }

    public function masuk()
    {   var_dump($_POST);
        $data['user'] = $this->model('User_model')->login($_POST);
        if (isset($data['user']['id_user'])) {
                $_SESSION['id_user'] = $data['user']['id_user'];
                Flasher::setFlash('berhasil', 'Masuk', 'success');
                header('Location: ' . BASEURL . '/dashboard');
                exit;
        } else {
            Flasher::setFlash('Gagal', 'Masuk', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    
    public function registrasi()
    {   
        if ($this->model('User_model')->regist($_POST) > 0) {
            Flasher::setFlash('User Berhasil', 'didaftarkan', 'success');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Regist', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
        
    }

}