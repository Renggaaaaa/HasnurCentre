<?php 

include 'koneksi.php';
$db = new database();

 //menangkap data dan menentukan id yang akan di edit
$Var_id = $_GET['id']   ;
//echo "Id yang dikirim adalah " .$Var_id    ;

$db->hapusBiodata($Var_id);

?>