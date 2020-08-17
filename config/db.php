<?php

  function db() {
    
    $dblocation = "localhost";
    $dbuser = "root";
    $dbname = "smarty";
    $dbpasswd = "";
  
    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    mysqli_set_charset($db, 'utf8');

    if($db->connect_errno) {
      die("Ошибка доступа к MySQL");
    }

  }

