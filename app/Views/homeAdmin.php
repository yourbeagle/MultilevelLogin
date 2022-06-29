<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body class="d-flex flex-column h-100">
 
  <main class="container">
 

 <div class="starter-template text-center py-5 px-3">
     <h1>Hai ! <?= session()->get('name'); ?></h1>
     <p class="lead">Selamat Datang, Di Halaman Home Admin</p>
     <a href="<?= site_url('logout') ?>">Logout</a>
 </div>

</main><!-- /.container -->
 
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>
</body>
</html>