<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>My Shop</h1>
    <ul>
      <?php
      $json = file_get_contents('http://product-service');
      $obj = json_decode($json);

      $products = $obj->products;
      foreach ($products as $product) {
        echo "<li>$product</li>";
      }
      ?>
    </ul>
  </body>
</html>
