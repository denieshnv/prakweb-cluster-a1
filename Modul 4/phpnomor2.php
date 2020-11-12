<?php
    $kata =
    [
        "avsada","peos","remos","lupin","harry","tesa",
        "ipasdj", "bondan","isyana", "gigihadid","romawi"
    ];
    sort($kata);

    $clength =count($kata);
    for($x = 0; $x < $clength; $x++) {
        echo $kata[$x];
        echo "<br>";
      }
?>