<!--CATEGORY TPL-->
<!--CATEGORY TPL-->
<!--CATEGORY TPL-->

    <div class="col-md-8 col-sm-12">
      <div id="center" class="col-12 text-center">
        <h2>Товары категории {$rsCategory['name']}</h2>
        <div class="row text-center foto-items">
	    
 	      {foreach $rsProducts as $item name=products}
          <div class="col-md-4 col-sm-12 foto-item">
            <a href="/product/{$item['id']}"
              <img src="/images/products/{$item['image']}">
            </a>
            <a href="/product/{$item['id']}/">{$item['name']}</a>
          </div>
        {/foreach}

        {foreach $rsChildCats as $item name=childCats}
        <div class="col-md-12 col-sm-12">
          <h4><a href="/category/{$item['id']}/">{$item['name']}</a></h4><br/>
        </div>
        {/foreach}

        </div>
      </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!--END CATEGORY TPL-->
<!--END CATEGORY TPL-->
<!--END CATEGORY TPL-->