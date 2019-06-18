<?php 

function getLastProducts($limit=null) {

	$dblocation = "localhost";
    $dbname = "LOCAL.SHOP";
    $dbuser = "root";
    $dbpasswd = "oleg1811";
    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    $sql = "SELECT * FROM products ORDER BY id DESC";

    if ($limit) {
    	$sql .= " LIMIT {$limit}";
    }

    $rs = mysqli_query($db, $sql);

    return createSmartyRsArray($rs);
}

?>
