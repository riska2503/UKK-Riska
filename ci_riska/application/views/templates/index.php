<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="card shadow mb-4">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Daftar Peserta Didik Baru
                            <a href="<?php echo base_url('home/tambah_data');?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
   <tr>
       <td>Nisn</td> 
       <td>Nama</td>
       <td>Alamat</td>
       <td>Email</td>
       <td>No hp</td>
       <td>Jurusan</td>
       <td>Nik</td>
       <td>Tgl lahir</td>
       <td>Jenis kelamin</td>
       <td>Status</td>
       <td>Tempat lahir</td>
       <td>Bukti pembayaran</td>
       <td colspan="2">Setting</td>
</tr>
</thead>
 <tbody>
<?php foreach ($ppdb as $pd) : ?>
<tr>
    <td><?php echo $pd['nisn']; ?></td>
    <td><?php echo $pd['nama']; ?></td>
    <td><?php echo $pd['alamat']; ?></td>
    <td><?php echo $pd['email']; ?></td>
    <td><?php echo $pd['no_hp']; ?></td>
    <td><?php echo $pd['jurusan']; ?></td>
    <td><?php echo $pd['nik']; ?></td>
    <td><?php echo $pd['tgl_lahir']; ?></td>
    <td><?php echo $pd['jenis_kelamin']; ?></td>
    <td><?php echo $pd['status']; ?></td>
    <td><?php echo $pd['tempat_lahir']; ?></td>
    <td><?php echo $pd['bukti_pembayaran']; ?></td>
    <td>
    <a href="<?php echo base_url()?>Home/edit_data/<?php echo $pd['nisn']; ?>" class="badge badge-primary">Edit</a>
    <a href="<?php echo base_url()?>Home/hapus_data/<?php echo $pd['nisn']; ?>" class="badge badge-danger">Hapus</a>
</td>
</tr>  

    <?php endforeach; ?>
</tbody>
 </table>

     </div>
   </div>
  </div>
    </div>

    