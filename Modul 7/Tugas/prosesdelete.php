<?php
    $nim = $_POST ['nim'];
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn,"kampus");
    $sql="DELETE FROM mahasiswa WHERE nim = '$nim'";
    if ($conn->query($sql)===TRUE){
        echo "Data telah berhasil dihapus";
    }else{
        echo "Data tidak ditemukan".mysqli_error($conn);
    }
?>