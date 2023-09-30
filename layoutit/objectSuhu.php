<?php
    require 'tugas5.php';
    $s1 = new konversiSuhu("C", 20 , "F");
    $s2 = new konversiSuhu("C", 50 , "F");

    $s3 = new konversiSuhu("F", 90 , "C");
    $s4 = new konversiSuhu("F", 30 , "C");

    $s5 = new konversiSuhu("C", 40 , "R");
    $s6 = new konversiSuhu("C", 15 , "R");

    $s7 = new konversiSuhu("R", 60 , "C");
    $s8 = new konversiSuhu("R", 30 , "C");

    echo '<table border ="1" cellspacing="1" cellpadding="5">';
    echo '<tr>';
    echo '<td> Suhu Awal </td>';
    echo '<td> Besaran Suhu </td>';
    echo '<td> Suhu Tujuan </td>';
    echo '<td> Hasil Konversi Suhu </td>';
    echo '</tr>';
    $s1 -> cetak();
    $s2 -> cetak();
    $s3 -> cetak();
    $s4 -> cetak();
    $s5 -> cetak();
    $s6 -> cetak();
    $s7 -> cetak();
    $s8 -> cetak();
    echo '</table>'
?>