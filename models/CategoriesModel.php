<?php

  $dblocation = "localhost";
  $dbname = "LOCAL.SHOP";
  $dbuser = "root";
  $dbpasswd = "";

  $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

  /**
  *Get main categories linked to children ones
  *
  */

  function getChildrenForCat($catId) {

  	$dblocation = "localhost";
    $dbname = "LOCAL.SHOP";
    $dbuser = "root";
    $dbpasswd = "";

    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    $sql = "SELECT * FROM categories WHERE parent_id = {$catId}";

    $rs = mysqli_query($db, $sql); 

    return createSmartyRsArray($rs);  
  }



  function getAllMainCatsWithChildren() {    

  	//to fix a bug  Warning: mysqli_query() expects at least 2 parameters, 1 given in /opt/lampp/htdocs/site.local/models/CategoriesModel.php on line 15
  	//insert lines 7:12 + gave $bd param to line 16

  	$dblocation = "localhost";
    $dbname = "LOCAL.SHOP";
    $dbuser = "root";
    $dbpasswd = "";

    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

  	$sql = 'SELECT * FROM categories WHERE parent_id=0';

    $rs = mysqli_query($db, $sql);
    $smartyRs = array();

    while($row = mysqli_fetch_assoc($rs)) {

      $rsChildren = getChildrenForCat($row['id']);

      if($rsChildren) {
      	$row['children'] = $rsChildren;
      }
      	
      $smartyRs[] = $row;
    } 

    return $smartyRs;

  }
