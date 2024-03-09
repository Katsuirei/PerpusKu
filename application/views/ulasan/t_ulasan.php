<div class="card card-primary col-8">
    <div class="card-header">
    <h3 class="card-title"><?= $judul ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="<?= base_url() ?>index.php/ulasan/simpan">
    <div class="card-body ">
        <div class="form-group">
        <label for="exampleInputPassword1">Pengguna</label>
        <input type="text" class="form-control" name="user_id" value="<?= $this->session->userdata('nama_lengkap') ?>" id="exampleInputPassword1" placeholder="Ketik disini..." readonly>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Judul Buku</label>
        <input type="text" class="form-control" name="buku_id" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Ulasan Buku</label>
        <input type="text" class="form-control" name="ulasan" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Rating</label><br>
        <span class="text-red">*beri rating <b>1</b> hingga <b>5</b></span>
        <input type="number" maxlength="1" class="form-control" name="rating" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="<?= base_url() ?>index.php/ulasan" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
</div>