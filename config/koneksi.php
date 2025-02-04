<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_parkiran_yasa"
);

//cek koneksi
if(!$conn){
    die("connection is fail" . mysqli_connect_error());
}