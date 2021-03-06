<?php

include_once '../models/ProductsModel.php';
include_once '../models/CategoriesModel.php';



function indexAction($smarty) {

	$itemId = isset($_GET['id']) ? $_GET['id'] : null;

	if(!$itemId) exit();

	$rsProduct = getProductById($itemId)[0];
    $sql = getProductById($itemId)[1];
    echo $sql;

	$rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('itemInCart', 0);
    if (in_array($itemId, $_SESSION['cart'])) {
   	  $smarty->assign('itemInCart', 1);
    }

	$smarty->assign('pageTitle', '');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProduct', $rsProduct);

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'product');
}


?>