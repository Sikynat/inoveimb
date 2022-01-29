<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <main>
        
        
        <div class="center">
        <h1>Fazer publicação</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" class="txt_field" name="titulo" id=""  placeholder="Titulo" ></br>
                <textarea type="text" class="txt_field" name="descp" id=""  placeholder="descrição"  rows="9" cols="46"></textarea></br>
                <div class="custom-select">
                    <select name="categ"> 
                    <option value="SemCategoria"selected>Categoria</option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Casa">Casa</option>
                    <option value="Sitio">Sitio</option>
                    <option value="Fazenda">Fazenda</option>
                    </select></br>
                </div>
                <input type="text" class="txt_field" name="valor" id=""  placeholder="Valor" ></br>
                <input type="file" name="images[]" multiple id="" ></br>
                <input type="submit" name="submit" value="Publicar">
                <a href="painel.php">Cancelar</a>
                
            </form>
        </div>
        
    </main>
</body>
</html>
<?php

include('../conn.php');

    if(isset($_POST['submit'])){
        $extensao = strtolower(substr($_FILES['images']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $file_tmp='';
        $location="../fotos/";
        $data='';

        $vTitulo = $_POST["titulo"];
        $vDesc = $_POST["descp"];
        $vCat = $_POST["categ"];
        $vValue = $_POST["valor"];

        foreach($_FILES['images']['name'] as $key=>$val){
            $file = $_FILES['images']['name'][$key];
            $file_tmp = $_FILES['images']['tmp_name'][$key];
            move_uploaded_file($file_tmp, $location.$file);
            $data .=$file." ";
        }
        $query = "INSERT INTO terrenos (id, titulo, descricao, categoria, valor, foto) VALUES(null, '$vTitulo', '$vDesc', '$vCat', '$vValue', '$data')";
        $fire = mysqli_query($mysqli, $query);
        if($fire){
            header("Location: painel.php");
        } 
    }
?>