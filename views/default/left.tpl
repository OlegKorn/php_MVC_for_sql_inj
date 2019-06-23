  <!--LEFT TPL-->
  <!--LEFT TPL-->
  <!--LEFT TPL-->
  <section>
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div id="left" class="col-12 text-center">
            <a class="styled" href="site.local/index.php">Home</a>
            
            <ul class="nav flex-column">
              
              {foreach $rsCategories as $item}

              <li>
                <a class="nav-link bold styled" href="/?controller=category&id={$item['id']}">{$item['name']}</a>
              </li>

              {if isset($item['children'])}
                {foreach $item['children'] as $itemChild}
                  <a class="styled" href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a> 
                {/foreach}
              {/if}

              {/foreach}

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
              {if {$cartCntItems} > 0} {$cartCntItems} {else} пусто {/if}
              </span></p>
          </div>
        </div>
        <!--END LEFT TPL-->
        <!--END LEFT TPL-->
        <!--END LEFT TPL-->