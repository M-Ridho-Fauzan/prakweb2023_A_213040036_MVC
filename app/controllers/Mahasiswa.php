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

  public function detail($id)
  {
    // echo 'Home/index';
    $data['judul'] = 'Detail Mahasiswa';
    // siapapun user yang masuk, di kirim ke nama
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/headers', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footers');
  }

  public function tambah()
  {
    if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapuskan', 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapuskan', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  public function getUbah()
  {
    echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }

  public function cari()
  {
    $data['judul'] = 'Daftar Mahasiswa';
    // siapapun user yang masuk, di kirim ke nama
    $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
    $this->view('templates/headers', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footers');
  }
}
