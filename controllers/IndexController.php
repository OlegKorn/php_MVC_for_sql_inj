<?php


	include_once '../models/CategoriesModel.php';
	include_once '../models/ProductsModel.php';

	function testAction() {
	  echo "IndexController.php > testAction";
	}

	function indexAction($smarty) {
	    
	    $rsCategories = getAllMainCatsWithChildren();
	    $rsProducts = getLastProducts(16);

		$smarty->assign('pageTitle', 'Главная страница сайта');
		$smarty->assign('rsCategories', $rsCategories);

		loadTemplate($smarty, 'header');
		loadTemplate($smarty, 'left');
		loadTemplate($smarty, 'index');
	}

?>