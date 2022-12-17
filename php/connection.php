<?php
$conn = new mysqli("localhost","root","",'db_movie');
if($conn->connect_error){
    die("Connection failed".$conn->connect_erro);
}
?>