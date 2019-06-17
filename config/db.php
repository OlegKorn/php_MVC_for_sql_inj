<?php

  function db() {
    
    $dblocation = "localhost";
    $dbname = "LOCAL.SHOP";
    $dbuser = "root";
    $dbpasswd = "";
  
    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    mysqli_set_charset($db, 'utf8');

    if($db->connect_errno) {
      die("Ошибка доступа к MySQL");
    }

  }

