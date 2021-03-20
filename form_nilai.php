<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
.container{
  width:100%;
  margin-top : 40px;  
}
</style>
<body> 
 
<div class="container">
  <h2>Sistem Penilaian</h2>
  <div class="card">
    <div class="card-body">
        <h3 align=center>Form Nilai Siswa</h3>
        <form form action="nilai_siswa.php" method="post" style="margin:20px;">
          <div class="form-row">
              <div class="col-md-6">NAMA
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap">
              </div>
              <div class="col-md-6">NIM
                <input type="number" class="form-control" placeholder="" name="nim">
              </div>
              <div class="col-md-6">Mata Kuliah
                <select name="matkul" id="" class="form-control">
                          <option value="DDP">Dasar-Dasar Pemrograman</option>
                          <option value="BDI">Basis Data I</option>
                          <option value="WEB1">Pemrograman Web1</option>
                </select>
              </div>
              <div class="col-md-2">Nilai UTS
                <input type="number" class="form-control" placeholder="" name="nilai_uts">
              </div>
              <div class="col-md-2">Nilai UAS
                <input type="number" class="form-control" placeholder="" name="nilai_uas">
              </div>
              <div class="col-md-2">Nilai Tugas
                <input type="number" class="form-control" placeholder="" name="nilai_tugas">
              </div> 
              <button type="submit" class="btn btn-primary" value="simpan" name="proses" style="margin:10px"> Submit</button>
          </div>
        </form>
    </div> <!-- penutup card body -->
  </div> <!-- penutup card -->
</div>



</body>
</html>
