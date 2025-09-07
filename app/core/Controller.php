<?php

// perbedaan antara Class Controller 
// dan Folder controlers adalah jika 
// dari folder maka, contollers adalah
// folder yang akan Ekstens ke Class ini
class Controller
{
  public function view($view, $data = [])
  {
    // ini di gunakan hanya untuk tampilan
    require_once '../app/views/' . $view . '.php';
  }

  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model; // karena class
  }
}
