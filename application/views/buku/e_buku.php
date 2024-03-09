<div class="card card-primary col-8">
    <div class="card-header">
    <h3 class="card-title"><?= $judul ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="<?= base_url() ?>index.php/data_buku/update">
    <div class="card-body ">
        <div class="form-group">
        <label for="exampleInputEmail1">ID Buku</label>
        <input type="text" class="form-control" name="id_buku" value="<?= $isi['id_buku'] ?>" id="exampleInputEmail1" placeholder="ID Buku" readonly>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">ID Buku</label>
        <input type="text" class="form-control" name="id" value="<?= $isi['id'] ?>" id="exampleInputEmail1" placeholder="ID Buku" readonly>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Judul</label>
        <input type="text" class="form-control" name="judul" value="<?= $isi['judul'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="kategori">Kategori Buku</label>
        <select class="form-control select2" name="kategori_id" id="kategori" required>
            <!-- <option value="">---Pilih---</option> -->
            <?php 
            foreach ($kategori as $row) { ?>
            <option value="<?= $isi['nama_kategori'] ?>"><?= $row->nama_kategori ?></option>
        <?php }
             ?>
        </select>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Penulis</label>
        <input type="text" class="form-control" name="penulis" value="<?= $isi['penulis'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Penerbit</label>
        <input type="text" class="form-control" name="penerbit" value="<?= $isi['penerbit'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
        <!-- <div class="form-group">
        <label for="exampleInputPassword1">Tahun Terbit</label>
        <input type="number" class="form-control" name="tahun_terbit" value="<?= $isi['tahun_terbit'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div> -->
        <div class="form-group">
        <label for="kategori">Tahun Terbit</label>
        <select class="form-control select2" name="tahun_terbit" id="kategori" required>
            <option value="">---Pilih---</option>
            <?php 
            for ($tahun_terbit = 1900; $tahun_terbit<=2024; $tahun_terbit++) { 
                if ($isi['tahun_terbit'] == $tahun_terbit) {?>
            <option value="<?= $tahun_terbit ?>" selected><?= $tahun_terbit ?></option>
        <?php } else { ?>
            <option value="<?= $tahun_terbit ?>" ><?= $tahun_terbit ?></option>
        <?php }
            }
             ?>
        </select>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Jumlah Buku</label>
        <input type="number" class="form-control" name="jumlah" value="<?= $isi['jumlah'] ?>" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="<?= base_url() ?>index.php/data_buku" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>