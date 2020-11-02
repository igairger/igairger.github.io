<?php function _head() {?>
  <style>
    @import url("bootstrap/css/all.min.css");
    @import url("fontawewome-free/css/fontawesome.min.css");
  </style>

  <link rel="stylesheet" type="text/css" href="admin.css" />
  <link rel="shortcut icon" href="images/icon.ico">
  <script src="js/tinymce/tinymce.min.js"></script>
     
<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="Text/css" href="admin.css">
  <link rel="stylesheet" type="Text/css" href="fontawesome-free/css/all.min.css">

<?php } ?>

<?php function form_login() { ?>

<div>
  <div id="login">
    <div class="login">
      <form action="login.php" method="post">
        <div>
          <?php require_once("svg/svg-icon-emot-abah-ambu.php");?>
            <div>Dashboard | Pesantren Welas Asih</div>
        </div>
        <div>
          <input class="input_txt_login" type="text" name="username" placeholder="Username" required>
          <input class="input_txt_login" type="password" name="password" placeholder="Password" required>
        </div>
        <div>
          <input class="button_login" type="submit" value="LOGIN";>
          <input class="button_login" type="reset" value="CANCEL";>
        </div>
      </form>
    </div>
  </div>
</div>

<?php } ?>

<?php  function _index() { ?>

<!doctype html>
<html lang="en">
  <head>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ADMIN PWA</title>
  </head>

  <body>
<?php } ?>
<?php  function _bar() { ?>
<!-- -------------------------------------- #BAGIAN NAV BAR# -------------------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand my-2" href="index.php">WILUJEUNG SUMPING ADMIN | <b> PESANTREN WELAS ASIH </b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Masukan Kata Kunci" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Cari</button>
        </form>

        <div class="icon ml-4">
          <h5>
            <i class="fas fa-envelope mr-3 text-white" data-toggle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell mr-3 text-white" data-toggle="tooltip" title="Notifikasi"></i>
            <a href="logout.php"> <i class="fas fa-sign-out-alt mr-3 text-white" data-toggle="tooltip" title="Keluar"></i></a>
          </h5>
        </div>
    </nav>
<!-- -------------------------------------- #BAGIAN SIDE BAR# -------------------------------------- -->
    <div class="row">
      <div class="col-md-2 bg-dark pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">

          <li class="nav-item">
            <a class="nav-link active text-white" href="index.php"><i class="fas fa-tachometer-alt mr-2">
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
            <a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope mr-2"></i> iMessage</a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item text-white nav-link mr-3" href="imessage.php">
                <i class="far fa-envelope mr-2 ml-3"></i>iMessage</a>
              <a class="dropdown-item text-white nav-link mr-3" href="appreciate.php">
                <i class="far fa-envelope mr-2 ml-3"></i>Appreciate</a>
              <a class="dropdown-item text-white nav-link mr-3" href="forgiveness.php">
                <i class="far fa-envelope mr-2 ml-3"></i>Forgiveness</a>
              <a class="dropdown-item text-white nav-link mr-3" href="redcard.php">
                <i class="far fa-envelope mr-2 ml-3"></i>Red Card</a>
            </div>
		        <hr class="bg-secondary">
          </li>

      </div>
<?php } ?>
<?php  function _dashboard() { ?>

<!-- ---------------------- DATABASE ---------------------- -->
    <?php include 'db_Connection.php'; ?>

      <?php 
        // mengambil jumlah data
        $query=("SELECT * FROM siswa");
        global $connect;
        $data = mysqli_query($connect,$query);
 
        // menghitung jumlah data
        $jumlah_data = mysqli_num_rows($data);                                            
      { ?>

          <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-tachometer-alt mt-2"></i> Dashboard </h3> <hr>
            
            <div class="row text-white">
              <div class="card bg-success ml-5 mt-3" style="width: 18rem;">
                <div class="card-body">
                  <div class="card-body-icon ml-3"><i class="fas fa-user-graduate mr-2"></i></div>
                  <h5 class="card-title">Jumlah Siswa</h5>
                  <div class="display-4"><?php echo $jumlah_data; ?></div>
                  <a href="siswa.php">
                    <p class="card-text  text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                  </a>
                </div>
              </div>

      <?php } ?>
      
      <?php 
        // mengambil jumlah data
        $query=("SELECT * FROM guru");
        global $connect;
        $data = mysqli_query($connect,$query);
 
        // menghitung jumlah data
        $jumlah_data = mysqli_num_rows($data);                                            
      { ?>
              <div class="card bg-danger ml-5 mt-3" style="width: 18rem;">
                <div class="card-body">
                  <div class="card-body-icon ml-3"><i class="fas fa-chalkboard-teacher mr-2"></i></div>
                  <h5 class="card-title">Jumlah Guru</h5>
                  <div class="display-4"><?php echo $jumlah_data; ?></div>
                  <a href="guru.php">
                    <p class="card-text  text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                  </a>
                </div>
              </div>
      <?php } ?>
      
      <?php 
        // mengambil jumlah data
        $query=("SELECT * FROM pegawai");
        global $connect;
        $data = mysqli_query($connect,$query);
 
        // menghitung jumlah data
        $jumlah_data = mysqli_num_rows($data);                                            
      { ?>
              <div class="card bg-info ml-5 mt-3" style="width: 18rem;">
                <div class="card-body">
                  <div class="card-body-icon ml-3"><i class="fas fa-user-edit mr-2"></i></div>
                  <h5 class="card-title">Jumlah Pegawai</h5>
                  <div class="display-4"><?php echo $jumlah_data; ?></div>
                  <a href="pegawai.php">
                    <p class="card-text  text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
                  </a>
                </div>
              </div>
      <?php } ?>
      
          </div>

<!-- ---------------------- iMessage ---------------------- -->
    <h3><i class="far fa-envelope mt-5"></i> iMessage </h3><hr>

<!-- ---------------------- DATABASE ---------------------- -->
<?php include 'db_Connection.php'; ?>

<?php 
  // mengambil jumlah data
  $query=("SELECT * FROM imessage");
  global $connect;
  $data = mysqli_query($connect,$query);

  // menghitung jumlah data
  $jumlah_data = mysqli_num_rows($data);                                            
{ ?>
      
      <div class="row text-white">
        <div class="card bg-success ml-5 mt-3" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon ml-3"><i class="far fa-envelope mr-2"></i></div>
            <h5 class="card-title">iMessage</h5>
            <div class="display-4"><?php echo $jumlah_data; ?></div>
            <a href="imessage.php">
              <p class="card-text  text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>

<?php } ?>

<?php 
  // mengambil jumlah data
  $query=("SELECT * FROM appreciate");
  global $connect;
  $data = mysqli_query($connect,$query);

  // menghitung jumlah data
  $jumlah_data = mysqli_num_rows($data);                                            
{ ?>
        <div class="card bg-info ml-5 mt-3" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon ml-3"><i class="far fa-envelope mr-2"></i></div>
            <h5 class="card-title">Appreciate</h5>
            <div class="display-4"><?php echo $jumlah_data; ?></div>
            <a href="appreciate.php">
              <p class="card-text  text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
<?php } ?>

<?php 
  // mengambil jumlah data
  $query=("SELECT * FROM forgiveness");
  global $connect;
  $data = mysqli_query($connect,$query);

  // menghitung jumlah data
  $jumlah_data = mysqli_num_rows($data);                                            
{ ?>
        <div class="card bg-warning ml-5 mt-3" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon ml-3"><i class="far fa-envelope mr-2"></i></div>
            <h5 class="card-title">Forgiveness</h5>
            <div class="display-4"><?php echo $jumlah_data; ?></div>
            <a href="forgiveness.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
<?php } ?>

<?php 
  // mengambil jumlah data
  $query=("SELECT * FROM redcard");
  global $connect;
  $data = mysqli_query($connect,$query);

  // menghitung jumlah data
  $jumlah_data = mysqli_num_rows($data);                                            
{ ?>
        <div class="card bg-danger ml-5 mt-3" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon ml-3"><i class="far fa-envelope mr-2"></i></div>
            <h5 class="card-title">Red Card</h5>
            <div class="display-4"><?php echo $jumlah_data; ?></div>
            <a href="redcard.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
<?php } ?>


    </div>
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
<?php  }?>

<?php function _footer() { ?>
 <!-- COPYRIGHT -->
<div id="footer_copyright">
    Copyright <i class="far fa-copyright"></i><?php echo date(" Y")?> <b> Pesantren Welas Asih. All Rights Reserved </b>
</div>
<?php } ?>