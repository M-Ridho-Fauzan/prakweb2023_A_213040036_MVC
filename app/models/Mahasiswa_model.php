<?php

class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "M.Syarif Aminulloh",
  //     "nrp" => "1001",
  //     "email" => "Syarift@mail.com",
  //     "jurusan" => "Teknik Pertempuran"

  //   ],
  //   [
  //     "nama" => "Munaroh Taufiq",
  //     "nrp" => "1002",
  //     "email" => "Naroh@mail.com",
  //     "jurusan" => "Teknik penjarahan"

  //   ],
  //   [
  //     "nama" => "Syamsul Arif",
  //     "nrp" => "1003",
  //     "email" => "Samsul@mail.com",
  //     "jurusan" => "Teknik Pertempuran"

  //   ]
  // ];

  // Jangan Gunakan ini saat di kerjaan
  // cara konek ke DB ini dengan driver VDO(Vxp Data Object)
  // agar bisa ganti Db sesuka hati
  // contoh PhpMyadmin ke 
  private $dbh; // DataBase Handler
  private $stmt;

  public function __construct()
  {
    // Data Source Name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  // method untung mengambil data di atas
  public function getAllMahasiswa()
  {
    // return $this->mhs;
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
