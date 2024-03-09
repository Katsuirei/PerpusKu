<?php 
    if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info') ?></div>
    <?php }
?>


<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= $judul ?></h3>
     </div>
        <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Petugas</th>
                <th>Judul Buku</th>
                <th>Tgl Peminjaman</th>
                <th>Tgl Pengembalian</th>
                <th>Tgl Dikembalikan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 0;
                foreach ($isi as $row) {
                    $no = $no + 1 ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row->user_id ?></td>
                <td><?= $row->buku_id ?></td>
                <td><?= $row->tgl_peminjaman ?></td>
                <td><?= $row->tgl_pengembalian ?></td>
                <td><?= $row->tgl_dikembalikan ?></td>
               
            </tr>
            <?php }
            ?>
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>