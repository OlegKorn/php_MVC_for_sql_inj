<!--PRODUCT TPL-->
<!--PRODUCT TPL-->
<!--PRODUCT TPL-->


    <div class="col-md-8 col-sm-12">
      <div id="center" class="col-12 text-center">
        <h2>{$rsProduct['name']}</h2>
        <div class="row jumbotron">
	        <div class="col-md-12 col-sm-12">
            <img class="rounded" width="600" src="/images/products/{$rsProduct['image']}">
            <p>Стоимость: {$rsProduct['price']}</p>
            
            <a id="removeCart_{$rsProduct['id']}" href="#" onClick="removeFromCart({$rsProduct['id']}); return false;" class="cart-styled styled" alt="Удалить из корзины">Удалить из корзины</a>

            <a id="addCart_{$rsProduct['id']}" {if ! $itemInCart} class="cart-styled styled" {/if} href="#" onClick="addToCart({$rsProduct['id']}); return false;" {if $itemInCart} class="hideme cart-styled styled" {/if} class="cart-styled styled" alt="Добавить в корзину">Добавить в корзину</a>
            <p class="descr">Описание: {$rsProduct['description']}</p>
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
</html>