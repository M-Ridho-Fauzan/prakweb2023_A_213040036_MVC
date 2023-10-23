<?php

class App
{
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    // jadi ini adalah proses dimana apa saja yang ada 
    // di URL akan di tangkap Di sini
    $url = $this->parseURL();

    // Controller
    // ada gk file di folder controller yang namanya sesuai yang
    // di tulis di URL nya
    if (isset($url[0])) {
      if (file_exists('../app/controllers/' . $url[0] . '.php')) {
        // dan jika ada maka timpa dengan ini: (url ke 0)
        $this->controller = $url[0];
        // setelah itu di hilangkan controller itu dari array nya
        unset($url[0]);
      }
    }
    // jika kosong maka tetap pkai default file
    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    // method

    // dan jika ada, di cek dulu
    if (isset($url[1])) {
      // pengecekan method sesudah pengecekan controller
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // pengelolaan parameter (params)

    if (!empty($url)) {
      $this->params = array_values($url);
    }

    // jalankan controller & method, serta kirimkan params jjika ada

    call_user_func_array([$this->controller, $this->method], $this->params);
  }
  public function parseURL()
  {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');
      // rtrim() di gunakan untuk menghapus tanda / di URL
      $url = filter_var($url, FILTER_SANITIZE_URL);
      // filter_var(dan isi nya) untuk membersihkan URL dari karakter2 aneh
      $url = explode('/', $url);
      // explode() memecahkan URL berdasarkan tanda slash(/)
      return $url;
    }
  }
}
