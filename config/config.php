<?php

  define('PathPrefix', '../controllers/');
  define('PathPostfix', 'Controller.php');

  $template = 'default';
  $url = 'https://a.wattpad.com/useravatar/dear_agatha_paula.128.185592.jpg';

  define('TemplatePrefix', "../views/$template/");
  define('TemplatePostfix', ".tpl");

  define('TemplateWebPath', "/templates/$template/");

  require('../library/Smarty/libs/Smarty.class.php');
  $smarty = new Smarty();

  $smarty->setTemplateDir(TemplatePrefix);
  $smarty->setCompileDir('../tmp/smarty/templates_c');
  $smarty->setCacheDir('../tmp/smarty/cache');
  $smarty->setConfigDir('../library/Smarty/configs');

  $smarty->assign('templateWebPath', TemplateWebPath);
  $smarty->assign('imgp', 'https://bankoboev.ru/storage/avatar/bankoboev.ru-782.jpg');
  $smarty->assign('imgH', '150');
  $smarty->assign('imgW', '200');
