<div class="card card-primary col-8">
    <div class="card-header">
    <h3 class="card-title"><?= $judul ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="<?= base_url() ?>index.php/koleksi/update">
    <div class="card-body ">
        <div class="form-group">
        <label for="exampleInputEmail1">ID Koleksi</label>
        <input type="text" class="form-control" name="id_koleksi_pribadi" value="<?= $isi['id_koleksi_pribadi'] ?>" id="exampleInputEmail1" placeholder="ID Buku" readonly>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Petugas</label>
        <input type="text" class="form-control" name="user_id" value="<?= $isi['user_id'] ?>" id="exampleInputEmail1" placeholder="ID Buku" required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Judul Buku</label>
        <input type="text" class="form-control" name="buku_id" value="<?= $isi['buku_id'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="<?= base_url() ?>index.php/koleksi" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>