<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">

            <div class="card-header">
                <b>Tambah Karyawan</b>
            </div>
            
            <div class="card-body">
                <?php if (session()->has('errors')): ?>
                    <ul>
                        <?php foreach(session('errors') as $error): ?>
                                <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif ?>
            
                <?= form_open('/karyawan/create') ?>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="" name="nama">                    
                </div>
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="pria">
                        <label class="form-check-label">
                            Pria
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="wanita">
                        <label class="form-check-label">
                            Wanita
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No. Telp</label>
                    <input class="form-control" type="text" value="" name="no_telp">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="date" value="" name="tanggal_lahir">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="" name="alamat">                    
                </div>

                <button class="btn btn-primary" >Save</button>
                <a href="<?= site_url("/karyawan") ?>">Cancel</a>

                </form>
               
            </div>
                
            
        </div>
    </div>
</body>
</html>