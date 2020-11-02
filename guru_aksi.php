<?php 
    include("db_Connection.php");
    error_reporting(0);

$action = $_GET["action"];

// ===== INSERT DATA =====
if($action == "tambah"){
    if (is_uploaded_file($_FILES['foto']['tmp_name'])){

        $no_induk = $_POST['no_induk'];
        $nama_lengkap = $_POST['nama_guru'];
        $tanggal_lahir = date("Y-m-j");
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $asal = $_POST['asal'];
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

        $query = "INSERT INTO guru (no_induk, nama_guru, tanggal_lahir, jenis_kelamin, asal, angkatan)
        VALUES('$id_siswa','$nama_siswa','$tanggal_lahir','$jenis_kelamin','$asal','$angkatan','$tanggal_lahir')";

        $res = mysqli_query($connect, $query);

        echo "<script>window.alert('Tambah Data Berhasil.');</script>";
        echo "<script>document.location='index.php?page=banner';</script>";
    }

// ===== HAPUS DATA =====
}else if ($action == "delete"){
    $delete_id = $_GET["id"];

    $query = "DELETE FROM guru WHERE no_induk = $delete_id";
    $res = mysqli_query($connect, $query);

    if($res){               
        echo "<script>document.location='index.php?page=banner';</script>";                 
    }else{
        echo "<script>document.location='index.php?page=banner';</script>";
        echo "<script>alert('Deleted data Failed');</script>";
    } 
}?>