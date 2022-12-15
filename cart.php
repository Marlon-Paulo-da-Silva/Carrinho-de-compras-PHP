<?php
  session_start();

  require_once('./php/CreateDb.php');
  require_once("php/component.php");

  $db = new CreateDb("Productdb", "Productdb");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

  <link rel="stylesheet" href="style.css">
</head>
<body bg-light>
 
<?php require_once('php/header.php') ?>

<div class="container-fluid">
  <div class="row px-5">
    <div class="col-md-7">
      <div class="shopping-cart">
        <h6>Meu Carrinho</h6>

        <?php
         if(isset($_SESSION['cart'])){
          $product_id = array_column($_SESSION['cart'], 'product_id');

          $result = $db->getData();
          while($row = mysqli_fetch_assoc($result)){
            foreach($product_id as $id){
              if($row['id'] == $id){
                cartElement($row['product_image'], $row['product_name'], $row['product_price']);
              }
            }
          }
         } else {
          echo "<h5>Carrinho está vazio</h5>";
         }
        ?>
      </div>
    </div>
    <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
      <div class="pt-4">
        <h6>DETALHES DO PREÇO</h6>
        <hr>
        <div class="row price-details">
          <div class="col-md-6">
            <?php
              if(isset($_SESSION['cart'])){
                $count = count($_SESSION['cart']);
                echo "<h6>Preço: ($count itens)</h6>";
              } else {
                echo "<h6>Preço: (0 itens)</h6>";
              }
            ?>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </div>
  </div>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>