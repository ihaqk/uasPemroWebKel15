<?php

class Dashboard extends Controller {

    public function index()
    {   
      $data ['judul'] = "Dashboard";
      $data ['user'] = $this ->model('User_model') ->getUserById($_SESSION['id_user']);
      $_SESSION['username'] = $data['user']['username'];
      
      $this ->view ("templates/headerdash", $data);
      $this ->view ("dashboard/index");
      $this ->view ("templates/footerdash");
    }

    public function myPromo()
    {
      $data ["judul"] = "my promo";
      $data ['promos'] = $this->model('Promo_model')->getById($_SESSION['id_user']);
      $data ['user'] = $this ->model('User_model') ->getUserById($_SESSION['id_user']);
      $_SESSION['username'] = $data['user']['username'];
      $this ->view ("templates/headerdash", $data);
      $this ->view ("dashboard/mypromo",$data);
      $this ->view ("templates/footerdash");
    }
    public function promo()
    {
      $data ['judul'] = 'promo';
      $data ['user'] = $this ->model('User_model') ->getUserById($_SESSION['id_user']);
      $_SESSION['username'] = $data['user']['username'];
      $this ->view ("templates/headerdash", $data);
      $this ->view ("dashboard/promo");
      $this ->view ("templates/footerdash");
    }

    public function detail($id)
    {
      $data ["judul"] = "detail";
      $data ['user'] = $this ->model('User_model') ->getUserById($_SESSION['id_user']);
      $data ['promo'] = $this ->model('Promo_model') ->getPromoById($id);
      $this ->view ("templates/headerdash", $data);
      $this ->view ("dashboard/detail", $data);
      $this ->view ("templates/footerdash");
    }

    public function createPromo()
    {
      if ($this->model('Promo_model')->insertPromo($_POST) > 0) {
          Flasher::setFlash('Berhasil', 'tambah promo', 'success');
          header('Location: ' . BASEURL.'/dashboard/mypromo');
          exit;
      } else {
          Flasher::setFlash('Gagal', 'tambah promo', 'danger');
          header('Location: ' . BASEURL.'/dashboard/mypromo');
          exit;
      }

    }

    public function deletePromo($id)
    {
      if ($this->model('Promo_model')->deletePromo($id) > 0) {
          Flasher::setFlash('Berhasil', 'delete promo', 'success');
          header('Location: ' . BASEURL.'/dashboard/mypromo');
          exit;
      } else {
          Flasher::setFlash('Gagal', 'delete promo', 'danger');
          header('Location: ' . BASEURL.'/dashboard/mypromo/detail');
          exit;
      }
    }

    public function updatePromo()
    {
      var_dump($_POST);
      if ($this->model('Promo_model')->updatePromo($_POST) > 0) {
        Flasher::setFlash('Berhasil', 'update promo', 'success');
        header('Location: ' . BASEURL.'/dashboard/mypromo/detail');
        exit;
      } else {
        Flasher::setFlash('Gagal', 'update promo', 'danger');
        header('Location: ' . BASEURL.'/dashboard/mypromo');
        exit;
      }
    }

    public function logOut()
    {
        session_destroy();
        header('Location: ' . BASEURL);
        exit;
    }
}