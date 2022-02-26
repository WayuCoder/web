<?php

if(isset($_POST['calculate'])){

    $purchasingPrice   = $_POST['purchasing_price'];
    $profit_percentage = $_POST['profit_percentage'];
    $selling_price = $purchasingPrice*($profit_percentage/100) +$purchasingPrice;
    echo "<input type = 'label' value = <?php echo $selling_price; ?> ";
    echo "</br>";
    echo "Thanks for watching";

}




?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>School</title>
    </head>
    <body>
        <p>Profit calculator</p>
        <form action="" method="POST">
        <label for="">Enter purchasing price:</label>
        <input type="text" name="purchasing_price"> <br>
        <label for="">Enter Profit percentage:</label>
        <input type="text" name="profit_percentage">
        <input type="submit" name="calculate" value="Calculator">
        </form>
        
        
    </body>
</html>

