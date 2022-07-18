<?php
include 'header.php';
include 'koneksi.php';

$id = $_GET["id"];

$db = new Database();
$biodata = $db->getBiodata($id);

while ($b = mysqli_fetch_array($biodata)) {
?>

<form method="POST" action="editBiodata1.php">
    <table cellpading='0' cellspacing='0' border='0' class='table table-striped'>
        <tr>
            <td>Id</td>
            <td><input type="text" name="id" value="<?php echo $id ?>"></td>
        </tr>
        <tr>
            <td>Project Name</td>
            <td><input type="text" name="project" value="<?php echo $b['project'] ?>"></td>
        </tr>
        <tr>
            <td>Client</td>
            <td><input type="text" name="client" value="<?php echo $b['client'] ?>"></td>
        </tr>
        <tr>
            <td>Project Leader</td>
            <td><input type="text" name="lead" value="<?php echo $b['lead'] ?>"></td>
        </tr>
        <tr>
            <td>Start Date</td>
            <td><input type="text" name="start" value="<?php echo $b['start'] ?>"></td>
        </tr>
        <tr>
            <td>End Date</td>
            <td><input type="text" name="end" value="<?php echo $b['end'] ?>"></td>
        </tr>
        <tr>
            <td>Progres</td>
            <td><input type="text" name="progres" value="<?php echo $b['progres'] ?>"></td>
        </tr>
     <!--   <tr>
            <td>Alamat</td>
            <td><textarea type="text" name="alamat" rows="5" cols="80"><?php echo $b['alamat'] ?></textarea></td>
        </tr>-->
       
    </table>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

<?php } ?>