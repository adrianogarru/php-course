<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    $name = "PHP Store";
    $credit = 1000;
    
    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h1>You have $".$credit." in your wallet.</h1>";

    $products["Computer"]=750;
    $products["Car"]=15000;
    $products["iPhone"]=1000;
    $products["Toaster"]=75;

    foreach($products as $key => $value) {
      echo "<p>The ".$key." cost ".$value."</p>";
    }

    ?>
  </body>
</html>