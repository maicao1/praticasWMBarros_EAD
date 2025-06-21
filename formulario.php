<?php



if (isset($_POST['btn_mostrar'])) {

    $nome = $_POST['nome_usuario'];
    $sobrenome = $_POST['sobrenome_usuario'];
    echo 'nome completo:' . ' ' . $nome . ' ' . $sobrenome . ' ';

    $rua = $_POST['rua_usuario'];
    echo '<br>'.'rua:' . ' ' .$rua;

    $bairro = $_POST['bairro_usuario'];
    echo '<br>' . 'bairro: ' . ' ' .$bairro;
  
    $cep = $_POST['cep_usuario'];
    echo '<br>' . 'cep: ' . ' '  .$cep;
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

    <form action="formulario.php" method="post">
        <label>nome</label>
        <input name="nome_usuario">
        <label>sobrenome</label>
        <input name="sobrenome_usuario">
        <label>rua</label>
        <input name="rua_usuario">
            <label>bairro</label>
                <input name="bairro_usuario">
                <label>CEP</label>
                <input name="cep_usuario">
                <button name="btn_mostrar">mostrar</button>
    </form>

</body>

</html>




