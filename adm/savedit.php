<?php
    include('protect.php');
    include('../conn.php');

    if(isset($_POST['update'])){
            $id = $_POST['id'];
            $vTitulo = $_POST['titulo'];
            $vDesc = $_POST['descp'];
            $vCat = $_POST['categ'];
            $vValue = $_POST['valor'];

        $sql_update = "UPDATE terrenos SET titulo='$vTitulo', descricao='$vDesc', categoria='$vCat', valor='$vValue' WHERE id='$id'";
        $result = $mysqli->query($sql_update);

    }
    header("Location: painel.php");
?>

