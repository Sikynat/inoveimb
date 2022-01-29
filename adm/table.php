<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
</body>
    <div class="header_fixed">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Imagem</th>
                    <th>Categoria</th>
                    <th>Valor</th>
                    <th>ação</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Terrenoso</td>
                <td><img src="../terrenos/e856dd82b5f77a2b7d93a903872067b4.jpg" alt="" srcset=""></td>
                <td>terreno</td>
                <td>R$15000</td>
                <td><a href="del.php?id=<?php echo $dado["id"];?>" id="action">Excluir</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
















<?php
    include('protect.php');
    include('../conn.php');
    
    $consulta = "SELECT * FROM terrenos";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/painel.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    <header class="header">

        <a href="../index.php" id="logo">Logo</a>
        <nav>
            <ul class="menu">
                <a href="#">
                    <li>Home</li>
                </a>
                <a href="upload.php">
                    <li>Publicar</li>
                </a>
                <a href="logout.php">
                    <li>Sair</li>
                </a>
            </ul>
         </nav>
    </header>
    <main>
    <h1>Bem vindo, <?php echo $_SESSION['user'];?></h1>
    <div id="content">
        <h1>Terrenos Cadastrados</h1>
        <?php while($dado = $con->fetch_array()){ ?>
                   <div class="header_fixed">
                   
                       <table>
                           <thead>
                               <th>Id</th>
                               <th>Titulo</th>
                               <th>Imagem</th>
                               <th>descrição</th>
                               <th>Categoria</th>
                               <th>Valor</th>
                               <th>ação</th>
                           </thead>
                           <tbody>
                           <tr>
                               <td><?php echo $dado["id"];?></td>
                               <td><?php echo $dado["titulo"];?></td>
                               <td><img src="../terrenos/<?php echo $dado["foto"];?>" alt="" srcset=""></td>
                               <td><?php echo $dado["descricao"];?></td>
                               <td><?php echo $dado["categoria"];?></td>
                               <td>R$<?php echo $dado["valor"];?></td>
                               <td><a href="del.php?id=<?php echo $dado["id"];?>" id="action">Excluir</a></td>
                           </tr>
                           </tbody>
                       </table>
                   </div>
        <?php } ?>
    </div>
    </main>

</body>
</html>