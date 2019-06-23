<?php
/* Smarty version 3.1.33, created on 2019-06-23 09:44:32
  from '/opt/lampp/htdocs/site.local/views/default/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0f2de048f5b0_13889082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '600e68be6f5bebc6ef315811f372da1d1669b4dc' => 
    array (
      0 => '/opt/lampp/htdocs/site.local/views/default/cart.tpl',
      1 => 1561275870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0f2de048f5b0_13889082 (Smarty_Internal_Template $_smarty_tpl) {
?><!--PRODUCT TPL-->
<!--PRODUCT TPL-->
<!--PRODUCT TPL-->


    <div class="col-md-8 col-sm-12">
      <div id="center" class="col-12 text-center">
        <h1>Корзина</h1>
        <div class="row jumbotron">
	        <div class="col-md-12 col-sm-12">
            
            <?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
            <h2>В корзине пусто</h2>

            <?php } else { ?>

            <table class="table table-bordered">
              <thead class="thead">
                <tr>
                  <th scope="col">№</th>
                  <th scope="col">Наименование</th>
                  <th scope="col">Количество</th>
                  <th scope="col">Цена за ед.</th>
                  <th scope="col">Цена</th>
                  <th scope="col">Действие</th>
                </tr>
              </thead>
              <tbody>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                <tr>
                  <th scope="row"> <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
 </th>
                  <td><a class="styled" href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
                  <td><input name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"/></td>
                  <td><span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span></td>
                  <td><span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span></td>
                  <td>
                      <a class="styled" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onClick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Удалить из коризины">Удалить</a><br/>
                      <a class="styled hideme" id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return false;" title="Восстановить элемент">Восстановить элемент</a>
                  </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </table>
            <?php }?>

            


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
