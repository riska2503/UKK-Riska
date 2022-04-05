<section class="page-section bg-ligh" id="login">
    <div class="container">
        <form action="<?= base_url('index.php/auth/proses_login') ?>" method="post">
        <h3>Silahkan Login</h3>
        <h6>Belum Punya Akun</h6><a href="<?= base_url('index.php/auth/register') ?>">Klik Disini</a>
        <table class="table">
            <tbody>
            <div class="container">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="container">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="container form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </tbody> 
            </table>
        </form>
    </div>
</section>