<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Table</h3>
                <div class="card-tools">
                    <a href="<?php echo site_url('dashboard/add'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Anggota</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Jumlah Pinjam</th>
                            <th>Lama Pinjam</th>
                            <th>Denda</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($items as $item): ?>
                 
                 <!-- Example data, replace with your dynamic data -->
                 <tr>
                     <td><?php echo $item->lama_pinjam; ?></td>
                     <td><?php echo $item->nama_anggota; ?></td>
                     <td><?php echo $item->judul_buku; ?></td>
                     <td><?php echo $item->tgl_pinjam; ?></td>
                     <td><?php echo $item->tgl_kembali; ?></td>
                     <td><?php echo $item->jml_pinjam; ?> Pcs</td>
                     <td><?php echo $item->lama_pinjam; ?></td>
                     <td><?php if($item->lama_pinjam > 2){
                        $hariKedenda = $item->lama_pinjam - 2;

                        echo $hariKedenda * 5000;
                     } else { echo 0;} ?></td>
                     <td>
                         <a href="<?php echo site_url('dashboard/delete/'.$item->id_pinjam); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Batal Transaksi</a>
                     </td>
                 </tr>
                 <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
