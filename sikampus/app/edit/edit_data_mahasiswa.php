<?php 
          $id = $_GET['id'];
          $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
          $view = mysqli_fetch_array($query);
          ?>

<section class="content">
    <div class="container-fluid">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method='post' action='update/update_data_mahasiswa.php' enctype="multipart/form-data">
                    <div class=" row">
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
                                <label>NIM</label>
                                <input type="text" class="form-control" placeholder="NIM" name="nim"
                                    value="<?= $view ['nim'];?>">
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Semester</label>
                                <select class="custom-select" id="inputGroupSelect01" name="semester">
                                    <option value="<?= $view['semester']; ?>" selected><?= $view['semester']; ?>
                                    </option>
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
                        <div class="col-sm-6">
                            <label class="form-label" for="customFile">Upload Foto</label>
                            <input type="file" name="foto" class="form-control" id="customFile" />
                            <div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="foto/<?= $view['foto']; ?>" width="100px" class="rounded float-right">
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>