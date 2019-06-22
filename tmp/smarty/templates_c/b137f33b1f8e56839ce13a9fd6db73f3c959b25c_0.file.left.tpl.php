<?php
/* Smarty version 3.1.33, created on 2019-06-22 04:07:35
  from '/opt/lampp/htdocs/site.local/views/default/left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0d8d6703b3a3_33725200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b137f33b1f8e56839ce13a9fd6db73f3c959b25c' => 
    array (
      0 => '/opt/lampp/htdocs/site.local/views/default/left.tpl',
      1 => 1561169254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0d8d6703b3a3_33725200 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!--LEFT TPL-->
  <!--LEFT TPL-->
  <!--LEFT TPL-->
  <section>
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div id="left" class="col-12 text-center">
            <h3>Меню сайта</h3>
            
            <ul class="nav flex-column">
              
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

              <li>
                <a class="nav-link bold styled" href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
              </li>

              <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
                  <a class="styled" href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a> 
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php }?>

              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              <li>
                <a class="nav-link bold styled" href="site.local/index.php">Home</a>
              </li>

            </ul>

            <form>
              <strong>Авторизация</strong>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit">Submit</button>
            </form>

            <strong><a href="#">Регистрация</a></strong>
              <p class="cart-info"><a href="#">В корзине </a><span>пусто</span></p>
          </div>
        </div>
        <!--END LEFT TPL-->
        <!--END LEFT TPL-->
        <!--END LEFT TPL--><?php }
}
