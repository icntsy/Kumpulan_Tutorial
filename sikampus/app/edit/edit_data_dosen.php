<?php 
          $id = $_GET['id'];
          $query = mysqli_query($koneksi, "SELECT * FROM tb_dosen WHERE id='$id'");
          $view = mysqli_fetch_array($query);
          ?>

<section class="content">
    <div class="container-fluid">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Dosen</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='get' action='update/update_data_dosen.php'>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama"
                                    value="<?= $view ['nama'];?>">
                                <input type="text" class="form-control" placeholder="Nama" name="id"
                                    value="<?= $view ['id'];?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control" placeholder="Nip" name="nip"
                                    value="<?= $view ['nip'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" placeholder="Alamat" name="alamat"
                                    value="<?= $view ['alamat'];?>">
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>