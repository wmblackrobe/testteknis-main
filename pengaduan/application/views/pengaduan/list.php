<div class="row">
    <div class="col-md-12">
        <h1 align="center">Data <?php echo $judul;?></h1>
    </div>
</div>

       <div class="ibox-content">
    
       <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example">
            
             <a href="<?php echo site_url('pengaduan/form') ; ?>" class="btn btn-primary">Tambah</a>
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Judul Pengaduan</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Deskripsi Pengaduan</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $n=0;
                foreach($pengaduan->result_array() as $d)
                {
                $n++;?>
                <tr>
                    <td><?php echo $n;?></td>
                    <td><?php echo $d['nama'];?></td>
                    <td><?php echo $d['judul_pengaduan'];?></td>
                    <td><?php echo $d['tanggal_pengaduan'];?></td>
                    <td><?php echo $d['deskripsi_pengaduan'];?></td>
                    <td> <a href="<?php echo site_url('pengaduan/form/'.$d['id_pengaduan']);?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo site_url('pengaduan/hapus/'.$d['id_pengaduan']);?>" class="btn btn-danger" onclick="return confirm('apa anda yakin ingin menghapus data ini?')">Hapus</a> </td>
                </tr>
                <?php  } ?>
                </tbody>
            </table>
                </div>
        </div>
