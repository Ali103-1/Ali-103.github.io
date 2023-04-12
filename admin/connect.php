<?php
// هنا عملية اتصال مع قواعد البيانات تتضمن اسم قاعدة البيانات
    $dsn = 'mysql:host=localhost;dbname=elec';
    $user = 'root';
    $pass = '';
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
    try {
      $conn = new PDO($dsn, $user, $pass, $option);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $e)
    {
      echo 'Failed To Connect' . $e->getMessage();
    }

 ?>
