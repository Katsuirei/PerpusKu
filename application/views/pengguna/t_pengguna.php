<div class="card card-primary col-8">
    <div class="card-header">
    <h3 class="card-title"><?= $judul ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="<?= base_url() ?>index.php/pengguna/simpan">
    <div class="card-body ">
        <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <textarea type="text" class="form-control" name="alamat" id="exampleInputPassword1" placeholder="Ketik disini..." required></textarea>
        </div>
        <div class="form-group">
        <label for="level">Level</label>
        <select class="form-control" name="level" id="level" required>
            <option value="">---Pilih---</option>
            <option value="Administrator">Administrator</option>
            <option value="Petugas">Petugas</option>
            <option value="Peminjam">Peminjam</option>
        </select>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="<?= base_url() ?>index.php/data_buku" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
</div>