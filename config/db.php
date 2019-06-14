<?php

  $dblocation = "localhost";
  $dbname = "LOCAL.SHOP";
  $dbuser = "root";
  $dbpasswd = " ";

  global $db;
  //connect to DB
  $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

  mysqli_set_charset($db, 'utf8');

  if($db->connect_errno) {
  	die("Ошибка доступа к MySQL");
  }
  
  if(!mysqli_select_db($db, $dbname)) {
  	echo "Ошибка доступа к базе данных: ($dbname)";
  	exit();
  }

