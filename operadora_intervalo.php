
<?php

$inicio = '';
$meio = '';
$fim = '';

if (isset ($_POST['btn_verificar'])){ 

$inicio = $_POST['inicio'];
$meio = $_POST['meio'];
$fim = $_POST['fim'];

}
if (trim($inicio)== ''){
    echo 'preencher o campo INICIO';

}
 else if (trim($meio)== ''){
    echo 'preencher o campo MEIO';

}
else if (trim($fim)== ''){
    echo 'preencher o campo FIM';

}

if ($inicio <= $meio && $meio <= $fim) {


    echo 'o numero' . $meio .'esta entre'. $inicio . 'e' . $fim;
}
else { 
    echo 'o numero' . $meio .'NAO esta entre'. $inicio . 'e' . $fim;
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
    
<form  action="operadora_intervalo.php" method="POST"> 
    

<label>inicio</label>
<input type="text" name="inicio" <?=$inicio?>>

<label>meio</label>
<input type="text" name="meio" <?=$meio?>>

<label>fim</label>
<input type="text" name="fim" <?=$fim?>>

<button name="btn_verificar">verificar</button>



</form>



</body>
</html>