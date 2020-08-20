<?php
/* Smarty version 3.1.33, created on 2020-08-18 01:58:01
  from 'G:\XAMPP\htdocs\smar\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f3b1989b45b75_52279784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '707c5d2bd1b1bcde321b9d8de4a4f048c54f047f' => 
    array (
      0 => 'G:\\XAMPP\\htdocs\\smar\\views\\default\\index.tpl',
      1 => 1597708679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3b1989b45b75_52279784 (Smarty_Internal_Template $_smarty_tpl) {
?>       <!--INDEX TPL-->
        <!--INDEX TPL-->
        <!--INDEX TPL-->
        <div class="col-md-9 col-sm-12">
          <div id="center" class="col-12 text-center">
            <h1 class="text-center">my shop</h1>
            <div class="row text-center">
           
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            
              <div class="col-md-3 col-sm-12 item">
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
              
            </div>
          </div>
        </div>
      </div>
    </section>


  </body>
</html>
<!--END INDEX TPL-->
<!--END INDEX TPL-->
<!--END INDEX TPL--><?php }
}
