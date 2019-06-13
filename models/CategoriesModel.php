<?php


  include_once '../config/db.php';

  function getAllMainCatsWithParents() {    

    global $sql, $db, $rs;

	$sql = "SELECT * FROM categories WHERE parent_id = 0";
	$rs = $db->query($sql);
	
	while ($row = $rs->fetch_assoc()) {
	  echo "id =" . $row['id'] . "<br />";
    }
  }
