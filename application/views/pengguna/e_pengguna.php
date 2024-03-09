<div class="card card-primary col-8">
    <div class="card-header">
    <h3 class="card-title"><?= $judul ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="<?= base_url() ?>index.php/pengguna/update">
    <div class="card-body ">
        <div class="form-group">
        <label for="exampleInputEmail1">ID User</label>
        <input type="text" class="form-control" name="id_user" value="<?= $isi['id_user'] ?>" id="exampleInputEmail1" placeholder="ID Buku" readonly>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" name="username" value="<?= $isi['username'] ?>" id="exampleInputEmail1" placeholder="ID Buku" required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" value="<?= $isi['password'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" name="email" value="<?= $isi['email'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" value="<?= $isi['nama_lengkap'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?= $isi['alamat'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required></input>
        </div>
        <div class="form-group">
        <label for="level">Level</label>
        <select class="form-control" name="level" id="level" required>
            <?php 
            if ($isi['level'] == "Administrator") {?>
            <option value="Administrator" selected>Administrator</option>
            <option value="Petugas">Petugas</option>
            <option value="Peminjam">Peminjam</option>
            <?php } elseif ($isi['level'] == "Petugas") { ?>
            <option value="Administrator">Administrator</option>
            <option value="Petugas" selected>Petugas</option>
            <option value="Peminjam">Peminjam</option>
            <?php } else { ?>
            <option value="Administrator">Administrator</option>
            <option value="Petugas">Petugas</option>
            <option value="Peminjam" selected>Peminjam</option>
                <?php } ?>
        </select>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="<?= base_url() ?>index.php/pengguna" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>