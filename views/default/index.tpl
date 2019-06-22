       <!--INDEX TPL-->
        <!--INDEX TPL-->
        <!--INDEX TPL-->
        <div class="col-md-8 col-sm-12">
          <div id="center" class="col-12 text-center">
            <h1 class="text-center">my shop</h1>
            <div class="row text-center">
           
            {foreach $rsProducts as $item name=products}
            
              <div class="col-md-4 col-sm-12 item">
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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!--END INDEX TPL-->
<!--END INDEX TPL-->
<!--END INDEX TPL-->