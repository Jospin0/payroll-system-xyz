<?php 
session_start();
if(!isset($_SESSION['karyawan'])){
    echo "<script>
            alert('Anda belum login, silahkan login terlebih dahulu')
          </script>";
    header('refresh:0; ../../index.php');
    return false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    hai employee
</body>

</html>