<?php
        $proses = $_POST['proses'];
        $nama_siswa = $_POST['nama_lengkap'];
        $nim = $_POST['nim'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $total = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
        $nilai_akhir = number_format($total, 2);
        

        function nilai($nilai_akhir){
                if ($nilai_akhir > 55) {
                echo 'Lulus';
                }else {
                echo 'Tidak Lulus';
                }
        }

        function grade_nilai($nilai_akhir){
                if ($nilai_akhir >= 85 && $nilai_akhir <= 100){
                        echo 'A';
                }elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84){
                        echo'B';
                }elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69){
                        echo'C';
                }elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55){
                        echo'D';
                }elseif ($nilai_akhir <= 35 && $nilai_akhir <= 35){
                        echo'E';
                }else{
                        echo'I';
                }
        }

        function predikat_nilai($nilai_akhir){
                switch(true){
                        case ($nilai_akhir >= 85 && $nilai_akhir <= 100):
                                echo 'Sangat memuaskan';
                                break;
                        case ($nilai_akhir >= 70 && $nilai_akhir <= 84):
                                echo 'Memuaskan'; 
                                break;
                        case ($nilai_akhir >= 56 && $nilai_akhir <= 69):
                                echo 'Cukup';
                                break;
                        case ($nilai_akhir >= 36 && $nilai_akhir <= 55):
                                echo 'Kurang';
                                break;
                        case ($nilai_akhir <= 35 && $nilai_akhir <= 35):
                                echo 'Sangat kurang';
                                break;    
                        default:
                                echo 'Predikat tidak diketahui';                                   
                }
        }
?>        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="container">
  <h2>Hasil Sistem Penilaian</h2>
  
    <table class="table table-bordered">
    <tbody>
      <tr>
        <td>Nama Siswa</td>
        <td><?php echo $nama_siswa?></td>
      </tr>
      <tr>
        <td>NIM</td>
        <td><?php echo $nim?></td>
      </tr> 
      <tr>
        <td>Mata Kuliah</td>
        <td><?php echo $mata_kuliah?></td>
      </tr>
      <tr>
        <td>Nilai UTS</td>
        <td><?php echo $nilai_uts?></td>
      </tr>
      <tr>
        <td>Nilai UAS</td>
        <td><?php echo $nilai_uas?></td>
      </tr> 
      <tr>
        <td>Nilai Tugas</td>
        <td><?php echo $nilai_tugas?></td>
      </tr> 
      <tr>
        <td>Nilai Keseluruhan</td>
        <td><?php echo $nilai_akhir?></td>
      </tr> 
      <tr>
        <td>Siswa Dinyatakan</td>
        <td><?php echo nilai($nilai_akhir)?></td>
      </tr> 
      <tr>
        <td>Grade Nilai</td>
        <td><?php echo grade_nilai($nilai_akhir)?></td>
      </tr> 
      <tr>
        <td>Predikat Nilai</td>
        <td><?php echo predikat_nilai($nilai_akhir)?></td>
      </tr>    
    </tbody>
  </table>
    
</div>
      

    
