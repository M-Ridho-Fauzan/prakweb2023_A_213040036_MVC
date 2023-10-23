<div class="container mt-5">
  <div class="row">
    <div class="col-6">
      <h3>Daftar Mahasiswa</h3>
      <?php foreach ($data['mhs'] as $mhs) : ?>
        <ul>
          <li><b>Nama: </b> <?= $mhs['nama']; ?></li>
          <li><b>Nrp: </b> <?= $mhs['nrp']; ?></li>
          <li><b>Email: </b> <?= $mhs['email']; ?></li>
          <li><b>Jurusan: </b> <?= $mhs['jurusan']; ?></li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>