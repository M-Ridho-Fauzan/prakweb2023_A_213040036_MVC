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

  private $table = 'mahasiswa';
  private $dbh; // database handler

  public function __construct()
  {
    $this->dbh = new Database;
  }

  // method untung mengambil data di atas
  public function getAllMahasiswa()
  {
    // return $this->mhs;
    $this->dbh->query('SELECT * FROM ' . $this->table);
    return $this->dbh->resultSet();
  }

  // method untuk mengambil data mahasiswa berdasarkan id
  public function getMahasiswaById($id)
  {
    $this->dbh->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->dbh->bind('id', $id);
    return $this->dbh->single();
  }

  public function tambahDataMahasiswa($data)
  {
    $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan)
              VALUES
              (:nama, :nrp, :email, :jurusan)";

    $this->dbh->query($query);
    $this->dbh->bind('nama', $data['nama']);
    $this->dbh->bind('nrp', $data['nrp']);
    $this->dbh->bind('email', $data['email']);
    $this->dbh->bind('jurusan', $data['jurusan']);

    $this->dbh->execute();

    return $this->dbh->rowCount();
  }

  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id = :id";

    $this->dbh->query($query);
    $this->dbh->bind('id', (int)$id);

    $this->dbh->execute();

    return $this->dbh->rowCount();
  }

  public function ubahDataMahasiswa($data)
  {
    $query = "UPDATE mahasiswa SET
              nama = :nama,
              nrp = :nrp,
              email = :email,
              jurusan = :jurusan
              WHERE id = :id
            ";

    $this->dbh->query($query);
    $this->dbh->bind('nama', $data['nama']);
    $this->dbh->bind('nrp', $data['nrp']);
    $this->dbh->bind('email', $data['email']);
    $this->dbh->bind('jurusan', $data['jurusan']);
    $this->dbh->bind('id', $data['id']);

    $this->dbh->execute();

    return $this->dbh->rowCount();
  }

  public function cariDataMahasiswa()
  {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword OR nrp LIKE :keyword OR email LIKE :keyword OR jurusan LIKE :keyword";

    $this->dbh->query($query);
    $this->dbh->bind('keyword', "%$keyword%");
    return $this->dbh->resultSet();
  }
}
