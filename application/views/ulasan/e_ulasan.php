<div class="card card-primary col-8">
    <div class="card-header">
    <h3 class="card-title"><?= $judul ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="<?= base_url() ?>index.php/ulasan/update">
    <div class="card-body ">
        <div class="form-group">
        <label for="exampleInputEmail1">ID Ulasan</label>
        <input type="text" class="form-control" name="id_ulasan_buku" value="<?= $isi['id_ulasan_buku'] ?>" id="exampleInputEmail1" placeholder="ID Buku" readonly>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Pengguna</label>
        <input type="text" class="form-control" name="user_id" value="<?= $isi['user_id'] ?>" id="exampleInputEmail1" placeholder="ID Buku" required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Judul Buku</label>
        <input type="text" class="form-control" name="buku_id" value="<?= $isi['buku_id'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Ulasan Buku</label>
        <input type="text" class="form-control" name="ulasan" value="<?= $isi['ulasan'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Rating</label><br>
        <span class="text-red">*beri rating <b>1</b> hingga <b>5</b></span>
        <input type="text" maxlength="1" class="form-control" name="rating" value="<?= $isi['rating'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="<?= base_url() ?>index.php/ulasan" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>