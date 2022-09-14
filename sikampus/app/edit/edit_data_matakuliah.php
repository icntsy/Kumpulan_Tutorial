<?php 
          $id = $_GET['id'];
          $query = mysqli_query($koneksi, "SELECT * FROM tb_matakuliah WHERE id='$id'");
          $view = mysqli_fetch_array($query);
          ?>

<section class="content">
    <div class="container-fluid">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Mata Kuliah</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='get' action='update/update_data_matakuliah.php'>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" class="form-control" placeholder="Kode" name="kode"
                                    value="<?= $view ['kode'];?>">
                                <input type="text" class="form-control" placeholder="Kode" name="id"
                                    value="<?= $view ['id'];?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Mata Kuliah</label>
                                <input type="text" class="form-control" placeholder="Mata Kuliah" name="mata_kuliah"
                                    value="<?= $view ['mata_kuliah'];?>">
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Prodi</label>
                                <select class="custom-select" id="inputGroupSelect01" name="prodi">
                                    <option value="<?= $view['prodi']; ?>" selected><?= $view['prodi']; ?>
                                    </option>
                                    <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                    <option value="D4 Rekayasa Perangkat Lunak">D4 Rekayasa Perangkat Lunak</option>

                                </select>
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