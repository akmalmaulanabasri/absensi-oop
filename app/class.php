<?php

class AbsenSiswa  
{  
    private $host = "localhost"; // your host name  
    private $username = "root"; // your user name  
    private $password = ""; // your password  
    private $db = "absensi-oop"; // your database name
    public $conn;

    public  $rombel,
            $nama,
            $mata_pelajaran,
            $keterangan,
            $tanggal,
            $jam;

    public function __construct($rombel =0, $nama =0, $mata_pelajaran =0, $keterangan =0, $tanggal =0 , $jam =0){
        $this->rombel = $rombel;
        $this->nama = $nama;
        $this->mata_pelajaran = $mata_pelajaran;
        $this->keterangan = $keterangan;
        $this->tanggal = $tanggal;
        $this->jam = $jam;

        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if (!$conn) {
            die("Koneksi Gagal: " . mysqli_connect_error());
        }
        $this->conn = $conn;
    }

    public function inputAbsen(){
        $absen = $this->conn->query("INSERT into absen_harian(id, rombel, nama, mata_pelajaran, keterangan, tanggal, jam) values('', '$this->rombel', '$this->nama', '$this->mata_pelajaran', '$this->keterangan', '$this->tanggal', '$this->jam')");
        // $absen = true;
        if($absen){
            session_start();
            header("Location: index.php");
            $_SESSION['status'] = "sukses";
            $_SESSION['nama'] = $this->nama;
        }else{
            echo "Gagal" . $this->conn->error;
        }

    }

    public function GetAbsen(){
        $absen = $this->conn->query("SELECT * from absen_harian");
        return $absen;
    }

}
?>