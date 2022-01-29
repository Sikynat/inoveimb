<?php
    include ("conn.php");
    $consulta = "SELECT * FROM terrenos";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inove C Imobiliaria</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    
  </head>
  <body>

    <!--=======Scroll to top button=======-->

    <!--=======Light/Dark theme button=======-->

    <!--=======Header=======-->
    <header>
        <div class="nav-bar">
            <a href="#" class="logo">Inove C Imóveis</a>
            <div class="navigation">
                <div class="nav-items">
                    <div class="nav-close-btn"></div>
                     <a href="#home">Home</a>
                     <a href="#about">Sobre</a>
                     <a href="#imoveis">Imóveis</a>
                </div>
            </div>
            <div class="nav-menu-btn"></div>
        </div>
    </header>
    <!--=======Home section=======-->
    <section class="home flex-center" id="home">
        <div class="home-container">
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="info">
                <h2>Inove C Imóveis</h2>
                <h3>Imobiliaria</h3>
                <p>CRECI: 201970-F.</p>
                <a href="#imoveis" class="btn">Busque um Imovel. <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <div class="home-img">
                <img src="images/main-img.png" alt="">
            </div>
        </div>
        <a href="#sobre" class="scroll-down">Descer mais <i class="fas fa-arrow-down"></i> </a>
    </section>

    <!--=======About section=======-->
    <section class="about section" id="about">
        <div class="container flex-center">
            <h1 class="section-title-01">Sobre nós</h1>
            <h2 class="section-title-02">Sobre nós</h2>
            <div class="content flex-center">
                <div class="about-img">
                    <img src="images/about-img.png" alt="" srcset="">
                </div>
                <div class="about-info">
                    <div class="description">
                        <h3>Inove C Imóveis</h3>
                        <h4>Nossa <span>Missão</span>.</h4>
                        <p>Proporcionar aos clientes a realização de seus sonhos através da conquista de seu imóvel ou objeto de desejo, oferecendo produtos e imóveis de qualidade, preços justos e um atendimento atencioso, eficaz e transparente. Alcançar seu objetivo é a nossa meta.
                        <h4><span>Visão</span>.</h4>
                        <p>Ser reconhecida como uma empresa internacional em negócios empresariais, concretizando sonhos, estabelecendo parcerias e intensificando a qualidade de nosso atendimento.</p>
                        <h4><span>Valores</span>.</h4>
                        <p>• transparência e respeito para com o cliente e nossos colaboradores</br>
                            • compromisso com o investimento do cliente</br>
                            • constante busca da inovação tecnológica</br>
                            • respeito ao ser humano de formal integral</br>
                            • suporte e assistência para com as pessoas com deficiência</br>
                            • ética, justiça, integridade e cidadania nos nossos negócios</br>
                            • preocupação com o meio ambiente</br>
                            • garantir a satisfação sobre o bem adquirido</br></p>

                            <p>Somos uma empresa atuante no mercado brasileiro que busca atender com justiça, respeito, transparência, honestidade, integridade e comprometimento o cliente. E tratar com responsabilidade seu investimento, cuidando para que o resultado esperado seja alcançado com destreza e agilidade</p>
                    </div>
                   

                </div>
            </div>
        </div>
    </section>

    <!--=======Skills section=======-->

    <!--=======Services section=======-->

    <!--=======Portfolio section=======-->
    <section class="portfolio section" id="imoveis">

        <div class="container flex-center">

            <h1 class="section-title-01">Imóveis</h1>
            <h1 class="section-title-02">Imóveis</h1>

            <div class="content">

                <div class="portfolio-list">
                     <!-- Começo do laço de repetição -->
                     <?php while($dado = $con->fetch_array()){ ?>
                        <?php
                            $query = "SELECT foto FROM terrenos WHERE id =  $dado[id];";
                            $fire = mysqli_query($mysqli, $query);
                            $data = mysqli_fetch_array($fire);
                            $res = $data['foto'];
                            $res = explode(" ",$res);
                            $count = count($res)-1;
                            $position = 0;
                        ?>
                    <div class="img-card-container">

                        <div class="img-card">

                        <div class="overlay"></div>

                            <div class="info">
                                <h3><?php echo $dado["titulo"];?></h3>
                                <span><?php echo $dado["categoria"];?></span>
                                </div>
                                <img src="fotos/<?php echo $res[$position];?>" alt="">
                        </div>
                        <div class="portfolio-model flex-center">
                            <div class="portfolio-model-body">
                                <i class="fas fa-times portfolio-close-btn"></i>
                                <h3>Antes Do Sol</h3>
                                <img src="fotos/<?php echo $res[$position];?>" alt="" srcset="">
                                <p><?php echo $dado["descricao"];?></p>
                                <a href="terreno.php?id=<?php echo $dado['id'];?>"><button class="btn-go">Ir até</button></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- Fim do laço de repetição -->
                

                </div>
            </div>
        </div>
    </section>
      <!--=======Get-in-touct=======-->
      
      <!--=======Our Clients=======-->

    <!--=======Contact section=======-->

    <!--=======Footer=======-->
    <footer>
        <div class="footer-container">
            <div class="about group">
                <h2>Inove C Imóveis</h2>
                <p>Imobiliaria</p>
                <p>Contato: 16994051331 </br> inove.c.imoveis@gmail.com </br> R: Estevão Leão Burroul, 1378 </br> CEP: 14.400-750 - Centro - Franca SP</p>
               
            </div>
 
            <div class="hr"></div>
                <div class="follow group">
                    <h3>Nos siga nas redes sociais</h3>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://br.freepik.com/fotos-vetores-gratis/negocio"><i class="fa-solid fa-font-awesome"></i></a></li>
                    </ul>
                </div>
                <div class="hr"></div>
                <div class="copy">
                <p>&copy; Inove C Imóveis. Todos os direitos reservados.</p>
                </div>
        </div>
    </footer>

    <!--=======External scripts=======-->
    <script src="js/main.js"></script>

  </body>
</html>
