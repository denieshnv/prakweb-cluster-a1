<?php
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"kampus");
    $hasil = mysqli_query($conn, "select * from mahasiswa");
    $jumlah = mysqli_num_rows($hasil);
    echo "<center> List Mahasiswa</center>";
    echo "Jumlah Mahasiswa : $jumlah";
    echo "<br>";
    $a=1;
    while($baris = mysqli_fetch_array($hasil))
    {
        echo "<br>";
        echo $a;
        echo "<br>";
        echo "Nim : ";
        echo "$baris[0]";
        echo "<br>";
        echo "Nama : ";
        echo $baris[1];
        echo "<br>";
        echo "Alamat : ";
        echo $baris[2];
        echo "<br>";
        echo "Jurusan : ";
        echo $baris[3];
        $a++;
        echo "<br>";
    }
?>