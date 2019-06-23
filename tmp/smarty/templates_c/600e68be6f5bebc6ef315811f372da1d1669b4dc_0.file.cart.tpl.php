<?php
/* Smarty version 3.1.33, created on 2019-06-23 03:25:14
  from '/opt/lampp/htdocs/site.local/views/default/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0ed4fa2c03a2_99424929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '600e68be6f5bebc6ef315811f372da1d1669b4dc' => 
    array (
      0 => '/opt/lampp/htdocs/site.local/views/default/cart.tpl',
      1 => 1561253112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0ed4fa2c03a2_99424929 (Smarty_Internal_Template $_smarty_tpl) {
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

            <table class="table">
              <thead class="thead">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Имя</th>
                  <th scope="col">Фамилия</th>
                  <th scope="col">Username</th>
                  <th scope="col">Username</th>
                  <th scope="col">Username</th>
                  <th scope="col">Username</th>
                </tr>
              </thead>
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
