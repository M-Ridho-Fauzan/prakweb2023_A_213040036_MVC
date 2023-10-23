<?php

class About extends Controller
{
  public function index($nama = 'Ridho', $pekerjaan = 'Fresh Graduate', $umur = 300)
  {
    // echo 'About/Index';
    // echo "<hr>";
    // echo "Holla, my names is $nama, i'am is $pekerjaan";
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('templates/headers', $data);
    $this->view('about/index', $data);
    $this->view('templates/footers');
  }
  public function page()
  {
    // echo 'About/page';
    $data['judul'] = 'Pages You';
    $this->view('templates/headers', $data);
    $this->view('about/page');
    $this->view('templates/footers');
  }
}
