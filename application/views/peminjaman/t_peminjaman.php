<?php 
    $tgl_peminjaman = date('Y-m-d');
    $seminggu = mktime(0,0,0,date("n"),date("j") + 7, date("Y"));
    $tgl_pengembalian = date('Y-m-d', $seminggu);
?>
<div class="card card-primary col-8">
    <div class="card-header">
    <h3 class="card-title"><?= $judul ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post" action="<?= base_url() ?>index.php/peminjaman/simpan">
    <div class="card-body ">
        <div class="form-group">
        <label for="exampleInputPassword1">Petugas</label>
        <input type="text" class="form-control" name="user_id" value="<?= $this->session->userdata('nama_lengkap') ?>" id="exampleInputPassword1" placeholder="Ketik disini..." readonly>
        </div>
        <!-- <div class="form-group">
        <label for="exampleInputPassword1">Buku ID</label>
        <input type="text" class="form-control" name="buku_id" id="id_buku" placeholder="Ketik disini..." required>
        </div> -->
        <div class="form-group">
        <label for="id_buku">Judul Buku</label>
        <select class="form-control" name="buku_id" id="id_buku" required>
        <option value="">---Pilih---</option>
            <?php 
            foreach ($buku as $row) { ?>
            <option value="<?= $row->judul ?>"><?= $row->judul ?></option>
        <?php }
             ?>
        </select>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Peminjaman</label>
        <input type="date" class="form-control" name="tgl_peminjaman" value="<?= $tgl_peminjaman ?>" id="exampleInputPassword1" placeholder="Ketik disini..." readonly>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Pengembalian</label>
        <input type="date" class="form-control" name="tgl_pengembalian" value="<?= $tgl_pengembalian ?>" id="exampleInputPassword1" placeholder="Ketik disini..." readonly>
        </div>
        <!-- <div class="form-group">
        <label for="exampleInputPassword1">Status Peminjaman</label>
        <input type="text" class="form-control" name="status_peminjaman" id="exampleInputPassword1" placeholder="Ketik disini..." required>
        </div> -->
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="<?= base_url() ?>index.php/peminjaman" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
</div>

<script>
    $('#id_buku').change(function(){
        var id = $(this).val();
        // alert(id);
        $.ajax({
            url : '<?= base_url() ?>index.php/peminjaman/jumlah_buku',
            data : {id:id},
            method : 'post',
            dataType : 'json',
            success:function(hasil){
                var jumlah = JSON.stringify(hasil.jumlah);
                var jumlah1 = jumlah.split('"').join('');
                if (jumlah1 <= 0) {
                    alert('Maaf, stok buku ini sedang kosong.');
                    location.reload();
                }
            }
        });
    });
</script>