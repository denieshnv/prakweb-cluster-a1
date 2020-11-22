<!-- Menghitung panjang nama -->
<!-- Menghitung harga nama -->
<!-- Font warna merah -->

<?php

function tampilnama($nama,$warna="red"){
   $panjang = strlen($nama);
   if($panjang >0 && $panjang <=10){
        $harga = 300;
   }if($panjang >10 && $panjang <=20){
        $harga = 500;
   }if($panjang > 20){
        $harga = 700;
   }

   $hargatotal = $harga*$panjang;
   echo '<font color="'.$warna.'">' .$nama ." Harga total Rp = " .$hargatotal .",00";
   echo "<br>";
}

tampilnama("Deniesh Nathanael");
tampilnama("Deniesh Nathanael","blue");
?>