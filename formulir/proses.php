<?php 
include '../database.php';
$formulir = new Formulir();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $jns_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $umur = date('Y') - $tgl_lahir;
}
if($aksi == "tambah")
{
    $formulir->create($nama,$alamat,$tgl_lahir,$jns_kelamin,$agama,$umur);
    header("location:index.php");
}elseif($aksi == "update")
{
    $formulir->update($id,$nama,$alamat,$tgl_lahir,$jns_kelamin,$agama,$umur);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $formulir->delete($_GET['id']);
    header("location:index.php");
}
?>