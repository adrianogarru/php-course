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

    echo "<h2>Items you can afford</h2>";

    foreach($products as $key => $value){
      if($value <= $credit){
        echo "<p>The ".$key.".</p>";
      }
    }

echo "<h1> Writing a Math Function #6 </h1>";

   $amount=800;
   $taxRate=0.0825;
   $addedTax= $amount*$taxRate;
   echo "<p>".$addedTax."</p>";  

echo "<h1>Tax calc function </h1>";

function tax_calc($amount,$tax){
  $calculate_tax = $amount*$tax;
  $amount = round($amount+$calculate_tax, 2);
  return $amount;
}
echo tax_calc(750, 0.223);


    ?>
  </body>
</html>