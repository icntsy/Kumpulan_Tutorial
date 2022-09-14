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
                        <h3 class="card-title">Data Mahasiswa</h3>
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
                                    <th>Nim</th>
                                    <th>Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0; 
                                $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                                while($mhs = mysqli_fetch_array($query)) {
                                  $no++
                                ?>
                                <tr>
                                    <td width="5%"><?= $no;?></td>
                                    <td><?= $mhs['nama']?></td>
                                    <td><?= $mhs['nim']?></td>
                                    <td><?= $mhs['semester']?></td>
                                    <td>
                                        <a onclick="hapus_data_mahasiswa(<?= $mhs['id']; ?>)"
                                            class="btn btn-sm btn-danger">Hapus</a>
                                        <a href="index.php?page=edit-data-mahasiswa&&id=<?= $mhs['id']; ?> "
                                            class="btn btn-sm btn-success">Edit</a>
                                        <a class="detail-mhs btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modal-mhs" data-nama="<?= $mhs['nama']; ?>"
                                            data-nim="<?= $mhs['nim']; ?>"
                                            data-semester="<?= $mhs['semester']; ?>">Detail</a>
                                    </td>
                                </tr>
                                <?php 
                            }?>

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
                <h4 class="modal-title">Tambah Data Mahasiswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data_mahasiswa.php">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                        </div>
                        <div class=" col">
                            <input type="text" class="form-control" placeholder="Nim" name="nim" required>
                        </div>
                        <div class="col">
                            <select class="custom-select" id="inputGroupSelect01" name="semester" required>
                                <option selected>Semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
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
<!-- modal Detail Mahasiswa -->
<div class="modal fade" id="modal-mhs">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Data Mahasiswa</h4>
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
                            NIM: <span id="nim"></span>
                        </div>
                        <div class="col">
                            Semester: <span id="semester"></span>
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
function hapus_data_mahasiswa(data_id) {
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
            window.location = ("delete/hapus_data_mahasiswa.php?id=" + data_id);
        }
    })
}
</script>