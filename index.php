<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<title>login</title>
</head>
<body>
<?php
if ($_POST["uname"] == "david" && $_POST["psw"] == "123"){
    echo "uspesne prihlasenie";
    }else{
        echo "neuspesne prihlasenie";
    }
?>
</body>
</html>  