<?php 
    if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info') ?></div>
    <?php }
?>

<div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>index.php/peminjaman/tambah_peminjaman" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
    </div><br>
<div class="card">
    <div class="card-header">
    <h3 class="card-title"><?= $judul ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Petugas</th>
                <th>Judul Buku</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 0;
                foreach ($isi as $row) {
                    $tgl_kembali = new DateTime($row->tgl_pengembalian);
                    $tgl_sekarang = new DateTime();
                    $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                    $no = $no + 1 ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row->user_id ?></td>
                <td><?= $row->buku_id ?></td>
                <td><?= $row->tgl_peminjaman ?></td>
                <td><?= $row->tgl_pengembalian ?></td>
                <td>
                    <?php 
                    if ($tgl_kembali >= $tgl_sekarang OR $selisih == 0) {
                        echo "<span class='bg bg-warning'><b class='text-secondary'>Belum dikembalikan</b></span>";
                    }else{
                        echo "Telat <b style='color:red;'>".$selisih."</b> Hari <br> <span class='label label-danger'> Denda per hari = 1.000";
                    }
                    ?>
                </td>
                <td>
                    <!-- <a href="<?= base_url() ?>index.php/peminjaman/edit/<?= $row->id_peminjaman ?>" class="btn btn-warning btn-xs">Edit</a> -->
                    <!-- <a href="<?= base_url() ?>index.php/peminjaman/hapus/<?= $row->id_peminjaman ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</a> -->
                    <a href="<?= base_url() ?>index.php/peminjaman/kembalikan/<?= $row->id_peminjaman ?>" class="btn btn-primary btn-xs" onclick="return confirm('Yakin ingin mengembalikan buku ini?')">Kembalikan</a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
    </div>
    <!-- /.card-body -->
</div>