<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Detail Mahasiswa</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nama: </b> <?= $data['mhs']['nama']; ?></li>
                <li class="list-group-item"><b>Nrp: </b> <?= $data['mhs']['nrp']; ?></li>
                <li class="list-group-item"><b>Email: </b> <?= $data['mhs']['email']; ?></li>
                <li class="list-group-item"><b>Jurusan: </b> <?= $data['mhs']['jurusan']; ?></li>
            </ul>
            <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary btn-sm mt-3" role="button">
                <span>Kembali</span>
                <span class="badge text-bg-light ">
                    <i class="bi bi-arrow-90deg-left"></i>
                </span>
            </a>
        </div>
    </div>
</div>