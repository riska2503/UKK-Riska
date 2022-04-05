<form action="<?= base_url('profile/action_update_data') ?>" method="post">
<table>
    <tr>
        <td>Nama Depan</td>
        <td>:</td>
        <td>
            <input type="hidden" name="id" value="<?= $profile['id'] ?>">
            <input type="text" name="nama_depan" class="form-control" value="<?=
$profile['nama_depan'] ?>">
        </td>
        </tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><input type="text" name="nama_belakang" class="form-control" value="<?=
$profile['nama_belakang'] ?>"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" class="form-control" value="<?=
$profile['tempat_lahir'] ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir" class="form-control" value="<?=
$profile['tanggal_lahir'] ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" class="form-control" value="L">L
                <input type="radio" name="jenis_kelamin" class="form-control" value="P">P
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea type="text" name="alamat" class="form-control"><?=
$profile['alamat'] ?></textarea></td>
        </tr>
        <tr>
            <td>Jenjang Pendidikan</td>
            <td>:</td>
            <td>
                <select name="jenjang_pendidikan" id="" class="form-control">
                    <option value="SMK">SMK Sederajat</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td colspan="3" class="text-center">
                <button type="submit" class="btn btn-primary"> Simpan </button>
                <a href="" class="btn btn-warning"> Kembali </a>
            </td>
        </tr>
    </table>
</form>
        
