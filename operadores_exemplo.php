<?php

if (isset($_POST['btn_verificar'])){

$numero = $_POST['numero'];

if(trim($numero) == ''){
echo 'preencher campo NUMERO';

}
else {
    
   if ($numero > 100) {

    echo 'o numero'. $numero . ' é maior que 100';
   }

   else if ($numero == 100){

    echo 'o numero'. $numero . ' é igual que 100';
   }
   
   else{
    echo 'o numero'. $numero . ' é menor que 100';
   }
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="operadores_exemplo.php">

    <label></label>
<input type="text" name="numero">
<button name="btn_verificar">verificar</button>


    </form>

</body>
</html>