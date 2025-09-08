<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/bootstrap-icons-1.11.1/bootstrap-icons.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disable" style="cursor: no-drop;">+18</a>
          </li> -->
        </ul>
        <form class="d-flex" role="search" action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
          <input class="form-control me-2" type="search" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-outline-dark" type="submit" id="tombolCari"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>
  </nav>