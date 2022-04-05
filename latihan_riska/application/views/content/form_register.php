<section class="page-section bg-ligh" id="login">
    <div class="container">
            <h3>Registrasi Disini</h3>
            <h6>Sudah Punya Akun ???</h6><a href="<?= base_url('index.php/auth/login')?>">Klik Disini</a>
        <form action="<?= base_url('index.php/auth/proses_register') ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                <input name="nama_lengkap" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No HP</label>
                <input name="no_hp" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Daftar</button>

</form>