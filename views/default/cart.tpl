<!--PRODUCT TPL-->
<!--PRODUCT TPL-->
<!--PRODUCT TPL-->


    <div class="col-md-8 col-sm-12">
      <div id="center" class="col-12 text-center">
        <h1>Корзина</h1>
        <div class="row jumbotron">
	        <div class="col-md-12 col-sm-12">
            
            {if !$rsProducts}
            <h2>В корзине пусто</h2>

            {else}

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

              {foreach $rsProducts as $item name=products}
                <tr>
                  <th scope="row"> {$smarty.foreach.products.iteration} </th>
                  <td><a class="styled" href="/product/{$item['id']}/">{$item['name']}</a></td>
                  <td><input name="itemCnt_{$item['id']}" type="text" value="1" onchange="conversionPrice({$item['id']});" id="itemCnt_{$item['id']}"/></td>
                  <td><span id="itemPrice_{$item['price']}" value="{$item['price']}">{$item['price']}</span></td>
                  <td><span id="itemRealPrice_{$item['id']}">{$item['price']}</span></td>
                  <td>
                      <a class="styled" id="removeCart_{$item['id']}" href="#" onClick="removeFromCart({$item['id']}); return false;" title="Удалить из коризины">Удалить</a><br/>
                      <a class="styled hideme" id="addCart_{$item['id']}" href="#" onClick="addToCart({$item['id']}); return false;" title="Восстановить элемент">Восстановить элемент</a>
                  </td>
                </tr>
                {/foreach}

            </table>
            {/if}

            


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