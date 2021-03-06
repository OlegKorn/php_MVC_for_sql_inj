<?php

error_reporting(E_ALL);

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';



function indexAction($smarty) {

  $catId = isset($_GET['id']) ? $_GET['id'] : null;
  if (!$catId) exit();

  $rsProducts = true;
  $rsChildCats = true;

  $rsCategory = getCatById($catId);

  //if ($rsCategory['parent_id'] == 0) {
  $rsChildCats = getChildrenForCat($catId);
  //} 
  //else {
  $rsProducts = getProductsByCat($catId)[0];
  $sql = getProductsByCat($catId)[1];
  echo $sql;
  //}

  $rsCategories = getAllMainCatsWithChildren();

  $smarty->assign('pageTitle', 'Товары категории' . $rsCategory['name']);

  $smarty->assign('rsCategory', $rsCategory);
  $smarty->assign('rsProducts', $rsProducts);
  $smarty->assign('rsChildCats', $rsChildCats);

  $smarty->assign('rsCategories', $rsCategories);

  loadTemplate($smarty, 'header');
  loadTemplate($smarty, 'category');

}

?>