<?php
    include ("conn.php");
    $pag = $_GET['id'];
    $consulta = "SELECT * FROM terrenos WHERE id = '$pag'";
    $con = $mysqli->query($consulta) or die($mysqli->error);



    $fire = mysqli_query($mysqli, $consulta);
    $data = mysqli_fetch_array($fire);
    $res = $data['foto'];
    $res = explode(" ",$res);
    $count = count($res)-1;
    for($i=0;$i<=$count;++$i)
    $position = 0;

    if(isset($_POST['add'])){
        $position=$_POST['position'];
        $position++;
        if($position > $count-1){
            $position = 0;
        }
    }

    if(isset($_POST['minus'])){
        $position=$_POST['position'];
        $position--;
        if($position < 0){
            $position = 0;
        }
    }

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imovel</title>
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
<header>
        <div class="nav-bar">
            <a href="index.php" class="logo">Inove C Imóveis</a>
            <div class="navigation">
                <div class="nav-items">
                    <div class="nav-close-btn"></div>
                     <a href="index.php">Home</a>
                     <a href="index.php#about">Sobre</a>
                     <a href="index.php#imoveis">Imoveis</a>
                </div>
            </div>
            <div class="nav-menu-btn"></div>
        </div>
    </header>
    </header>

     <div class="section">
     <?php while($dado = $con->fetch_array()){ ?>
                <div class="container">
                    <div class="content-section">
                    
                        <div class="title">
                            <h1><?php echo $dado["titulo"];?></h1>
                        </div>
                        <div class="content">
                            <h3>Categoria: <?php echo $dado["categoria"];?></h3>
                            <h2>Valor: <?php echo $dado["valor"];?></h2>
                            <p><?php echo $dado["descricao"];?></p>
                            <div class="button">
                                
                                <a href="https://wa.me/16994051331?text=Gostaria%20de%20saber%20mais%20sobre:%20<?php echo $dado["titulo"];?>%20No%20valor%20de%20R$:<?php echo $dado["valor"];?>." target="_blank" rel="external"><i class="fa-brands fa-whatsapp"></i> Entre em Contato</a>
                            </div>
                        </div>
                        <div class="social">
                            <a href=""><i class="fab fa-facebook-f" ></i></a>
                            <a href=""><i class="fab fa-instagram" ></i></a>
                        </div>
                    </div>
                    <div class="image-section">
                        <form method="POST" >
                        <img id="post" src="fotos/<?php echo $res[$position]; ?>" alt="" srcset="">
                        <input hidden type="text" name="position" value="<?=$position?>" id="">
                        <p id="pic" >foto: <?=$position+1?>/<?=$count?></p>
                        <button name="minus" class="add" ><</button>
                        <button name="add" class="minus" >></button>

                        </form>
                       
                      
                        

                    </div>
                </div>
                <?php } ?>
            </div>
            
            <script src="js/main.js"></script>
</body>
</html>