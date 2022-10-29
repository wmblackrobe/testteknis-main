<div class="row">
    <div class="col-md-12">
        <h1 align="center"><?php echo isset($judulform) ? $judulform: 'Tambah Pengaduan' ;?></h1>
    </div>
</div>

<div class="ibox-content">
           <form action method="post" class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo isset($satu['nama']) ? $satu['nama']: '' ;?>"> 
                </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Judul Pengaduan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="judul_pengaduan" name="judul_pengaduan" value="<?php echo isset($satu['judul_pengaduan']) ? $satu['judul_pengaduan']: '' ;?>"> 
                </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Deskripsi Pengaduan</label>
                <div class="col-sm-10">
                <textarea name="deskripsi_pengaduan" rows="10" cols="106">
                <?php echo isset($satu['deskripsi_pengaduan']) ? $satu['deskripsi_pengaduan']: '' ;?>
                </textarea> 
                </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Tanggal Pengaduan</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_pengaduan" value="<?php echo isset($satu['tanggal_pengaduan']) ? $satu['tanggal_pengaduan']: (new DateTime())->format('Y-m-d'); ?>">
                </div>
                </div>

                
                <div class="form-group">
                <div class="col-sm-10"> <input type="hidden" id="dataid" name="id_pengaduan" value="<?php echo isset($satu['id_pengaduan']) ? $satu['id_pengaduan']: '' ;?>"></div>
                <div  class="col-sm-10"><input class="btn btn-primary" type="submit" name="simpan" value="<?php echo isset($tombol) ? $tombol: 'simpan' ;?>" onclick="return confirm('apa anda yakin ingin menyimpan data ini?')">  <a href="<?php echo site_url('pengaduan');?>" class="btn btn-danger">kembali</a></div>
                </div>
            </form>
</div>






