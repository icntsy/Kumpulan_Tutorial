<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Dosen</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                            Tambah Data
                        </button> <br> <br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nip</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0; 
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_dosen");
                                while($dsn = mysqli_fetch_array($query)) {
                                  $no++
                                ?>
                                <tr>
                                    <td width="5%"><?= $no;?></td>
                                    <td><?= $dsn['nama']?></td>
                                    <td><?= $dsn['nip']?></td>
                                    <td><?= $dsn['alamat']?></td>
                                    <td>
                                        <a onclick="hapus_data_dosen(<?= $dsn['id']; ?>)"
                                            class="btn btn-sm btn-danger">Hapus</a>
                                        <a href="index.php?page=edit-data-dosen&&id=<?= $dsn['id']; ?> "
                                            class="btn btn-sm btn-success">Edit</a>
                                        <a class="detail-dsn btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modal-dsn" data-nama="<?= $dsn['nama']; ?>"
                                            data-nip="<?= $dsn['nip']; ?>"
                                            data-alamat="<?= $dsn['alamat']; ?>">Detail</a>
                                    </td>
                                </tr>
                                <?php }?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Data Dosen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data_dosen.php">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                        </div>
                        <div class=" col">
                            <input type="text" class="form-control" placeholder="Nip" name="nip" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- modal Detail Dosen -->
<div class="modal fade" id="modal-dsn">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Data Dosen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data_mahasiswa.php">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col">
                            Nama: <span id="nama"></span>
                        </div>
                        <div class=" col">
                            NIP: <span id="nip"></span>
                        </div>
                        <div class="col">
                            Alamat: <span id="alamat"></span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>

                </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
function hapus_data_dosen(data_id) {
    // alert('Hapus Data Mahasiswa?');
    // window.location = ("delete/hapus_data_mahasiswa.php?id=" + data_id);
    Swal.fire({
        title: 'Apakah Data akan Dihapus?',
        // showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Hapus Data',
        confirmButtonColor: '#CD5C5C',
        //  denyButtonText: `Don't save`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            window.location = ("delete/hapus_data_dosen.php?id=" + data_id);
        }
    })
}
</script>