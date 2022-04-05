<div class="container-fluid">

<h3>Halaman Tambah Data</h3>
<hr>
<br>

<form method="post" action="<?php echo base_url('Home/proses_edit_data/') ?>">

<input type="hidden" name="nisn" value="<?php echo $ppdb['nisn']; ?>">

  <div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nama"
      required="" value="<?php echo $ppdb['nama'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="alamat"
      required="" value="<?php echo $ppdb['alamat'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="varchar" class="form-control" name="email"
      required="" value="<?php echo $ppdb['email'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-4">
      <input type="int" class="form-control" name="no_hp"
      required="" value="<?php echo $ppdb['no_hp'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-4">
      <input type="varchart" class="form-control" name="jurusan"
      required="" value="<?php echo $ppdb['jurusan'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="nik" class="col-sm-2 col-form-label">Nik</label>
    <div class="col-sm-4">
      <input type="int" class="form-control" name="nik"
      required="" value="<?php echo $ppdb['nik'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tgl Lahir</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" name="tgl_lahir"
      required="" value="<?php echo $ppdb['tgl_lahir'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-4">
      <input type="enum" class="form-control" name="jenis_kelamin"
      required="" value="<?php echo $ppdb['jenis_kelamin'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="status" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-4">
      <input type="varchar" class="form-control" name="status"
      required="" value="<?php echo $ppdb['status'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-4">
      <input type="varchar" class="form-control" name="tempat_lahir"
      required="" value="<?php echo $ppdb['tempat_lahir'];?>">
    </div>
  </div>

  <div class="row mb-3">
    <label for="bukti_pembayaran" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
    <div class="col-sm-4">
      <input type="varchar" class="form-control" name="bukti_pembayaran"
      required="" value="<?php echo $ppdb['bukti_pembayaran'];?>">
    </div>
  </div>

  <div class="row mb-5">
    <label for="nama" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
     <button type="Submit" class="btn btn-primary">Ubah</button>

     <button type="reset" class="btn btn-danger">Reset</button>
    </div>
  </div>

</form>
</div>