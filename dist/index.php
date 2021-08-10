<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="Sense Quadros" content="" />
        <meta name="Aleff Oliveira" content="" />
        <title>Sense Quadros</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/gallery.css" rel="stylesheet" />
        <link href="css/slideGallery.css" rel="stylesheet" />
        <link href="css/filterSelectButton.css" rel="stylesheet" />
        <link href="css/galleryFilter.css" rel="stylesheet" />
        <link href="css/lightbox.css" rel="stylesheet" />
        <link href="css/magnific-popup.css" rel="stylesheet" />

        <link rel="stylesheet" href="json/fancybox.jquery.json" type="text/css" media="screen">
        <link type="text/javascript" href="json/jquery.fancybox.pack.json" type="text/css" media="screen">

        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Sense Quadros</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gallery">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contato</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" target="__blank" href="/dist/carrinho.php"><i class="fas fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead edited on gallery.css and gallery.js-->
        <header class="masthead">
                    <div id="containerSlide">
                        <ul id="slides">
                            <li class="slide">
                                <div class="slide-partial slide-left">
                                    <img class="responsive-slide-gallery" src="https://i.ibb.co/fDrTz6s/7-animals-right.jpg"/>
                                </div>
                                <div class="slide-partial slide-right">
                                    <img class="responsive-slide-gallery" src="https://i.ibb.co/SQ3P9Yv/7-animals-left.jpg"/>
                                </div>
                                <h1 class="centered-text">Sense</h1>
                            </li>
                            <li class="slide">
                                <div class="slide-partial slide-right">
                                  <img class="responsive-slide-gallery" src="https://i.ibb.co/FzdC9vK/1-car-left.jpg"/>
                                </div>
                                <div class="slide-partial slide-left">
                                  <img class="responsive-slide-gallery" src="https://i.ibb.co/rGsFJbk/1-car-right.jpg"/>
                                </div>
                                <h1 class="centered-text">Sense</h1>
                              </li>
                
                              <li class="slide">
                                <div class="slide-partial slide-left">
                                  <img class="responsive-slide-gallery" src="https://i.ibb.co/FXy4kp8/2-buildings-left.jpg"/>
                                </div>
                                <div class="slide-partial slide-right">
                                  <img class="responsive-slide-gallery" src="https://i.ibb.co/86HfRc1/2-buildings-right.jpg"/>
                                </div>
                                  <h1 class="centered-text">Sense</h1>
                              </li>
                
                              <li class="slide">
                                <div class="slide-partial slide-left">
                                  <img class="responsive-slide-gallery" src="https://i.ibb.co/rmgBb8Y/4-animals-left.jpg"/>
                                </div>
                                <div class="slide-partial slide-right">
                                  <img class="responsive-slide-gallery" src="https://i.ibb.co/cFnkTcM/4-animals-right.jpg"/>
                                </div>
                                <h1 class="centered-text">Sense</h1>
                              </li>
                
                              <li class="slide">
                                <div class="slide-partial slide-right">
                                  <img class="responsive-slide-gallery" src="https://i.ibb.co/HrBZYpr/10-buildings-right.jpg"/>
                                </div>
                                <div class="slide-partial slide-left">
                                  <img class="responsive-slide-gallery" src="https://i.ibb.co/cLRBLBF/10-buildings-left.jpg"/>
                                </div>
                
                                  <h1 class="centered-text">Sense</h1>
                              </li>
                        </ul>

                        <ul id="slide-select">
                            <li class="selector"></li>
                            <li class="selector"></li>
                            <li class="selector"></li>
                            <li class="selector"></li>
                            <li class="selector"></li>
                        </ul>
                    </div>
            
        </header>

                <!-- Galley Edited on filterSelectButton.css and filterSelectButton.js-->
                <section class="projects-section bg-light" id="gallery">
                    <div class="container px-4 px-lg-5">
                        <div style="text-align: center;">
                            <h1 class="text-center" style="padding:1rem 0;">Galeria</h1>
                            <button class="filter-button  filter-btn news" data-filter="news">Novidades</button>
                            <button class="filter-button  filter-btn todos" data-filter="all">Todos</button>
                            <button class="filter-button  filter-btn categoria" data-filter="all">Categorias</button>
                            <button class="filter-button  filter-btn all_cores" data-filter="all">Cores</button>
                          </div>
                
                        <div style="text-align: center;">
                          <button class="filter-button-secundary  filter-btn abstratos" data-filter="category0">Abstratos</button>
                          <button class="filter-button-secundary  filter-btn animais" data-filter="category1">Animais</button>
                          <button class="filter-button-secundary  filter-btn arquitetura" data-filter="category2">Arquitetura</button>
                          <button class="filter-button-secundary  filter-btn bebidas" data-filter="category3">Bebidas</button>
                          <button class="filter-button-secundary  filter-btn carros" data-filter="category4">Carros</button>
                          <button class="filter-button-secundary  filter-btn ceu" data-filter="category5">Ceu</button>
                          <button class="filter-button-secundary  filter-btn cidades" data-filter="category6">Cidades</button>
                          <button class="filter-button-secundary  filter-btn comidas" data-filter="category7">Comidas</button>
                          <button class="filter-button-secundary  filter-btn espirituais" data-filter="category8">Espirituais</button>
                          <button class="filter-button-secundary  filter-btn flores" data-filter="category9">Flores</button>
                          <button class="filter-button-secundary  filter-btn frases" data-filter="category10">Frases</button>
                          <button class="filter-button-secundary  filter-btn lugares" data-filter="category11">Lugares</button>
                          <button class="filter-button-secundary  filter-btn mar" data-filter="category12">Mar</button>
                          <button class="filter-button-secundary  filter-btn musica" data-filter="category13">Música</button>
                          <button class="filter-button-secundary  filter-btn natureza" data-filter="category14">Natureza</button>
                          <button class="filter-button-secundary  filter-btn neon" data-filter="category15">Neon</button>
                          <button class="filter-button-secundary  filter-btn pessoas" data-filter="category16">Pessoas</button>
                          <button class="filter-button-secundary  filter-btn plantas" data-filter="category17">Plantas</button>
                          <button class="filter-button-secundary  filter-btn vintage" data-filter="category18">Vintage</button>
                        </div>
                
                        <div style="text-align: center;">
                
                          <button class="filter-btn-rounded filter-button-rounded colorido" style="background-image: linear-gradient(to right, #ff00ff 0%, #00ff00 70%, #f0f0f0 100%);" data-filter="colorido" title="Colorido"></button>
                
                          <button class="filter-btn-rounded filter-button-rounded preto_branco" style="background-image: linear-gradient(to right, #ffffff 0%, #f0f0f0 49%, #000000 100%);" data-filter="preto_branco" title="Preto e Branco"></button>
                
                          <button class="filter-btn-rounded filter-button-rounded amarelo" style="background-color: #ffff00;border-color: #ffff00;" data-filter="amarelo" title="Amarelo"></button>
                
                          <button class="filter-btn-rounded filter-button-rounded azul" style="background-color: #0000ff;border-color: #0000ff;" data-filter="azul" title="Azul"></button>
                
                          <button class="filter-btn-rounded filter-button-rounded laranja" style="background-color: #ffa500;border-color: #ffa500;" data-filter="laranja" title="laranja"></button>
                
                          <button class="filter-btn-rounded filter-button-rounded rosa" style="background-color: #ffcbdb;border-color: #ffcbdb;" data-filter="rosa" title="Rosa"></button>
                
                          <button class="filter-btn-rounded filter-button-rounded verde" style="background-color: #008f39;border-color: #008f39;" data-filter="verde" title="Verde"></button>
                
                          <button class="filter-btn-rounded filter-button-rounded vermelho" style="background-color: #ff0000;border-color: #ff0000;" data-filter="vermelho" title="Vermelho"></button>
                    </div>

                    <!-- Galley pictures edited on galleryFilter.css and galleryFilter.js-->
                    <div class="container-filter" style="text-align:center;">
                      <div class="gallery">
                        <!-- 
                        <div class="filter news">
                            <div id="placing_news"></div>
                        </div>
                        -->
                        
                        <div class="filter category0">
                          <div id="placing_abstratos"></div>
                        </div>
                        
                        <div class="filter category1">
                          <div id="placing_animais"></div>
                        </div>

                        <div class="filter category2">
                          <div id="placing_arquitetura"></div>
                        </div>
                        
                        <div class="filter category3">
                          <div id="placing_bebidas"></div>
                        </div>
    
                        <div class="filter category4">
                          <div id="placing_carros"></div>
                        </div>
    
                        <div class="filter category5">
                          <div id="placing_ceu"></div>
                        </div>
                        <!--
                        <div class="filter category6">
                          <div id="placing_cidades"></div>
                        </div>
    
                        <div class="filter category7">
                          <div id="placing_comidas"></div>
                        </div>
    
                        <div class="filter category8">
                          <div id="placing_espirituais"></div>
                        </div>
    
                        <div class="filter category9">
                          <div id="placing_flores"></div>
                        </div>
    
                        <div class="filter category10">
                          <div id="placing_frases"></div>
                        </div>
    
                        <div class="filter category11">
                          <div id="placing_lugares"></div>
                        </div>
    
                        <div class="filter category12">
                          <div id="placing_mar"></div>
                        </div>
    
                        <div class="filter category13">
                          <div id="placing_musica"></div>
                        </div>
    
                        <div class="filter category14">
                          <div id="placing_natureza"></div>
                        </div>
    
                        <div class="filter category15">
                          <div id="placing_neon"></div>
                        </div>
    
                        <div class="filter category16">
                          <div id="placing_pessoas"></div>
                        </div>
    
                        <div class="filter category17">
                          <div id="placing_plantas"></div>
                        </div>
    
                        <div class="filter category18">
                          <div id="placing_vintage"></div>
                        </div>
    
                        <div class="filter amarelo">
                          <div id="placing_amarelo"></div>
                        </div>
    
                        <div class="filter azul">
                          <div id="placing_azul"></div>
                        </div>
    
                        <div class="filter colorido">
                          <div id="placing_colorido"></div>
                        </div>
    
                        <div class="filter laranja">
                          <div id="placing_laranja"></div>
                        </div>
    
                        <div class="filter preto_branco">
                          <div id="placing_preto_branco"></div>
                        </div>
    
                        <div class="filter rosa">
                          <div id="placing_rosa"></div>
                        </div>
    
                        <div class="filter verde">
                          <div id="placing_verde"></div>
                        </div>
    
                        <div class="filter vermelho">
                          <div id="placing_vermelho"></div>
                        </div>-->
                      </div> 
                    </div>
                </section>

        <!-- Projects-->
        <section class="projects-section bg-light" id="about">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/sense.png" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Sobre o nome</h4>
                            <p class="text-black-50 mb-0" align= "justify">
                                Quem primeiro nasceu, antes mesmo da ideia da marca, foi o desenho. Ele surgiu a partir de um sonho que eu tive. Nesse sonho, uma mulher muito sábia me ensinava a desenhar um círculo na parede do meu quarto. Ela dizia que eu deveria mergulhar a mão na tinta, inspirar, prender a respiração, desenhar um círculo de uma só vez e depois expirasse. Eu não poderia voltar para corrigir caso não gostasse. Ele era perfeito como estava. Ela me disse que o nome desse círculo era: Círculo de Buda.</p><p></p>
                              <p class="text-black-50 mb-0" align= "justify">
                                Acordei intrigada com o sonho e minha primeira ação foi uma pesquisa sobre o tal círculo. Descobri que ele de fato existia, que a técnica de desenhá-lo era exatamente a que ela havia me ensinado e que o nome dele também era Círculo de Buda, e em Japonês o nome dado era Ensō. Ou seja, meu sonho foi bem real.</p><p></p>
                              <p class="text-black-50 mb-0" align= "justify">
                                Quando tive a ideia da loja, decidi colocar esse símbolo como o desenho da marca, porque era algo único e especial em minha vida. O nome "SENSE", surgiu através do conceito que eu queria que os quadros tivessem. Cada vez que eu tentava explicar a minha ideia para alguém a palavra "sentido", era citada inúmeras vezes. Foi aí que decidi colocar esse nome na marca, mas em inglês, porque achei mais profundo do que em português.</p><p></p>
                              <p class="text-black-50 mb-0" align= "justify">
                                A proposta principal da marca não é só preencher o vazio da parede com um quadro bonito. É fazer com que o dono, toda vez que olhar para aquela obra, reconheça sua personalidade e passe a entender um pouco o sentido de sua própria vida.</p><p></p>
                              <p class="text-black-50 text-right">
                                Carolina Galdino</p><p></p>
                              <p class="text-black-50 text-right">
                                Proprietária e idealizadora da  marca</p>

                        </div>
                    </div>
                </div>

                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl col-lg">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Sobre a marca</h4>
                            <p class="text-black-50 mb-0" align= "justify">
                              A Sense surgiu através de uma demanda pessoal minha. Há muito eu buscava quadros que tivessem algum sentido, alguma história e que combinassem com a minha personalidade para compor algumas paredes da minha casa. Porém, não obtive muito sucesso nessa busca. A maioria das lojas vendiam os mesmos quadros, quase como algo em série. Não era isso que eu queria para mim.</p><p></p>
                            <p class="text-black-50 mb-0" align= "justify">
                              Para fugir disso fui em busca das galerias de arte, procurando algo mais íntimo e com mais sentido. Encontrei peças exclusivas, de alta qualidade, porém com o preço condizente com obras de arte. O que seria perfeito, se eu pudesse pagar por elas.</p><p></p>
                            <p class="text-black-50 mb-0" align= "justify">
                              Resolvi, então, criar os meus próprios quadros: com sentido, com bom gosto, com qualidade e preço justo. E ficaram realmente muito bons! Eu olhava para a parede e via peças que combinavam comigo, com meu estilo e com as coisas que eu gostava.</p><p></p>
                            <p class="text-black-50 mb-0" align= "justify">
                              E então pensei: por que não levar isso às pessoas? Ali nasceu a SENSE Quadros! Ela reúne a minha paixão pessoal por arte, fotografia e uma decoração mais afetiva, voltada ao dono do ambiente e não somente à moda.</p><p></p>
                            <p class="text-black-50 mb-0" align= "justify">
                              Espero que o nosso quadro preencha a sua casa e também o seu coração!</p><p></p>
                              <p class="text-black-50 text-right">
                                Carolina Galdino</p><p></p>
                              <p class="text-black-50 text-right">
                                Proprietária e idealizadora da  marca</p>
                        </div>
                  </div>
                  <!-- Edited on slideGallery.css-->
                  <div class="col-xl-6 col-lg">
                    <div class="containerSlideGallery">
                      <div class="boxSlideGallery">
                        <img class="mageSlideGallery" src="https://source.unsplash.com/1000x800">
                      </div>
                      <div class="boxSlideGallery">
                        <img class="mageSlideGallery" src="https://source.unsplash.com/1000x802">
                      </div>
                      <div class="boxSlideGallery">
                        <img  class="mageSlideGallery"src="https://source.unsplash.com/1000x804">
                      </div>
                      <div class="boxSlideGallery">
                        <img class="mageSlideGallery" src="https://source.unsplash.com/1000x806">
                      </div>
                    </div>

                    <div class="containerSlideGallery">
                        <div class="boxSlideGallery">
                          <img class="mageSlideGallery" src="https://source.unsplash.com/1000x808">
                        </div>
                        <div class="boxSlideGallery">
                          <img class="mageSlideGallery" src="https://source.unsplash.com/1000x810">
                        </div>
                        <div class="boxSlideGallery">
                          <img  class="mageSlideGallery"src="https://source.unsplash.com/1000x812">
                        </div>
                        <div class="boxSlideGallery">
                          <img class="mageSlideGallery" src="https://source.unsplash.com/1000x814">
                        </div>
                      </div>

                      <div class="containerSlideGallery">
                        <div class="boxSlideGallery">
                          <img class="mageSlideGallery" src="https://source.unsplash.com/1000x816">
                        </div>
                        <div class="boxSlideGallery">
                          <img class="mageSlideGallery" src="https://source.unsplash.com/1000x818">
                        </div>
                        <div class="boxSlideGallery">
                          <img  class="mageSlideGallery"src="https://source.unsplash.com/1000x820">
                        </div>
                        <div class="boxSlideGallery">
                          <img class="mageSlideGallery" src="https://source.unsplash.com/1000x822">
                        </div>
                      </div>


                <!-- Project One Row
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Sobra m</h4>
                                    <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- Project Two Row
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Mountains</h4>
                                    <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </section>

        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Se inscreva para novidades</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Insira o e-mail..." aria-label="Insira o e-mail..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Inscrever</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">Digite seu e-mail</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">E-mail não é válido</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                             <!--   <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>-->
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Erro ao enviar</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Entrega</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Distrito Federal</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">E-mail</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">quadros.sense@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Contato</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Fale conosco pelo nosso Insta oficial</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://instagram.com/sense.quadros"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <!-- form -->

        <div class="modal fade" id="modalBasket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 99999;">
            <div class="modal-dialog" role="document">
              <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seleção de imagem</h5>

                    <button type="button" class="btn-sm btn-secundary" data-dismiss="modal">
                        Voltar
                    </button>
                </div>

                <div class="modal-body mx-3 pt-4 pb-0">

                  
                    <div style="text-align:center;">
                    <div style="padding-bottom: 10px;"id="placing_select"></div>

                    <p><b>Tamanho</b></br>          
                      <form target=__blank id="checkout" action="carrinho.php" method="get">

                        <input type="radio" id="pequeno" name="tamanho" value="pequeno" checked /> <label for="pequeno">P (30cm x 40cm) - R$ 257,00</label><br/>

                        <input type="radio" id="medio" name="tamanho" value="medio" /> <label for="medio">M (50cm x 70cm) - R$ 397,00</label><br/>

                        <input type="radio" id="grande" name="tamanho" value="grande" /> <label for="grande">G (50cm x 80cm) - R$ 437,00 </label><br/>

                        <p>  <p><b>Cor da moldura</b><br/>

                        <input type="radio" id="branca" name="cor" value="branca" checked /> <label for="branca">Branca </label><br/>

                        <input type="radio" id="preta" name="cor" value="preta"/> <label for="preta">Preta </label><br/><br/>

                        <div style="text-align:center; padding-bottom: 20px;">

                        <button type="button" class="btn filter-button-secundary" onclick="addToCardFunction()">Adicionar ao carrinho</button>

                        <div style="text-align:center;" >
                          <input type="submit"  class="btn filter-button" onclick="checkoutSubmitFunction()" value="Ir para o checkout"></input>
                        </div> 

                        <input type="hidden" id="selectedImage" name="selectedImage" value=""/>
                        <input type="hidden" id="keyID" name="keyID" value=""/>

                        </div>
                      </form>
                </div>

                <div class="modal-footer d-flex justify-content-center py-4">
                  <hr>
                  <a  class="card-link-primary small text-uppercase">Ambiente</a>
                  <div id="placing_select_left_frame"></div>
                  <div id="placing_select_right_frame"></div>
                  <div style="padding-bottom: 10px;" class="row">                    
                    <div class="columnPreview" id="placing_select_left_mock"></div>
                    <div class="columnPreview" id="placing_select_right_mock"></div>
                  </div>
                </div>


                <div class="modal-footer d-flex justify-content-center py-4">
                  <hr>
                  <a  class="card-link-secondary small text-uppercase CurrentImageNumber">Mais informações</a>
                </div>
                <div class="row" style="text-align:center;">
                  <div>
                  <h5><p><span>&#10005;</span>  Não acompanha parafusos e buchas de fixação</h5>
                  <h5><p><span>&#10003;</span>  Possui gancho para fixação do parafuso</h5>    
                  <h5><p><span>&#10003;</span>  Com moldura (preta ou branca)</h5>
                  <h5><p><span>&#10003;</span>  Impressão de alta qualidade</h5>
                  <h5><p><span>&#10003;</span>  Pronto para parede</h5>
                  <h5><p><span>&#10003;</span>  Com vidro</h5>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
  



        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Sense Quadros 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <!-- Third party plugin JS-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/filterSelectButton.js"></script>
        <script src="js/gallery.js"></script>
        <script src="js/galleryFilter.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/lightbox-plus-jquery.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/zepto.min.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
