       <!--INDEX TPL-->
        <!--INDEX TPL-->
        <!--INDEX TPL-->
        <div class="col-md-9 col-sm-12">
          <div id="center" class="col-12 text-center">
            <h1 class="text-center">my shop</h1>
            <div class="row text-center">
           
            {foreach $rsProducts as $item name=products}
            
              <div class="col-md-3 col-sm-12 item">
                <a href="/product/{$item['id']}/">
                  <img class="img-thumbnail" src="/images/products/{$item['image']}" alt="{$item['image']}">
                </a>
                <a class="styled" href="/product/{$item['id']}/">{$item['name']}</a>
              </div>

            {/foreach}
              
            </div>
          </div>
        </div>
      </div>
    </section>


  </body>
</html>
<!--END INDEX TPL-->
<!--END INDEX TPL-->
<!--END INDEX TPL-->