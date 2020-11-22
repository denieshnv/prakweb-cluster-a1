<?php
    $nama = $_POST ['nama'];
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn,"kampus");
    $hasil=mysqli_query($conn,"select * from mahasiswa where nama like '%$nama%'");
    $jumlah = mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan : $jumlah";
    echo "<br>";
    while($baris = mysqli_fetch_array($hasil)){
        echo "NIM : "; echo $baris[0];echo "<br>";
        echo "Nama : "; echo $baris[1];echo "<br>";
        echo "Alamat : ";
        echo $baris[2]; echo "<br>";
        echo "Jurusan : ";
        echo $baris[3];
    }

?>