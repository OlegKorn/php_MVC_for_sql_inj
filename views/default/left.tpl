  <!--LEFT TPL-->
  <!--LEFT TPL-->
  <!--LEFT TPL-->
  <section>
    <div id="main" class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div id="left" class="col-12 text-center">
            <h3>Меню сайта</h3>
            
            <ul class="nav flex-column">
              
              {foreach $rsCategories as $item}
              <li>
                <a class="nav-link bold" href="#">{$item['name']}</a>
              </li>

              {if isset($item['children'])}
                {foreach $item['children'] as $itemChild}
                  <a href="#">{$itemChild['name']}</a> 
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

            <strong><a href="#">Регистрация</a></strong>
              <p class="cart-info"><a href="#">В корзине </a><span>пусто</span></p>
          </div>
        </div>
        <!--END LEFT TPL-->
        <!--END LEFT TPL-->
        <!--END LEFT TPL-->