<?php

function component($productName, $productPrice, $productImg, $product_id){
  $element = "

    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
      <form action=\"index.php\" method=\"POST\">
        <div class=\"card shadow\">
          <div>
            <img src=\"$productImg\" alt=\"image1\" class=\"img-fluid card-img-top\">
          </div>
          <div class=\"card-body\">
            <h5 class=\"card-title\">".$productName."</h5>
            <h6>
              <i class=\"fa fa-star\"></i>
              <i class=\"fa fa-star\"></i>
              <i class=\"fa fa-star\"></i>
              <i class=\"fa fa-star\"></i>
              <i class=\"far fa-star\"></i>
            </h6>
            <p class=\"card-text\">
              Um rápido exemplo de texto para contruir o produto
            </p>
            <h5>
              <small> <s class=\"text-secondary\">R$ 620,00</s> </small>
              <span class=\"price\">R$ $productPrice</span>
            </h5>

            <button type=\"submit\" name=\"add\" class=\"btn btn-warning my-3\">Adicionar ao carrinho <i class=\"fa fa-shopping-cart\"></i></button>
            <input type=\"hidden\" name=\"product_id\" value=\"$product_id\">
          </div>
        </div>
      </form>
    </div>
  ";

  echo $element;
}