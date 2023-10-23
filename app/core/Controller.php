<?php

// perbedaan antara Class Controller 
// dan Folder controlers adalah jika 
// dari folder maka, contollers adalah
// folder yang akan Ekstens ke Class ini
class Controller
{
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }
}
