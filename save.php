<?php
$servername="locolhost";
$username="root";
$password="";
$dbname='notesapp'

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("FAILED:".$conn->connect_error);
}

echo $_POST['note']