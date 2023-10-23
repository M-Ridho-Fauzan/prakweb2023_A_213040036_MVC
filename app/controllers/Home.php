<?php

class Home extends Controller
{
  public function index()
  {
    // echo 'Home/index';
    $data['judul'] = 'Home';
    $this->view('templates/headers', $data);
    $this->view('Home/index');
    $this->view('templates/footers');
  }
}
