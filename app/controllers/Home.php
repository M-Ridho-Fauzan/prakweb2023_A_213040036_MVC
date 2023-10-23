<?php

class Home extends Controller
{
  public function index()
  {
    // echo 'Home/index';
    $data['judul'] = 'Home';
    // siapapun user yang masuk, di kirim ke nama
    $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/headers', $data);
    $this->view('Home/index', $data);
    $this->view('templates/footers');
  }
}
