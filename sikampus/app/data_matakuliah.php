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
                        <h3 class="card-title">Data Mata Kuliah</h3>
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
                                    <th>Kode</th>
                                    <th>Mata Kuliah</th>
                                    <th>Prodi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0; 
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_matakuliah");
                                while($mk = mysqli_fetch_array($query)) {
                                  $no++
                                ?>
                                <tr>
                                    <td width="5%"><?= $no;?></td>
                                    <td><?= $mk['kode']?></td>
                                    <td><?= $mk['mata_kuliah']?></td>
                                    <td><?= $mk['prodi']?></td>
                                    <td>
                                        <a onclick="hapus_data_matakuliah(<?= $mk['id']; ?>)"
                                            class="btn btn-sm btn-danger">Hapus</a>
                                        <a href="index.php?page=edit-data-matakuliah&&id=<?= $mk['id']; ?> "
                                            class="btn btn-sm btn-success">Edit</a>
                                        <a class="detail-mk btn btn-sm btn-primary" data-toggle="modal"
                                            data-target="#modal-mk" data-kode="<?= $mk['kode']; ?>"
                                            data-mata_kuliah="<?= $mk['mata_kuliah']; ?>"
                                            data-prodi="<?= $mk['prodi']; ?>">Detail</a>
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
                <h4 class="modal-title">Data Mata Kuliah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data_matakuliah.php">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Kode" name="kode" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Mata Kuliah" name="mata_kuliah"
                                required>
                        </div>
                        <div class="col">
                            <select class="custom-select" id="inputGroupSelect01" name="prodi" required>
                                <option selected>Pilih..</option>
                                <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                <option value="D4 Rekayasa Perangkat Lunak">D4 Rekayasa Perangkat Lunak</option>
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
<div class="modal fade" id="modal-mk">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Data Mata Kuliah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="get" action="add/tambah_data_mahasiswa.php">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col">
                            Kode: <span id="kode"></span>
                        </div>
                        <div class=" col">
                            Mata Kuliah: <span id="mata_kuliah"></span>
                        </div>
                        <div class="col">
                            Prodi: <span id="prodi"></span>
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
function hapus_data_matakuliah(data_id) {
    // alert('Hapus Data Mahasiswa?');
    // window.location = ("delete/hapus_data_matakuliah.php?id=" + data_id);
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
            window.location = ("delete/hapus_data_matakuliah.php?id=" + data_id);
        }
    })
}
</script>