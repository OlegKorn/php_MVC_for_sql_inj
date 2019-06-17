<?php


	include_once '../models/CategoriesModel.php';

	function testAction() {
	  echo "IndexController.php > testAction";
	}

	function indexAction($smarty) {
	    
	    $rsCategories = getAllMainCatsWithChildren();
	    //d($rsCategories);

		$smarty->assign('pageTitle', 'Главная страница сайта');
		$smarty->assign('rsCategories', $rsCategories);

		loadTemplate($smarty, 'header');
		loadTemplate($smarty, 'left');
		loadTemplate($smarty, 'index');
	}

?>