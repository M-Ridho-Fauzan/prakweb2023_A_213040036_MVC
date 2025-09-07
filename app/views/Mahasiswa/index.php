<div class="container mt-3">

  <div class="row position-absolute top-5 start-50 translate-middle-x" style="z-index: 9999;">
    <?php Flasher::flash(); ?>
  </div>

  <div class="row mb-3">
    <div class="col-9">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-9">
      <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
        <div class="input-group">
          <input type="search" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-outline-primary" type="submit" id="tombolCari">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-9">

      <br><br>

      <h3>Daftar Mahasiswa</h3>
      <div class="">
        <ul class="list-group list-group-flush">
          <?php foreach ($data['mhs'] as $mhs) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <?= $mhs['nama']; ?>
              <div class="">
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="btn btn-danger btn-sm" role="button" onclick="return confirm('yakin?');">
                  <span>Hapus</span>
                  <span class="badge text-bg-light ">
                    <i class="bi bi-trash"></i>
                  </span>
                </a>
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="btn btn-success btn-sm tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>" role="button">
                  <span>Ubah</span>
                  <span class="badge text-bg-light ">
                    <i class="bi bi-trash"></i>
                  </span>
                </a>
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-primary btn-sm" role="button">
                  <span>detail</span>
                  <span class="badge text-bg-light ">
                    <i class="bi bi-arrow-90deg-right"></i>
                  </span>
                </a>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <div class="modal-body">
          <input type="hidden" name="id" id="id">
          <!-- Nama -->
          <div class="mb-3">
            <label for="nama" class="form-label">Nama: </label>
            <input type="text" class="form-control" id="nama" name="nama" required placeholder="Aep Sodikin">
          </div>
          <!-- NRP -->
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP: </label>
            <input type="number" class="form-control" id="nrp" name="nrp" required placeholder="1234567890">
          </div>
          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="aep@gmail.com">
          </div>
          <!--  -->
          <div class="mb-3">
            <label for="" class="form-label">Jurusan</label>
            <select class="form-select form-select-sm" aria-label="Jurusan" id="jurusan" name="jurusan">
              <option selected>Pilih jurusan anda</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Pangan">Teknik Pangan</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>