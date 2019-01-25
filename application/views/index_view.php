<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('assets/') . "style.css" ?>">

    <title>Profile</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Code i</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url('Buku/index') ?>">Profile<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Service</a>
      <a class="nav-item nav-link" href="#">About Us</a>
      <a class="nav-item nav-link" href="<?= base_url('Login/logout') ?>">Logout</a>
    </div>
  </div>
</nav>
<div class="card" style="width: 20rem; margin-left: 450px; margin-top: 150px;">
  <h5 class="card-header">You're Logged in</h5>
  <div class="card-body">
    <h5 class="card-title">Hello Raihan!!</h5>
    <p class="card-text">Thanks to comeback!! Let's see you're profile!</p>
    <a href="#" class="btn btn-primary">See My Profile</a>
  </div>
</div>
</body>
</html>