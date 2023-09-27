<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ltihan array 3</title>
</head>
<body>
    <?php
    $m1 =['nim' =>'0111111', 'nama' => 'Andi', 'nilai' => 95];
    $m2 =['nim' =>'0111112', 'nama' => 'Adi', 'nilai' => 80];
    $m3 =['nim' =>'0111113', 'nama' => 'Aji', 'nilai' => 78];
    $m4 =['nim' =>'0111114', 'nama' => 'Ani', 'nilai' => 76];
    $m5 =['nim' =>'0111115', 'nama' => 'Ari', 'nilai' => 86];
    $m6 =['nim' =>'0111116', 'nama' => 'Budi', 'nilai' => 50];
    $m7 =['nim' =>'0111117', 'nama' => 'Dewi', 'nilai' => 20];
    $m8 =['nim' =>'0111118', 'nama' => 'Ardi', 'nilai' => 30];
    $m9 =['nim' =>'0111119', 'nama' => 'Elisa', 'nilai' => 70];
    $m10 =['nim' =>'01111110', 'nama' => 'Candra', 'nilai' => 65];

    $ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

    $nilaimhs = array_column ($mahasiswa,'nilai');
    $nilaiTertinggi = max ($nilaimhs);
    $nilaiTerendah = min ($nilaimhs);
    $jumlahMahasiswa = count($mahasiswa);
    $jumlahNilai = array_sum ($nilaimhs);
    $nilaiRatarata = $jumlahNilai / $jumlahMahasiswa;
    $aggregate = ['Nilai Tertinggi' => $nilaiTertinggi,
                'Nilai Terendah' => $nilaiTerendah,
                'Jumlah Mahasiswa' => $jumlahMahasiswa,
                'Jumlah Nilai Keseluruhan' => $jumlahNilai,
                'Nilai Rata-rata' => $nilaiRatarata];

    ?>
        <h3 align="center">Daftar Nilai Mahasiswa</h3>
        <table border = "1" cellpadding="10" cellspacing="2" width="100%">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $judul){ ?>
                            <th><?= $judul ?></th>
                   <?php }?>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;
                foreach ($mahasiswa as $mhs) {
                    $keterangan = $mhs ['nilai'] >=60 ? "Lulus" : "Gagal";
                    $grade = $mhs ['nilai'];

                    if ($grade >90){
                        $grade = 'A';
                    }else if($grade >= 80){
                        $grade ='B';
                    }else if ($grade >=70){
                        $grade='C'; 
                    }else if ($grade >=60){
                        $grade='D';
                    }else {
                        $grade = 'E';
                    }

                    $predikat = $mhs ['nilai'];
                    switch($grade){
                        case 'A':$predikat = 'Sangat Baik';break;
                        case 'B':$predikat = 'Baik'; break;
                        case 'C':$predikat = 'Cukup'; break;
                        case 'D':$predikat = 'Kurang'; break;
                        case 'E':$predikat = 'Kurang Sekali'; break;
                        default : $predikat ='';
                    }

                    ?>
                    <tr>
                        <td><?=$no++ ?></td>
                        <td><?=$mhs['nim']?></td>
                        <td><?=$mhs['nama']?></td>
                        <td><?=$mhs['nilai']?></td>
                        <td><?=$keterangan?></td>
                        <td><?=$grade?></td>
                        <td><?=$predikat?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                    <?php
                    foreach($aggregate as $aggre => $hasil){ ?>
                        <tr>
                            <td><?=$aggre?></td>
                            <td><?=$hasil?></td>
                        </tr>
                    <?php } ?>
            </tfoot>
        </table>
</body>
</html>