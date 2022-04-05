<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Form Tambah Data Profile</h1>
<form action="<? base_url('profile/action_tambah_data') ?>" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>   
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>   
        <tr>
            <td>No Hp/Wa</td>
            <td>:</td>
            <td><input type="text" name="hp"></td>
        </tr>   
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="text" name="hobi"></td>
        </tr>   
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jk"></td>
        </tr>   
        <tr>
            <td colspan="3">
                <button type="submit"> Simpan </button>
            </td>
        </tr>
    </table>
</form>