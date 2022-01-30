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
    <div class="container pt-5">
      <div class="card ">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6 d-none d-md-block gambar">
                <img src="assets/img/wikrama.jpg" alt="">
              </div>
              <div class="col-lg-6 col-sm-12">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-2">ABSENSI HARIAN</h1>
                </div>
                <form action="proses.php" method="post" class="mt-3">
                    <div class="form-group">
                      <label for="">Pilih Rombel</label>
                    <select name="rombel" id="rombel" class="form-control" required>
                      <option value="">Pilih...</option>
                      <option value="PPLG X-1">PPLG X-1</option>
                      <option value="PPLG X-2">PPLG X-2</option>
                    </select>

                    <label for="nama" class="mt-2">Nama Siswa</label>
                    <input type="text" placeholder="Nama Siswa" name="nama" id="nama" class="form-control" required>

                    <label for="mapel" class="mt-2">Mata Pelajaran</label>
                    <select name="mapel" id="mapel" class="form-control" required>
                      <option value="">Pilih...</option>
                      <option value="Pemrograman Web">Pemrograman Web</option>
                      <option value="Matematika">Matematika</option>
                      <option value="IPA">IPA</option>
                    </select>

                    <label for="keterangan" class="mt-2">Keterangan</label>
                    <select name="keterangan" id="keterangan" class="form-control" required>
                      <option value="">Pilih...</option>
                      <option value="Hadir">Hadir</option>
                      <option value="Sakit">Sakit</option>
                      <option value="Izin">Izin</option>
                    </select>

                    <label for="tanggal" class="mt-2">Tanggal</label required>
                    <input type="date" name="tanggal" id="tanggal" class="form-control">

                    <input type="submit" value="Kirim" name="absen" id="absen" class="btn btn-success mt-3">
                    <input type="reset" value="Kosongkan Formulir" name="" id="" class="btn btn-warning mt-3">
                    </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
    <script src="assets/js/bootrsap.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


<?php 
session_start(); 
if(isset($_SESSION['status'])){?>
  <script type="text/javascript">
    swal(
    'Halo <?php echo $_SESSION['nama']; ?>',
    'Terimakasih Sudah Absen Hari Ini',
    'success'
  )
  </script>
<?php } 
session_unset();
?>

  </body>
</html>