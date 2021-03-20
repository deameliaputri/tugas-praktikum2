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
                        echo 'Grade A';
                }elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84){
                        echo'Grade B';
                }elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69){
                        echo'Grade C';
                }elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55){
                        echo'Grade D';
                }elseif ($nilai_akhir <= 35 && $nilai_akhir <= 35){
                        echo'Grade E';
                }else{
                        echo'Grade I';
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

            echo 'Proses : ' .$proses;
            echo '<br>Nama : '.$nama_siswa;
            echo '<br>NIM : '.$nim;
            echo '<br>Mata Kuliah : '.$mata_kuliah;
            echo '<br>Nilai UTS : '.$nilai_uts;
            echo '<br>Nilai UAS : '.$nilai_uas;
            echo '<br>Nilai Tugas/Praktikum  : '.$nilai_tugas; 
            echo '<br>Total : '. $nilai_akhir; 
            echo '<br> Siswa dinyatakan ';
            echo nilai($nilai_akhir).'<br>';
            echo grade_nilai($nilai_akhir).'<br>';
            echo predikat_nilai($nilai_akhir);
            

    ?>