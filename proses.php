<?php

include "app/class.php";
date_default_timezone_set("Asia/Jakarta");

if(isset($_POST['absen'])){
    $rombel = $_POST['rombel'];
    $nama = $_POST['nama'];
    $mata_pelajaran = $_POST['mapel'];
    $keterangan = $_POST['keterangan'];
    $tanggal = $_POST['tanggal'];
    $jam = date("H:i:s");

    $absen = new AbsenSiswa("$rombel", "$nama", "$mata_pelajaran", "$keterangan", "$tanggal", "$jam");
    $absen->inputAbsen();
}
?>