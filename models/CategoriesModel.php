<?php

  function getAllMainCatsWithChildren() {    

  	//to fix a bug  Warning: mysqli_query() expects at least 2 parameters, 1 given in /opt/lampp/htdocs/site.local/models/CategoriesModel.php on line 15
  	//insert lines 7:12 + gave $bd param to line 16

  	$dblocation = "localhost";
    $dbname = "LOCAL.SHOP";
    $dbuser = "root";
    $dbpasswd = "oleg1811";
  
    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    $sql = 'SELECT * FROM categories WHERE parent_id=0';

    $rs = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($rs)) {
      echo 'id = ' . $row['id'] . '<br/>';
    } 

  }
