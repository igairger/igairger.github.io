<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="Text/css" href="admin.css">
    <link rel="stylesheet" type="Text/css" href="fontawesome-free/css/all.min.css">

    
    <title>ADMIN PWA</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand my-2" href="dashboard.html">WILUJEUNG SUMPING ADMIN | <b> PESANTREN WELAS ASIH </b> </a>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search</button>
          </form>

        <div class="icon ml-4">
            <h5>
                <i class="fas fa-envelope mr-3 text-white" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fas fa-bell mr-3 text-white" data-toggle="tooltip" title="Notifikasi"></i>
                <i class="fas fa-sign-out-alt mr-3 text-white" data-toggle="tooltip" title="Keluar"></i>
            </h5>
            </div>
      </nav>

      <div class="row">
          <div class="col-md-2 bg-dark pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active text-white" href="dashboard.html"><i class="fas fa-tachometer-alt mr-2">
                  </i> Dashboard</a>
		  <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="siswa.php"><i class="fas fa-user-graduate mr-2">
                  </i> Daftar Siswa</a>
      <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="guru.php"><i class="fas fa-chalkboard-teacher mr-2">
                  </i> Daftar Guru</a>
      <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit mr-2">
                  </i> Daftar Pegawai</a>
      <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="keahlian.php"><i class="fas fa-user-graduate mr-2">
                  </i> Daftar Keahlian</a>
		  <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="bakat.php"><i class="fas fa-user-graduate mr-2">
                  </i> Daftar Bakat</a>
		  <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="tabungan.php"><i class="fas fa-user-graduate mr-2">
                  </i> Data Tabungan</a>
		  <hr class="bg-secondary">
                </li>
              </ul>
          </div>
          <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-user-graduate mt-2"></i> Daftar siswa </h3><hr>
          
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nomor Induk</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Alamat</th>
      <th scope="col">Surel</th>
      <th colspan="3" scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2020001</td>
      <td>Moch Regriagi Fadilah</td>
      <td>Pesona Parahyangan C71</td>
      <td>regriagi@kitajastudio.com</td>
    </tr>
  </tbody>
</table>
          </div>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script type="Text/javascript" src="admin.js"> </script>
  </body>
</html>