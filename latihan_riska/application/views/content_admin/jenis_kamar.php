<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        Tabel Jenis Kamar
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Data Jenis Kamar
                <a href="<?= base_url('index.php/jk/tambah_data_jenis_kamar') ?>">
                    <button class="btn btn-info">Tambah data</button>
                </a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Jenis</th>
                            <th>Nama Jenis Kamar</th>
                            <th>Keterangan</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id Jenis</th>
                            <th>Nama Jenis Kamar</th>
                            <th>Keterangan</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($tbl_jenis_kamar as $tjk) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tjk["nama_jenis_kamar"] ?></td>
                                <td><?php echo $tjk["keterangan"] ?></td>
                                <td><?php echo $tjk["harga"] ?></td>
                                <td><?php echo $tjk["foto"] ?></td>
                                <td>
                                    <a href="<?= base_url('index.php/jenis_kamar/update_data_jk/') ?><?php echo $tjk['id_jenis'] ?>" class="btn btn-info btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a href="<?= base_url('index.php/jenis_kamar/hapus_data_jk/') ?><?php echo $tjk['id_jenis'] ?>" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>