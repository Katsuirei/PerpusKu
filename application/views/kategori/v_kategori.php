<?php 
    if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info') ?></div>
    <?php }
?>
<div class="row">
        <div class="col-md-12">
            <a href="<?= base_url() ?>index.php/kategori/tambah_kategori" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
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
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 0;
                foreach ($isi as $row) {
                    $no = $no + 1 ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row->nama_kategori ?></td>
                <td>
                    <a href="<?= base_url() ?>index.php/kategori/hapus/<?= $row->id_kategori_buku ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
    </div>
    <!-- /.card-body -->
</div>