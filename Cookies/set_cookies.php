<?php
$cookie_name = "user";
$cookie_value = "Praktikum PABW";
setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie '".$cookie_name."' tidak diset!";
    }else{
        echo "Cookie '".$cookie_name."'sudah diset!<br>";
        echo "Nilainya adalah : ".$_COOKIE[$cookie_name];
    }

?>
</body>
</html>