<?php

class Mahasiswa extends Controller
{
  public function index()
  {
    // echo 'Home/index';
    $data['judul'] = 'Daftar Mahasiswa';
    // siapapun user yang masuk, di kirim ke nama
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/headers', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footers');
  }
}
