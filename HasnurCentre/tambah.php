<?php 
	//echo " <h1> Siap untuk menambah data !!! </h1>"  ;
include 'header.php';
?>

<!-- Form Halaman tambah -->
<form method=POST action='tambahBiodata.php'>
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
<tr>
	<td>Project Name</td>
	<td><input type=text name='project'></td>
</tr>
<tr>
	<td>Client</td>
	<td><input type=text name='client'></td>
</tr>
<tr>
	<td>Project Leader</td>
	<td><input type=text name='lead' ></td>
</tr>
<tr>
	<td>Start Date</td>
	<td><textarea type=text name='start'></textarea></td>
</tr>
<tr>
	<td>End Date</td>
	<td><input type=text name='end'></td>
</tr>
</tr>
<tr>
	<td>Progres</td>
	<td><input type=text name='progres'></td>
</tr>
<tr>
	<td></td>
	<td><button type='submit' class='btn btn-primary'>SIMPAN</button></td>
</tr>
</table>
</form>
