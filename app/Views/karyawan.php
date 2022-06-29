<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style.css')?>">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Data Karyawan</b>
            </div>
            <div class="card-body">
            <a href="<?= site_url("/karyawan/add")?> " class="btn btn-primary mb-3">Tambah Karyawan</a>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                       
                    </tr>
                    <?php
                    foreach ($karyawan as $row) : ?>
                        <tr>
                            <td><?php echo $row->id_pegawai; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->jenis_kelamin; ?></td>
                            <td><a class="btn btn-primary" href="<?= base_url("/karyawan/show/$row->id_pegawai")?>"></i>Lihat Detail</a>
                            <a class="btn btn-warning" href="<?= base_url("/karyawan/edit/$row->id_pegawai")?>">Edit</a>
                            <a class="btn btn-danger" href="<?= base_url("/karyawan/delete/$row->id_pegawai")?>">Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <?= $pager->links() ?>
            </div>
        </div>
    </div>
</body>
</html>