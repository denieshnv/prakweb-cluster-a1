<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Data Mahasiswa</title>
</head>
<body>
    <h1>Simpan Data ke MySQLi</h1>
    <?php
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $jurusan = $_POST["jurusan"];
        $conn=mysqli_connect ("localhost","root","")
        or die ("koneksi gagal");
        mysqli_select_db($conn,"kampus");
        echo "NIM       : $nim <br>";
        echo "Nama      : $nama <br>";
        echo "Alamat    : $alamat <br>";
        echo "Jurusan   : $jurusan<br>";
        $sqlstr = "insert into mahasiswa(nim,nama,alamat,id_jurusan) values ('$nim','$nama','$alamat','$jurusan')";
        $hasil = mysqli_query($conn,$sqlstr);
        echo "Data berhasil disimpan";
    ?>
</body>
</html>