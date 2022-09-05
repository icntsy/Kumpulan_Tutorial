<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h3>List Prodi</h3>

            <ul class="list-group">
                <?php foreach( $data['kms'] as $kms) :  ?>
                <li class="list-group-item d-flex justify-content-between align-items-start"><?= $kms['prodi']; ?>
                    <a href="<?= BASEURL; ?>/kampus/detail/<?= $kms['id']; ?>" class="badge text-bg-primary">Detail</a>
                </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>