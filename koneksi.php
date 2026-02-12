<?php
$koneksi = mysqli_connect("localhost", "root", "", "pr_ahmadmauludin");

if (!$koneksi) {
    die("Koneksi database gagal");
}
