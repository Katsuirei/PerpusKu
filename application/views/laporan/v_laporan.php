<?php 
    if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info') ?></div>
    <?php }
?>


<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?= $judul ?></h3>
     </div>
     <style type="text/css">
        .tgl_akhir{
            margin-left: -10px;
        }
        .btn_filter{
            margin-left: -15px;
        }
        .btn_refresh{
            margin-left: -18px;
        }
        .btn_pdf{
            margin-left: +300px;
        }
     </style>
        <!-- /.card-header -->
    <div class="card-body">
        <form method="post" action="<?= base_url() ?>index.php/laporan/peminjaman">
        <div class="row">
    <div class="col-md-2">
        <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal Awal" onfocus="(this.type='date')">
    </div><br>
    <div class="col-md-2">
        <input type="text" name="tgl_akhir" class="form-control tgl_akhir" placeholder="Tanggal Akhir" onfocus="(this.type='date')">
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-primary btn-block btn_filter"><i class="nav-icon fas fa-filter"></i> Filter</button>
    </div>
    <div class="col-md-2">
        <a href="" class="btn btn-info btn-block btn_refresh"><i class="nav-icon fas fa-fan"></i> Refresh</a>
    </div>
    <div class="col-md-2">
        <a href="<?= base_url() ?>index.php/laporan/view_pdf" class="btn btn-danger btn-block btn_pdf"><i class="nav-icon fas fa-file-pdf"></i> View PDF</a>
    </div>
</div><br>
        <table id="example1" class="table table-bordered table-striped">
            
        <thead>
            <tr>
                <th>No</th>
                <th>Petugas</th>
                <th>Judul Buku</th>
                <th>Tgl Peminjaman</th>
                <th>Tgl Pengembalian</th>
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
               
            </tr>
            <?php }
            ?>
        </tbody>
        </table>
        </form>
    </div>
    <!-- /.card-body -->
</div>