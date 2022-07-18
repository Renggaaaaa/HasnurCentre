<?php

//membuat class databse
class Database
{
    // properti
    private $dbHost = "localhost";  //alamat server local xampp
    private $dbUser = "root";       //username xampp
    private $dbPass = "";           //password xampp default adalah kosong
    private $dbName = "hasnur";    //nama database di phpmyadmin

    // method koneksi MySQL
    function connectMySQL()
    {
        return mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
    }

    // method tampil data    
    function tampilBiodata()
    {
        $con = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($con, "SELECT * FROM biodata ORDER BY id");
        while ($row = mysqli_fetch_array($query))
          $data[] = $row;
        return $data;
    }

    function tambahBiodata($project, $client, $lead, $start, $end, $progres)
    {
        $con = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = mysqli_query($con, "INSERT INTO biodata (project, client, lead, start, end , progres) VALUES ('$project', '$client', '$lead', '$start', '$end', '$progres')");
    }

    function getBiodata($id)
    {
        $conn = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = "SELECT * FROM hasnur WHERE id='$id'";
        return mysqli_query($conn, $query);
    }

     function editBiodata ($Var_id,$a,$b,$c,$d,$e,$f){
        
        $con = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass,$this->dbName);
        $q4= "Update biodata set 
                    project        ='$a',
                    client  ='$b',
                    lead  ='$c',
                    start      ='$d',
                    end      ='$e',
                    progres     ='$f'
             where id='$Var_id'" ;

        $query = mysqli_query($con,$q4);
        header("location:tampilkan.php");
    }

    function process_login($username, $password)
    {
        $conn = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['status'] = 'masuk';
            header("Location: tampilkan.php");
        } else
            header("Location: login.php?pesan=gagal");
    }

    function tampilkanPencarian($value) {
        $conn = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        $query = " SELECT * FROM biodata
            WHERE  nama
            LIKE '%$value%'";
        $result = mysqli_query($conn, $query);

        $numOfRows = mysqli_num_rows($result);
        if ($numOfRows > 0)
            while ($row = mysqli_fetch_array($result))
                $data[] = $row;
        else
            $data = $this->tampilBiodata();
        
        return $data;
    }
    function hapusBiodata ($Var_id){
        
        $con = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass,$this->dbName);
        $q5= "delete from biodata where id='$Var_id'" ;

        $query = mysqli_query($con,$q5); 
        header("location:tampilkan.php");
    }
  
}