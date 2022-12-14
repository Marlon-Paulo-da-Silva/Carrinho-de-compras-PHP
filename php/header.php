<header id="header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="index.php" class="navbar-brand">
      <h3 class="px-5">
        <i class="fas fa-shopping-basket"></i> Carrinho de compras
      </h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="mx-auto"></div>
      <div class="navbar-nav">
        <a href="cart.php" class="nav-item nav-link active">
          <h5 class="px-5 cart">
            <i class="fas fa-shopping-cart">Carrinho
              <?php
                if(isset($_SESSION['cart'])){
                  $count = count($_SESSION['cart']);
                  echo "<span id=\"cartcount\" class=\"text-warning bg-secondary border  border-white\">$count</span>";
                } else {
                  echo "<span id=\"cartcount\" class=\"text-warning bg-light\">0</span>";
                }
              ?>
            </i>
          </h5>
        </a>
      </div>
    </div>
  </nav>
</header>