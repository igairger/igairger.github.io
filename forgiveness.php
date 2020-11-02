<?php 
error_reporting(0);
    session_start();
    include("db_Connection.php");
    include("lib_func_admin.php");
?>

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

<!-- -------------------------------------- #CEK SESSION# -------------------------------------- -->
<?php 
      $_SESSION['dashboard_pwa_session'];
      $sudahlogin=$_SESSION['dashboard_pwa_session'];
        if($sudahlogin == TRUE){
          _isi();
        }else{
          form_login();
        }
    ?>

<?php function _isi() { ?>

<?php _bar(); ?>

<!-- -------------------------------------- #BAGIAN TAMPIL TABEL# -------------------------------------- -->
  <div class="col-md-10 p-5 pt-2">

<!-- ---------------------- JUDUL TABEL ---------------------- -->
    <h3><i class="far fa-envelope mt-2"></i> Forgiveness </h3><hr>

<!-- ---------------------- SEARCH DATA ---------------------- -->
    <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Masukan nama siswa" aria-label="Search" name="cari">
        <div class="icon">
          <button class="btn my-sm-0 text-white btn-info btn-block" type="submit">Cari</button>
        </div>
        <div class="icon">
          <a href="siswa.php" class="btn fas fa-sync-alt my-sm-0 text-white btn-info btn-block bg-success ml-1 p-2"></a>
        </div>
    </form>
    
  </nav>

  <?php 
    if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
    }
  ?>

<!-- ---------------------- MODAL EDIT ---------------------- -->
  <div class="modal fade" id="Modal_input" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
        <form action="siswa_aksi.php?action=tambah" method="tambah" enctype="multipart/form-data"> 
              <table class="table table-striped table-bordered table-font">
                  <tr>
                      <td><label for="id_siswa">* ID Siswa</label></td>
                      <td> : <input id="input_txt" class="txt_title" type="text" name="id_siswa" spellcheck="false" placeholder="cth: 201901001" required></td>
                  </tr>

                  <tr>
                      <td><label for="nama_siswa">Nama Siswa</label></td>
                      <td> : <input id="input_txt" class="txt_title" type="text" name="nama_siswa" spellcheck="false" placeholder="cth: Ujang Udin" required></td>
                  </tr>
                  
                  <tr>
                      <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                      <td> : <input id="date" class="txt_title" type="date" name="tanggal_lahir" spellcheck="false"></td>
                  </tr>

                  <tr>
                      <td><label for="Jenis_kelamin">Jenis Kelamin</label></td>
                      <td> : <input id="set" class="txt_title" type="set" name="jenis_kelamin" spellcheck="false"></td>
                  </tr>

              </table>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button reset" value="CLEAR" class="btn btn-secondary" data-dismiss="modal">Clear</button>
          <button type="button submit" value="tambah" name="POST" class="btn btn-primary" 
          onclick="return confirm('Apakah data yang dimasukan sudah benar?');">Tambah</button>
        </div>
      </div>
    </div>
  </div>

<!-- ---------------------- TABEL ---------------------- -->
  <table class="table table-striped table-bordered table-font mt-2">
    <thead>
      <tr>
        <th scope="col">ID. Pesan</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Kepada</th>
        <th scope="col">Isi Pesan</th>
        <th colspan="3" scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php include 'db_Connection.php'; ?>
      <?php 
        if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $query = ("SELECT * FROM forgiveness WHERE kepada like '%".$cari."%'");  
          global $connect;
          $query_data=mysqli_query($connect, $query);
        } else{
          $query=("SELECT * FROM forgiveness ORDER BY id_forgiveness ASC");
          global $connect;
          $query_data=mysqli_query($connect, $query);
        }
        while($row=mysqli_fetch_array($query_data))                                            
      { ?>
      
      <tr>
        <td align="center"><?php echo $row['id_forgiveness'];?></td>
        <td align="center"><?php echo $row['id_forgiveness'];?></td>
        <td align="center"><?php echo $row['kepada'];?></td>
        <td align="center"><?php echo $row['isi_pesan'];?></td>
        <td align="center"><i class="btn fas fa-edit bg-success p-2 text-white rounded" data-toggle="modal" data-target="#Modal_edit"></a></td>
        <td align="center">
          <i href="siswa_aksi.php?action=delete&id=<?php echo $row['no_induk'];?>" 
          class="btn fas fa-trash-alt bg-danger p-2 text-white rounded"
          onclick="return confirm('Apakah Anda yakin akan menghapus data: <?php echo $row['id_message'];?>?');">
        </td>
      </tr>
      
    <?php } ?>
    </tbody>
  </table>

      </div>
    </div>
    
<?php _footer(); ?>

  <?php } ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script type="Text/javascript" src="admin.js"> </script>

  </body>

</html>