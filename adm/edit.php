<?php
include('protect.php');


    if(!empty($_GET['id'])){
       include('../conn.php');

        $id = $_GET['id'];

        $slqSelect = "SELECT * FROM terrenos WHERE id=$id";
        $resultad = $mysqli->query($slqSelect);

        if($resultad->num_rows > 0){
        while($post_data = mysqli_fetch_array($resultad)){
            $vTitulo = $post_data["titulo"];
            $vDesc = $post_data["descricao"];
            $vCat = $post_data["categoria"];
            $vValue = $post_data["valor"];
       }
        
        } else {
            header("Location: painel.php");
        }
       
    }
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
        <h1>Editar publicação</h1>
            <form action="savedit.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="txt_field" name="titulo" id="" value="<?php echo $vTitulo;?>" placeholder="Titulo" ></br>
                <textarea type="text" class="txt_field" name="descp" id="" placeholder="descrição"  rows="9" cols="46"><?php echo $vDesc;?></textarea></br>
                <div class="custom-select">
                    <select name="categ"> 
                    <option value="<?php echo $vCat;?>"selected><?php echo $vCat;?></option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Casa">Casa</option>
                    <option value="Sitio">Sitio</option>
                    <option value="Fazenda">Fazenda</option>
                    </select></br>
                </div>
                <input type="text" class="txt_field" name="valor" id=""  value="<?php echo $vValue;?>" placeholder="Valor" ></br>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" class="edit" value="Editar">
                <button onclick="window.location.href='painel.php'">Cancelar</button>
                
            </form>
        </div>
        
    </main>
</body>
</html>
