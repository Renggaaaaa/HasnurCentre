<?php
//memanggil file header untuk bagian atas halaman web
include 'header.php';

// memanggil file koneksi
include 'koneksi.php'          ;
 
// instance objek db
$db = new database();

// koneksi ke MySQL via method
$db->connectMySQL();

// buat array data biodata dari method tampilBiodata()
$arraybiodata = $db->tampilBiodata();  // hasil adalah $data
//$arraybiodata = $data;
?>

<!-- ini koding html -->
<!-- Membuat tombol "tambah data" -->
<br> <a href='tambah.php'>
<button type='submit' class='btn btn-primary'>TAMBAH DATA</button></a>
<br>
<br>

<!-- membuat tabel dan field -->
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered'>
      <tr><th>No</th>
          <th>Project Name</th>
           <th>Client</th>
           <th>Project Leader</th>
            <th>Start Date</th>
             <th>End Date</th>
           <th>Progres</th>
           <th>Aksi</th>
       </tr>

<!-- batas membuat field -->

<?php
$no = 1;
foreach ($arraybiodata as $dataku) {
?>

<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $dataku['project']; ?></td>
    <td><?php echo $dataku['client']; ?></td>
    <td><?php echo $dataku['lead']; ?></td>
    <td><?php echo $dataku['start']; ?></td>
    <td><?php echo $dataku['end']; ?></td>
    <td><?php echo $dataku['progres']; ?></td> 
    <td>
        <a class='btn btn-info btn-sm' href="edit1.php?id=<?php echo $dataku['id']; ?>">Ubah</a> 
        <a class='btn btn-danger btn-sm' href="hapus.php?id=<?php echo $dataku['id']; ?>">Hapus</a></td>  
</tr>
 
 <?php   
}
?>
</table>


<?php
//memanggil file footer fungsi bagian bawah web
include 'footer.php';

?>






