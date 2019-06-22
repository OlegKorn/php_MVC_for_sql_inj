<?php
/* Smarty version 3.1.33, created on 2019-06-22 04:12:23
  from '/opt/lampp/htdocs/site.local/views/default/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0d8e873f9b10_19393883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1d2a222d642df819391e294e3464f5231b3da' => 
    array (
      0 => '/opt/lampp/htdocs/site.local/views/default/product.tpl',
      1 => 1561169541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0d8e873f9b10_19393883 (Smarty_Internal_Template $_smarty_tpl) {
?><!--PRODUCT TPL-->
<!--PRODUCT TPL-->
<!--PRODUCT TPL-->


    <div class="col-md-8 col-sm-12">
      <div id="center" class="col-12 text-center">
        <h2>Товар <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h2>
        <div class="row jumbotron">
	        <div class="col-md-12 col-sm-12">
            <img class="rounded" width="600" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
            <br/>
            <a class="styled" href="#" alt="Добавить в корзину">Добавить в корзину</a>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
