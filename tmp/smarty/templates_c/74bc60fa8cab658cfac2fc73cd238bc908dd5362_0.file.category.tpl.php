<?php
/* Smarty version 3.1.33, created on 2019-06-22 09:58:50
  from '/opt/lampp/htdocs/site.local/views/default/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0ddfba4301e5_29897959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74bc60fa8cab658cfac2fc73cd238bc908dd5362' => 
    array (
      0 => '/opt/lampp/htdocs/site.local/views/default/category.tpl',
      1 => 1561189153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0ddfba4301e5_29897959 (Smarty_Internal_Template $_smarty_tpl) {
?><!--CATEGORY TPL-->
<!--CATEGORY TPL-->
<!--CATEGORY TPL-->

        <div class="col-md-8 col-sm-12">
          <div id="center" class="col-12 text-center">
            <h2><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h2>
            <div class="row text-center">
      	    
       	      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>

                <div class="col-md-4 col-sm-12 one-edge-shadow">
                  <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                    <img class="img-thumbnail" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
                  </a>
                  <a class="styled" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                </div>                

              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsChildCats']->value, 'item', false, NULL, 'childCats', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
              <div class="col-md-12 col-sm-12">
                <h4><a class="styled" href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h4>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
      </div>
    </div>






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
> <?php echo '<script'; ?>
 src="main.js"><?php echo '</script'; ?>
>
  </body>
</html>

<!--END CATEGORY TPL-->
<!--END CATEGORY TPL-->
<!--END CATEGORY TPL--><?php }
}
