<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho de compra</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <div class="row text-center py-5">
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="POST">
        <div class="card shadow">
          <div>
            <img src="./upload/product1.png" alt="image1" class="img-fluid card-img-top">
          </div>
          <div class="card-body">
            <h5 class="card-title">Produto 1</h5>
            <h6>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="far fa-star"></i>
            </h6>
            <p class="card-text">
              Um rápido exemplo de texto para contruir o produto
            </p>
            <h5>
              <small> <s class="text-secondary">R$ 620,00</s> </small>
              <span class="price">R$ 560,00</span>
            </h5>

            <button type="submit" name="add" class="btn btn-warning my-3">Adicionar ao carrinho <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-3 col-sm-6 my-3 my-md-0">

    </div>
    <div class="col-md-3 col-sm-6 my-3 my-md-0">

    </div>
    <div class="col-md-3 col-sm-6 my-3 my-md-0">

    </div>
  </div>
</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>