<?php
/* Smarty version 3.1.33, created on 2019-06-22 13:46:27
  from '/opt/lampp/htdocs/site.local/views/default/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0e15138fbbe3_62002085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1d2a222d642df819391e294e3464f5231b3da' => 
    array (
      0 => '/opt/lampp/htdocs/site.local/views/default/product.tpl',
      1 => 1561203985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0e15138fbbe3_62002085 (Smarty_Internal_Template $_smarty_tpl) {
?><!--PRODUCT TPL-->
<!--PRODUCT TPL-->
<!--PRODUCT TPL-->


    <div class="col-md-8 col-sm-12">
      <div id="center" class="col-12 text-center">
        <h2><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h2>
        <div class="row jumbotron">
	        <div class="col-md-12 col-sm-12">
            <img class="rounded" width="600" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
            <p>Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
</p>
            
            <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" class="cart-styled styled" alt="Удалить из корзины">Удалить из корзины</a>

            <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" class="cart-styled styled" alt="Добавить в корзину">Добавить в корзину</a>
            <p class="descr">Описание: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
          </div>
        </div>
      </div>
    </div>
    
    <style>
    .descr {
      margin-top: 1rem;
      font-weight: 900;
      color: #000;
      text-align: left;
    }
    .rounded {
      border-radius: 40px; 
    }
    .jumbotron {
      background-color: #DDDDDD;
    }
    </style>

  </body>
</html><?php }
}
