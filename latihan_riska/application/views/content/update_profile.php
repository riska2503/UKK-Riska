<section class="page-section bg-ligh" id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 tex-center">
                <h2 class="section-heading text-upercase">Profile</h2>
                <h3 class="section-subheading text-muted">Selamat datang Di Hotel Riska</h3>

                <form action="<?= base_url("index.php/profile/proses_update_profile")?>" method="post">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">Email</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" name="email" value="<?= $user['email']?>" readonly></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Nama Lengkap</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" name="nama_lengkap" value="<?= $user['nama_lengkap']?>"></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">No HP</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" name="no_hp" value="<?= $user['no_hp']?>" ></td>
                        </tr>
                        <tr>
                             <td colspan="3">
                    <button type="submit" class="btn btn-primary">Update</button>
                     </td>
                     </tr>
                  </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
</section>