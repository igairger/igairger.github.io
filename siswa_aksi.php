<?php 
    include("db_Connection.php");
    error_reporting(0);

$action = $_GET["action"];

// ===== INSERT DATA =====
if($action == "tambah"){
    if (is_uploaded_file($_FILES['foto']['tmp_name'])){

        $id_siswa = $_POST['no_induk'];
        $nama_siswa = $_POST['nama_lengkap'];
        $tanggal_lahir = date("Y-m-j");
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $asal = $_POST['asal'];
        $angkatan = $_POST['angkatan'];
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

        $query = "INSERT INTO siswa (id_siswa, nama_siswa, tanggal_lahir, jenis_kelamin, asal, angkatan)
        VALUES('$id_siswa','$nama_siswa','$tanggal_lahir','$jenis_kelamin','$asal','$angkatan','$tanggal_lahir')";

        $res = mysqli_query($connect, $query);

        echo "<script>window.alert('Tambah Data Berhasil.');</script>";
        echo "<script>document.location='index.php?page=banner';</script>";
    }

// ===== HAPUS DATA =====
}else if ($action == "delete"){
    $delete_id = $_GET["id"];

    $query = "DELETE FROM siswa WHERE id_siswa = $delete_id";
    $res = mysqli_query($connect, $query);

    if($res){               
        echo "<script>document.location='index.php?page=banner';</script>";                 
    }else{
        echo "<script>document.location='index.php?page=banner';</script>";
        echo "<script>alert('Deleted data Failed');</script>";
    } 
}?>