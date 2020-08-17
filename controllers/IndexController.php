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

		//d($rsProducts); //выводит как в видео 2.5.2 также!!!
		//Debug: 
			/*Array
			(
			    [0] => Array
			        (
			            [id] => 12
			            [category_id] => 4
			            [name] => iPhone 4S
			            [description] =>                                                 Поддержка международных сетей
			UMTS/HSDPA/HSUPA (850, 900, 1900, 2100 МГц); 
			GSM/EDGE (850, 900, 1800, 1900 МГц)
			CDMA EV-DO Rev. A (800, 1900 МГц)3
			802.11b/g/n Wi-Fi (802.11n только 2,4 ГГц)
			Беспроводная технология Bluetooth 4.0 */
		
		$smarty->assign('rsProducts', $rsProducts);

		loadTemplate($smarty, 'header');
		loadTemplate($smarty, 'index');
	}

?>