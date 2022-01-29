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

        <a href="../index.php" id="logo"><img src="../ico/casa.png" width="45px" alt=""  srcset=""></a>
        <nav>
            <ul class="menu">
                <a href="../index.php">
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
        <h1>Imóveis Cadastrados</h1>
       
                   <div class="header_fixed">
                   
                       <section>
                       
                           <table>
                               <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Titulo</th>
                                       <th>Imagem</th>
                                       <th>Categoria</th>
                                       <th>Valor</th>
                                       <th>Excluir</th>
                                       <th>Editar</th>
                                   </tr>
                               </thead>
                               <?php while($dado = $con->fetch_array()){ ?>

                                <?php
                                    $query = "SELECT foto FROM terrenos WHERE id=$dado[id];";
                                    $fire = mysqli_query($mysqli, $query);
                                    $data = mysqli_fetch_array($fire);
                                    $res = $data['foto'];
                                    $res = explode(" ",$res);
                                    $count = count($res)-1;
                                    $position = 0;
                              ?>

                               <tbody>
                               <tr class="efect">
                                   <td><?php echo $dado["id"];?></td>
                                   <td><?php echo $dado["titulo"];?></td>
                                   <td><img src="../fotos/<?php echo $res[0]; ?>" alt="" srcset=""></td>
                                  
                                   <td><?php echo $dado["categoria"];?></td>
                                   <td>R$<?php echo $dado["valor"];?></td>
                                   <td><a href="javascript: if(confirm('Tem certeza que deseja deletar o terreno?')) location.href='del.php?id=<?php echo $dado["id"];?>'"><button>EXCLUIR
                                       
                                   </button></a></td>
                                   <td><a href="edit.php?id=<?php echo $dado["id"];?>"><button>Editar</button></a></td>
                               </tr>
                               <?php } ?>
                               </tbody>

                           </table>
                           
                       </section>
                   </div>
        
    </div>
    </main>

</body>
</html>

