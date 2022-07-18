<?php
include 'header.php';
?>

<form method="POST" action="tambahBiodata.php">
    <table cellpading='0' cellspacing='0' border='0' class='table table-striped'>
        <tr>
            <td>Project</td>
            <td><input type="text" name="project"></td>
        </tr>
        <tr>
            <td>Client</td>
            <td><input type="text" name="client"></td>
        </tr>
        <tr>
            <td>Peoject Leader</td>
            <td><input type="text" name="lead"></td>
        </tr>
        <tr>
            <td>Start Date</td>
            <td><input type="text" name="start"></td>
        </tr>
        <tr>
            <td>End Date</td>
            <td><input type="text" name="end"></td>
        </tr>
        <tr>
            <td>Progres</td>
            <td><input type="text" name="progres"></td>
        </tr>
       <!-- <tr>
            <td>Alamat</td>
            <td><textarea type="text" name="alamat" rows="5" cols="80"></textarea></td>
        </tr>-->
        
    </table>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>