<!DOCTYPE html>

<html lang="pt-BR">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Início</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link rel="stylesheet" href="styleNav.css">

    <link rel="stylesheet" href="cssTelaDeInicio/styleCards.css">
    <link rel="stylesheet" href="cssTelaDeInicio/styleHero.css">
    <script src="../custom-scripts.js" defer></script>
    <link rel="stylesheet" href="cssTelaDeInicio/styleRodape.css" />
    <link rel="stylesheet" href="cssTelaDeInicio/styleAvaliacao.css">


    <link rel="stylesheet" href="cssTelaDeInicio/stylePreCarregamento.css">
    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="cssTelaDeInicio/swiper-bundle.min.css">




    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    
    <link rel="icon" href="imgTelaDeInicio/gatinho.ico" type="image/x-icon">


  </head>

  <body>
  <div id="preloader">
        <div class="inner">
           <img src="imgTelaDeInicio/gatinho.ico" alt="" style="width: 90px;">
        </div>
  </div>
    <main>
      <!-- Header Início -->
            <header>
                <nav class="nav container">
                    <div class="nav_logo">
                        <img src="imgTelaDeInicio/gatinho.ico" alt="interstellar travel" style="width: 40px; height: 40px;">
                        <h2><a href="#">Interstellar Travel</a></h2>
                    </div>
            
                    <ul class="menu_items">
                        <span class="menu_icon" id="menu_toggle">&#10005;</span>
                
                        <li class="hide_on_desktop"><strong><a href="index.html">Interstellar Travel</a></strong></li>
                
                        <li><a href="#" class="nav_link1">Início</a></li>
                        <li><a href="#" class="nav_link">Sobre</a></li>
                        <li><a href="#" class="nav_link">Serviços</a></li>
                        <li><a href="#" class="nav_link">Projetos</a></li>
                        <li><a href="Login.php" class="nav_link">Login</a></li>
                        <li><a href="Cadastro.php" class="nav_link">Cadastro</a></li>
                    </ul>
            
                    <span class="menu_icon" id="menu_toggle">&#8801;</span>
                </nav>
            </header>
        <!-- Header Fim -->

       <!-- Hero Início -->
            <section class="hero" >
                <div class="row container">
                    <div class="column formulario-column">
                        <div class="texto">
                            <h2 id="typingHeading">Inovação Além das Expectativas</h2>
                        </div> 
                        <p>"Na Visão Futurista, acreditamos que a qualidade e inovação são a combinação perfeita para sua satisfação. Com produtos meticulosamente projetados e tecnologias de ponta, buscamos superar suas expectativas, oferecendo soluções que transformam positivamente sua vida e negócio. Seja bem-vindo a uma jornada inspiradora de crescimento e prosperidade."</p>
                        <div class="buttons">
                            <button class="btn">Leia mais</button>
                            <button class="btn" id="contateBtn">Contate-nos</button>
                        </div>
                        <div id="formulario" style="display: none;">

                            <form>

                                <div>
                                    <h2 >FORMULÁRIO</h2>
                                </div> 
                                <label for="nome" style="color: #fff;">Nome completo:</label>
                                <input type="text" id="nome" name="nome" required>
                                
                                <label for="email" style="color: #fff;">Endereço de E-mail:</label>
                                <input type="email" id="email" name="email" required>

                                <label for="telefone" style="color: #fff;">Telefone:</label>
                                <input type="text" id="telefone" name="telefone" required>
                                
                                <label for="endereço" style="color: #fff;">Endereço:</label>
                                <input type="text" id="endereço" name="endereço" required>
                                
                                
                                <label for="mensagem" style="color: #fff;">Digite sua mensagem:</label>
                                <textarea id="mensagem" name="mensagem" required></textarea>
                                
                                
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                    
                <div class="column astronauta-column">
                        <div class="astronauta">
                            <img src="imgTelaDeInicio/astronauta.png" alt="heroImg" class="hero_img" />
                        </div>
                    </div>  
                </div>
                <img src="imgTelaDeInicio/bg-bottom-hero.png" alt="" class="curveImg" />
            </section>
     <!-- Hero Fim-->

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#contateBtn").on("click", function() {
                        $(".buttons, p, #typingHeading").hide();
                        $("#formulario").show();
                    });
                });
            </script>
            
        
        <script>// JavaScript code for typing effect
            document.addEventListener("DOMContentLoaded", function() {
            const heading = document.getElementById("typingHeading");
            const text = heading.innerText;
            let currentTextIndex = 0;
            
            function typeNextChar() {
                if (currentTextIndex === text.length) {
                clearInterval(typingInterval);
                } else {
                const char = text.charAt(currentTextIndex);
                const cursorSpan = document.createElement("span");
                cursorSpan.classList.add("cursor");
                heading.innerHTML = text.substr(0, currentTextIndex) + char + "<span class='cursor'></span>";
                currentTextIndex++;
                }
            }
            
            // Start the typing effect
            const typingInterval = setInterval(typeNextChar, 100);
            });
            </script>
    </main>
    <!-- Cards Início-->
        <div class="cards02" >
            <div class="wrapper">
            <div class="box">
                <div class="front-face">
                    <div class="icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <span>Web Design</span>
                </div>
                <div class="back-face">
                    <span>Web Design</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid porro perspiciatis dolores impedit ad.
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="front-face">
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <span>Advertising</span>
                </div>
                <div class="back-face">
                    <span>Advertising</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid porro perspiciatis dolores impedit ad.
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="front-face">
                    <div class="icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <span>Game Design</span>
                </div>
                <div class="back-face">
                    <span>Game Design</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid porro perspiciatis dolores impedit ad.
                    </p>
                </div>
            </div>
            </div>
        </div>
  <!-- Cards Fim -->
    <!-- Hero2 Início -->
        <section class="hero2">
            <div class="row container2">
            <div class="column2">
                <img src="imgTelaDeInicio/astronauta2.png" alt="" class="img-responsive astronauta-back-and-forth" />
            </div>
            <div class="column2">
                <div class="astronauta2">
                <img src="imgTelaDeInicio/efeitoComTexto.png" alt="heroImg" class="img-responsive" />
                </div>
            </div>
            </div>
        </section>
    <!-- Hero2 Fim-->
    
        <div style="text-align: center; margin-top: 20%;">
        <h2 id="typingHeading" style="font-size: 30px; background-image: linear-gradient(to right, #8A2BE2, #9400D3); -webkit-background-clip: text; background-clip: text; color: transparent;">DEPOIMENTO DE ALGUNS USUÁRIOS</h2>
   <!-- Avaliação Início -->
    </div>
        </div> 
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgTelaDeInicio/profile1.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="imgTelaDeInicio/profile2.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                            <img src="imgTelaDeInicio/profile3.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgTelaDeInicio/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgTelaDeInicio/profile5.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgTelaDeInicio/profile6.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgTelaDeInicio/profile7.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgTelaDeInicio/profile4.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="imgTelaDeInicio/profile9.jpg" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
   <!-- Avaliação Fim -->
   <audio id="audioPlayer" src="imgTelaDeInicio/good-night-160166.mp3" autoplay controls></audio>

    <!-- Rodapé Início -->
        <footer class="pie-pagina">
                <div class="grupo-1">
                    <div class="box">
                    <figure>
                            <a href="#" style="display: flex; align-items: center;">
                                <img style="width: 200px;" src="imgTelaDeInicio/gatinho.ico" alt="CodingNepal">
                                <h2 style="margin-left: 10px; margin-right: 70px;">Interstellar Travel</h2>
                            </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>SOBRE NÓS</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                </div>
                <div class="box">
                    <h2>REDES SOCIAIS</h2>
                    <div class="red-social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                </div>
            </div>
            <div class="grupo-2">
                <small>&copy; 2023 <b>Isaque</b> - Todos os direitos reservados.</small>
            </div>
       </footer>
   <!-- Rodapé Fim -->

  <!-- Scripts  -->
    <script src="javaTelaDeInicio/nav.js"></script>
    <script src="javaTelaDeInicio/carrosel.js"></script>
    <script src="javaTelaDeInicio/avaliacao.js"></script>
    <script src="javaTelaDeInicio/preCarregamento.js"></script>
<script>

    // Obtenha o elemento de áudio pelo ID
    const audioPlayer = document.getElementById("audioPlayer");

    // Adicione um evento para reiniciar o áudio quando terminar
    audioPlayer.addEventListener("ended", function() {
        this.currentTime = 0;
        this.play();
    });

</script>
 <!-- Swiper JS -->
    <script src="javaTelaDeInicio/swiper-bundle.min.js"></script>
    <script src="javaTelaDeInicio/script.js"></script>


  </body>
</html>
