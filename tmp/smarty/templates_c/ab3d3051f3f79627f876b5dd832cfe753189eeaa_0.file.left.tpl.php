<?php
/* Smarty version 3.1.33, created on 2020-08-17 10:26:27
  from 'G:\XAMPP\htdocs\smar\views\default\left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f3a3f33b1d4d5_67688563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab3d3051f3f79627f876b5dd832cfe753189eeaa' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\smar\\views\\default\\left.tpl',
      1 => 1597651836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3a3f33b1d4d5_67688563 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!--LEFT TPL-->
  <!--LEFT TPL-->
  <!--LEFT TPL-->
  <section>
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div id="left" class="col-12 text-center">
            <a class="styled" href="site.local/index.php">Home</a>
            
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

            <strong><a class="styled" href="#">Регистрация</a></strong>
            <br/>
              <a href="/cart/" title="Перейти в корзину"><a class="styled" href="/cart/">В корзине </a>
              <span id="cartCntItems">
              <?php ob_start();
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 0) {?> <?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
 <?php } else { ?> пусто <?php }?>
              </span></p>
          </div>
        </div>
        <!--END LEFT TPL-->
        <!--END LEFT TPL-->
        <!--END LEFT TPL--><?php }
}
