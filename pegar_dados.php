<?php

$nome ='';
$sobrenome ='';


if (isset($_POST['btn_mostrar'])){

$nome = trim($_POST['nome']);
$sobrenome = trim($_POST['sobrenome']);

if (trim($nome) ==''){
    echo 'preencher o campo NOME';
}
else if (trim($sobrenome) ==''){
    echo 'preencher o campo SOBRENOME';
}
else{
    header("location:mostrar_dados.php?nome=$nome&sobrenome=$sobrenome");
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
    
<label>nome</label>
<input type="text" name="nome" value="<?=$nome?>">

<label>sobrenome</label>
<input type="text" name="sobrenome" value="<?=$sobrenome?>">

<button name="btn_mostrar">mostrar</button>

</body>
</html>