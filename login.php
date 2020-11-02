<?php
    include("db_Connection.php");
    // error_reporting(0);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM admin WHERE username='$username' and password='$password'";
    $cek=mysqli_query($connect,$query);

    $cekdata = mysqli_num_rows($cek);

    if($cekdata > 0) // apabila username dan password benar
    {
        
        $data=mysqli_fetch_array($cek);
        session_start();
        $_SESSION['username']=$data['username'];
        $_SESSION['password']=$data['password'];
        $_SESSION['dashboard_pwa_session']=TRUE;

        echo "<script>document.location='index.php';</script>";
    }else{
        echo "<script>window.alert('Sorry Username Or Password is Wrong !!!');</script>";
        echo "<script>document.location='index.php';</script>";
    }
?>
