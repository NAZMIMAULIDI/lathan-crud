<?php
$server = "localhost";
$user = "root";
$password = "";
$nm_db = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nm_db);

if (!$db) {
    die ("gagal terhubung ke database: ". mysqli_connect_error());
}
