<div class="container-fluid">

<h5>Halaman Tambah Data</h5>
<hr>
<br>

<form method="post" action="<?php echo base_url('Home/proses_tambah_data'); ?>">
  <div class="row mb-5">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama">
    </div>
  </div>

  <div class="row mb-5">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="alamat">
    </div>
  </div>

  <div class="row mb-5">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-5">
      <input type="varchar" class="form-control" name="email">
    </div>
  </div>

  <div class="row mb-5">
    <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-5">
      <input type="int" class="form-control" name="no_hp">
    </div>
  </div>

  <div class="row mb-5">
    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-5">
      <input type="varchart" class="form-control" name="jurusan">
    </div>
  </div>

  <div class="row mb-5">
    <label for="nik" class="col-sm-2 col-form-label">Nik</label>
    <div class="col-sm-5">
      <input type="int" class="form-control" name="nik">
    </div>
  </div>

  <div class="row mb-5">
    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tgl Lahir</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" name="tgl_lahir">
    </div>
  </div>

  <div class="row mb-5">
    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-5">
      <input type="enum" class="form-control" name="jenis_kelamin">
    </div>
  </div>

  <div class="row mb-5">
    <label for="status" class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-5">
      <input type="varchar" class="form-control" name="status">
    </div>
  </div>

  <div class="row mb-5">
    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-5">
      <input type="varchar" class="form-control" name="tempat_lahir">
    </div>
  </div>

  <div class="row mb-5">
    <label for="bukti_pembayaran" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
    <div class="col-sm-5">
      <input type="varchar" class="form-control" name="bukti_pembayaran">
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