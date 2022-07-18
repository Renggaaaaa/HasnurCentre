<?php 
 //echo "data siap diupdate namun belum tersimpan ke database" ;

include 'koneksi.php';
$db = new database();

// ini kode mengambil data dari edit.php
$Var_id		= $_POST['id'];       //data ini diambil dari name yang ada di form tambah
$Var_project 		= $_POST['project'];       //data ini diambil dari name yang ada di form tambah
$Var_client = $_POST['client'];   	//data ini diambil dari name yang ada di form tambah
$Var_lead 	= $_POST['lead'];   	//data ini diambil dari name yang ada di form tambah
$Var_start 	= $_POST['start'];			//data ini diambil dari name yang ada di form tambah
$Var_end 	= $_POST['end'];			//data ini diambil dari name yang ada di form tambah
$Var_progres 	= $_POST['progres'];			//data ini diambil dari name yang ada di form tambah
//echo $Var_alamat;

$db->editBiodata
 (
	$Var_id,
	"$Var_project",
	"$Var_client",
	"$Var_lead",
	"$Var_start",
	"$Var_end",
	"$Var_progres"
 );
 

?>