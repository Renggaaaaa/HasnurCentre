<?php 
 //echo " <h1><marquee> Data Siap di Edit </marquee></h1>"  ;
include 'header.php';

//menangkap data dan menentukan id yang akan di edit
$Var_id = $_GET['id']	;
//echo "Id yang dikirim adalah " .$Var_id    ;

//perintah koneksi ke database
$hub = mysqli_connect("localhost","root","","hasnur");

// melalukan query dengan syarat kondisi adalah id
$q4 = "select * from biodata where id='$Var_id'";

//perintah menjalankan query
$data = mysqli_query($hub,$q4);
	while($d = mysqli_fetch_array($data))
	{
//echo $d['nama'];

// sekarang data ada di $d 
?>


<!-- Form Halaman tambah -->
<form method=POST action='editBiodata1.php'>
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >

<tr>
	<td>Id</td>
	<td><input type=text name='id' 
	                     value="<?php echo $d['id']; ?>" 
	</td>
</tr>

<tr>
	<td>Project Name</td>
	<td><input type=text name='project'
				value="<?php echo $d['project']; ?>" >
	</td>
</tr>
<tr>
	<td>Client</td>
	<td><input type=text name='client'
					value="<?php echo $d['client']; ?>" >
	</td>
</tr>
<tr>
	<td>Project Leader</td>
	<td><input type=text name='lead' 
					value="<?php echo $d['lead']; ?>" >
	</td>
</tr>
<tr>
	<td>Start Date</td>
	<td><input type=text name='start'
				value="<?php echo $d['start']; ?>" >
	</td>
</tr>
<tr>
	<td>End Date</td>
	<td><input type=text name='end'
				value="<?php echo $d['end']; ?>" >
	</td>
</tr>
<tr>
	<td>Progres</td>
	<td><input type=text name='progres'
				value="<?php echo $d['progres']; ?>" >
	</td>
</tr>
<tr>
	<td></td>
	<td><button type='submit' class='btn btn-primary'>UPDATE DATA</button></td>
</tr>
</table>
</form>

<?php 
	}
?>
