<?php
/* Smarty version 3.1.33, created on 2019-06-19 14:06:55
  from '/opt/lampp/htdocs/site.local/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0a255f78a992_27131638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71461cdb359137b3aea90ffdef1ad67f55670d6a' => 
    array (
      0 => '/opt/lampp/htdocs/site.local/views/default/header.tpl',
      1 => 1560945858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:left.tpl' => 1,
  ),
),false)) {
function content_5d0a255f78a992_27131638 (Smarty_Internal_Template $_smarty_tpl) {
?><!--HEDER TPL-->
<!--HEDER TPL-->
<!--HEDER TPL-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/reset.css" type="text/css">

    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
  </head>
  
  <body>

    <?php $_smarty_tpl->_subTemplateRender('file:left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--END HEDER TPL-->
    <!--END HEDER TPL-->
    <!--END HEDER TPL--><?php }
}
