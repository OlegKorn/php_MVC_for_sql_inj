<?php
/* Smarty version 3.1.33, created on 2019-06-22 12:34:33
  from '/opt/lampp/htdocs/site.local/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0e04396f21f6_34989776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71461cdb359137b3aea90ffdef1ad67f55670d6a' => 
    array (
      0 => '/opt/lampp/htdocs/site.local/views/default/header.tpl',
      1 => 1561199672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:left.tpl' => 1,
  ),
),false)) {
function content_5d0e04396f21f6_34989776 (Smarty_Internal_Template $_smarty_tpl) {
?><!--HEADER TPL-->
<!--HEADER TPL-->
<!--HEADER TPL-->
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
    <link rel="stylesheet" href="reset.css" type="text/css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/main.js"><?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    
    <?php $_smarty_tpl->_subTemplateRender("file:left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>
  
  <body>
  <!--END HEADER TPL-->
  <!--END HEADER TPL-->
  <!--END HEADER TPL--><?php }
}
