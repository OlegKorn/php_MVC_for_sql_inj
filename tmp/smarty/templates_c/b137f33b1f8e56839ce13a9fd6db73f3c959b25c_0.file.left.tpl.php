<?php
/* Smarty version 3.1.33, created on 2019-06-17 16:55:28
  from '/opt/lampp/htdocs/site.local/views/default/left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d07a9e06c1ec8_10364799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b137f33b1f8e56839ce13a9fd6db73f3c959b25c' => 
    array (
      0 => '/opt/lampp/htdocs/site.local/views/default/left.tpl',
      1 => 1560783327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d07a9e06c1ec8_10364799 (Smarty_Internal_Template $_smarty_tpl) {
?><body>

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
                  <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                  </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <!--<li>
                  <a class="nav-link bold" href="#">Playboy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Brunette</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blond</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link bold" href="#">Others</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Short-haired</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Black</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blond</a>
                </li> -->

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
<?php }
}
