<?php

$total = '';

if (isset($_POST['btnver'])){ 

echo'inicio do laço de repetição';

for($i=0; $i<=$total; $i++){
    echo'valor do vaso de repetição $i '. $i . '<br>';


echo '<br><br> fim do laço de repetição';

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
    
<form action="exemplo_lacorepeticao.php">

<label>informe a quantidade de vezes de repetição</label>
<input type="text" name="quantidade">

<button name="btnver">ver resultado</button>

</form>

</body>
</html>