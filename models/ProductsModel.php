<?php 



function getLastProducts($limit=null) {

	$dblocation = "localhost";
    $dbuser = "root";
    $dbname = "smarty";
    $dbpasswd = "";

    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    $db->set_charset("utf8"); 

    $sql = "SELECT * FROM products ORDER BY id DESC";

    if ($limit) {
    	$sql .= " LIMIT $limit";
    }

    $rs = mysqli_query($db, $sql) or trigger_error(mysqli_error($rs) . " in " . $sql);

    //
    $db->close();
    //

    return array(createSmartyRsArray($rs), $sql);
}



function getProductsByCat($itemId) {
	
	$itemId = intval($itemId);

	$dblocation = "localhost";
    $dbuser = "root";
    $dbname = "smarty";
    $dbpasswd = "";

    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);
    $db->set_charset("utf8"); 

    $sql = "SELECT * FROM products WHERE category_id = $itemId";

    $rs = mysqli_query($db, $sql) or trigger_error(mysqli_error($rs) . " in " . $sql);

    //
    $db->close();
    //
    
    return array(createSmartyRsArray($rs), $sql);
}



function getProductById($itemId) {
    
    $itemId = intval($itemId);

    $dblocation = "localhost";
    $dbuser = "root";
    $dbname = "smarty";
    $dbpasswd = ""; 

    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    $db->set_charset("utf8"); 

    $sql = "SELECT * FROM products WHERE id = $itemId";

    $rs = mysqli_query($db, $sql) or trigger_error(mysqli_error($rs) . " in " . $sql);

    //
    $db->close();
    //
    return array(mysqli_fetch_assoc($rs), $sql);
}



function getProductsFromArray($itemIds) {
    
    $strIds = implode($itemIds, ', ');
    $dblocation = "localhost";
    $dbuser = "root";
    $dbname = "smarty";
    $dbpasswd = "";

    $db = new mysqli($dblocation, $dbuser, $dbpasswd, $dbname);

    $db->set_charset("utf8"); 

    $sql = "SELECT * FROM products WHERE id in ($strIds)";

    $rs = mysqli_query($db, $sql) or trigger_error(mysqli_error($rs) . " in " . $sql);

    //
    $db->close();
    //
    return createSmartyRsArray($rs);
}
