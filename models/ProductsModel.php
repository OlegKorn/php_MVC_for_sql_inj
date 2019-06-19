<?php 



function getLastProducts($limit=null) {

	$dblocation = "localhost";
    $dbname = "LOCAL.SHOP";
    $dbuser = "root";
    $dbpasswd = "oleg1811";
    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    $db->set_charset("utf8"); 

    $sql = "SELECT * FROM products ORDER BY id DESC";

    if ($limit) {
    	$sql .= " LIMIT {$limit}";
    }

    $rs = mysqli_query($db, $sql);


    //
    $db->close();
    //

    return createSmartyRsArray($rs);
}




function getProductsByCat($itemId) {
	
	$itemId = intval($itemId);

	$dblocation = "localhost";
    $dbname = "LOCAL.SHOP";
    $dbuser = "root";
    $dbpasswd = "oleg1811"; 
    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);
    $db->set_charset("utf8"); 

    $sql = "SELECT * FROM products WHERE category_id = {'$itemId'}";

    $rs = mysqli_query($db, $sql);

    //
    $db->close();
    //
    
    return createSmartyRsArray($rs);
}




function getProductBiId($itemId) {
    
    $itemId = intval($itemId);

    $dblocation = "localhost";
    $dbname = "LOCAL.SHOP";
    $dbuser = "root";
    $dbpasswd = "oleg1811"; 
    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    $db->set_charset("utf8"); 

    $sql = "SELECT * FROM products WHERE id = {'$itemId'}";

    $rs = mysqli_query($db, $sql);


    //
    $db->close();
    //

    return mysqli_fetch_assoc($rs);
}
?>
