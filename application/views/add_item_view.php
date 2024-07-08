<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="<?php echo base_url('index.php/dashboard/save') ?>">
                    <div class="form-group">
                        <label for="column5">ID Pinjam</label>
                        <input type="text" class="form-control" name="id_pinjam" id="column5" required>
                    </div>
                    <div class="form-group">
                        <label for="buku_id">Anggota</label>
                        <select class="form-control" name="anggota_id" id="anggota_id" required>
                            <option value="">Pilih Anggota</option>
                            <?php foreach ($anggotas as $anggota): ?>
                            <option value="<?php echo $anggota->id_anggota; ?>"><?php echo $anggota->nama_anggota; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="buku_id">Buku</label>
                        <select class="form-control" name="buku_id" id="buku_id" required>
                            <option value="">Pilih Buku</option>
                            <?php foreach ($bukus as $buku): ?>
                            <option value="<?php echo $buku->id_buku; ?>"><?php echo $buku->judul_buku; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="column3">Tanggal Pinjam</label>
                        <input type="date" class="form-control" name="tgl_pinjam" id="column3" required>
                    </div>
                    <div class="form-group">
                        <label for="column4">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tgl_kembali" id="column4" required>
                    </div>
                    <div class="form-group">
                        <label for="column5">Jumlah Pinjam</label>
                        <input type="number" class="form-control" name="jumlah" id="column5" required>
                    </div>
                    <div class="form-group">
                        <label for="column5">Lama Pinjam</label>
                        <input type="number" class="form-control" name="lama_pinjam" id="column5" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>