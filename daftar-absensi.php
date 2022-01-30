<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Aplikasi OOP</title>
  </head>
  <body class="bg-primary">

    <div class="container">
        <div class="card daftar-absen mt-2">
            <div class="table-responsive border">
            <table class="table  table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Rombel</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                </tr>
                </thead>
                <?php
                include "app/class.php";
                $absen = new AbsenSiswa();
                $absen = $absen->GetAbsen();

                $no = 1;
                foreach($absen as $data){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $data['rombel']?></td>
                        <td><?php echo $data['nama']?></td>
                        <td><?php echo $data['mata_pelajaran']?></td>
                        <td><?php echo $data['keterangan']?></td>
                        <td><?php echo $data['tanggal']?></td>
                        <td><?php echo $data['jam']?></td>
                    </tr>
                </tbody>

                <?php } ?>
            </table>
            </div>
        </div>
    </div>
    
    <script src="assets/js/bootrsap.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  </body>
</html>