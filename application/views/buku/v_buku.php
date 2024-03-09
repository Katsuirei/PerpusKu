<?php 
    if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info') ?></div>
    <?php }
?>
<div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>index.php/data_buku/tambah_buku" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
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
                <th>ID Buku</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Jumlah Buku</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 0;
                foreach ($isi->result() as $row) {
                    $no = $no + 1 ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row->id ?></td>
                <td><?= $row->judul ?></td>
                <td><?= $row->kategori_id ?></td>
                <td><?= $row->penulis ?></td>
                <td><?= $row->penerbit ?></td>
                <td><?= $row->tahun_terbit ?></td>
                <td><?= $row->jumlah ?></td>
                <td>
                    <a href="<?= base_url() ?>index.php/data_buku/edit/<?= $row->id_buku ?>" class="btn btn-warning btn-xs">Edit</a>
                    <a href="<?= base_url() ?>index.php/data_buku/hapus/<?= $row->id_buku ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
    </div>
    <!-- /.card-body -->
</div>