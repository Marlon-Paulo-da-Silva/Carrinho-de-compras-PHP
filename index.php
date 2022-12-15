<?php

  require_once('./php/CreateDb.php');
  require_once('./php/component.php');

  session_start();

  // criar instancia de CreateDb class
  $database = new CreateDb('productDB','productDB');

  if(isset($_POST['add'])){
    // print_r($_POST['product_id']);

   
    if(isset($_SESSION['cart'])){

      $item_array_id =  array_column($_SESSION['cart'], "product_id");
      // echo "if _SESSION[cart]</br>";
      // print_r($item_array_id);

      if(in_array($_POST['product_id'], $item_array_id)){
        // echo "<script>alert('Produto está pronto para ser adicionado no carrinho')</script>";
        // echo "<script>window.location = 'index.php'</script>";

      } else {
        $count = count($_SESSION['cart']);
        $item_array = array(
          'product_id' => $_POST['product_id']
        );
        
        $_SESSION['cart'][$count] = $item_array;
        // print_r($_SESSION['cart']);
      }
    } else {
      $item_array = array(
        'product_id' => $_POST['product_id']
      );

      // Create new session variable
      $_SESSION['cart'][0] = $item_array;
      echo "ELSE _SESSION[cart]</br></br>";
      echo "<pre>";
      print_r($_SESSION['cart']);
      echo "</pre>";
    
      
    }

    

   
  }

?>



<!DOCTYPE html>
<html lang="pt-br">
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

<?php require_once('php/header.php') ?>

<div class="container">
  <div class="row text-center py-5">
    <?php
      $result = $database->getData();
      while($row = mysqli_fetch_assoc($result)){
        component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
      }
    ?>
  </div>
</div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>