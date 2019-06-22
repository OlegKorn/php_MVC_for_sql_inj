<!--CATEGORY TPL-->
<!--CATEGORY TPL-->
<!--CATEGORY TPL-->

        <div class="col-md-8 col-sm-12">
          <div id="center" class="col-12 text-center">
            <h2>{$rsCategory['name']}</h2>
            <div class="row text-center">
      	    
       	      {foreach $rsProducts as $item name=products}

                <div class="col-md-4 col-sm-12 one-edge-shadow">
                  <a href="/product/{$item['id']}/">
                    <img class="img-thumbnail" src="/images/products/{$item['image']}" alt="{$item['image']}">
                  </a>
                  <a class="styled" href="/product/{$item['id']}/">{$item['name']}</a>
                </div>                

              {/foreach}

              {foreach $rsChildCats as $item name=childCats}
              <div class="col-md-12 col-sm-12">
                <h4><a class="styled" href="/category/{$item['id']}/">{$item['name']}</a></h4>
              </div>
              {/foreach}

        </div>
      </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> <script src="main.js"></script>
  </body>
</html>

<!--END CATEGORY TPL-->
<!--END CATEGORY TPL-->
<!--END CATEGORY TPL-->