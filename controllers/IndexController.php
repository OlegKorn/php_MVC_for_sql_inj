<?php


include_once '../models/CategoriesModel.php';

function testAction() {
  echo "IndexController.php > testAction";
}

function indexAction($smarty) {
    
    $rsCategories = getAllMainCatsWithParents();

	$smarty->assign('pageTitle', 'Главная страница сайта');

	loadTemplate($smarty, 'header');
	loadTemplate($smarty, 'left');
	loadTemplate($smarty, 'index');
}

function getAllMainCatsWithChildren(){
  global $sql, $db, $rs;

  $sql = "SELECT * FROM categories WHERE parent_id = 0";
  $rs = $db->query($sql);
  while ($row = $rs->fetch_assoc()) {
    echo "id =" . $row['id'] . "<br />";
  }
}
?>