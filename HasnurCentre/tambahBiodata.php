<?php
include "koneksi.php";
$db = new Database();

$project = $_POST['project'];
$client = $_POST['client'];
$lead = $_POST['lead'];
$start = $_POST['start'];
$end = $_POST['end'];
$progres = $_POST['progres'];

$db->tambahBiodata($project, $client, $lead, $start, $end, $progres);
header("location:tampilkan.php");