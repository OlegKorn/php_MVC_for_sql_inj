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