<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['kms']['prodi']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['kms']['jurusan']; ?></h6>
            <p class="card-text"><?= $data['kms']['deskripsi']; ?></p>
            <a href="<?= BASEURL; ?>/kampus" class="card-link">Kembali</a>
        </div>
    </div>
</div>