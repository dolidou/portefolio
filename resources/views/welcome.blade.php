<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Doli Portfolio</title>

    <link rel="icon" href="images/logo2.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Incluez la bibliothèque Font Awesome via un CDN -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/unicons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="css/tooplate-style.css">
    
<!--

Tooplate 2115 Marvel

https://www.tooplate.com/view/2115-marvel

-->
  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="images/logo2.png" alt="Logo Doli" style="width: 60px; height: 60px;"> 
              </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="A propos">A propos</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Projets">Projets</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="CV">CV</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    {{-- <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color mode
                      </div>
                    </div> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/english">English </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">Je suis <span class="mobile-block">Dalila Ksentini</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2"> Full Stack developper</span>
                                <div class="animated-info">
                                    <span class="animated-item">études conception de projets</span>
                                    <span class="animated-item">Maîtrise de Php Laravel, HTML/CSS, Javascript</span>
                                    
                                </div>
                        </h1>

                        <p></p>
                        
                        
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="images/undraw/undraw_software_engineer_lvl5.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <style> 
        .project-info img {
        max-width: 70%; /* Définissez la largeur maximale à 100% pour que l'image s'adapte à la largeur de son conteneur */
        height: auto; /* Garantissez que la hauteur est ajustée automatiquement pour maintenir les proportions originales */
        }

        .project-info {
        text-align: center;
        }
        .project-info img {
        margin: 0 auto; /* Centre l'image horizontalement */
        display: block; /* Supprime l'espace en bas de l'image */
        }

    </style>
    <section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Mes projets réalisés </h2>
                        <p>1- Gestion de projet interne d'une entreprise <a href="https://www.canva.com/design/DAFtxNXSnyE/y6bBYbZD2y_9tVKAlJ-lZQ/view?mode=prototype#tableaudebord" target="_blank">Consulter le prototype</a> </p>
                        <p>2- Gestion d'une entreprise <a href="https://www.canva.com/design/DAFt3cjm8nE/6FoSjs7wH0KvGnDW3G2QvQ/view?mode=prototype" target="_blank">Consulter le prototype</a> </p>

                    </div>
                     

                      <div class="owl-carousel owl-theme">
                      

                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/2.jpg" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                              <img src="images/project/gestionprojet.gif" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                              <img src="images/project/gestiondentreprise.jpg" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        <div class="item">
                            <div class="project-info">
                              <img src="images/project/gestionentreprise.gif" class="img-fluid" alt="project image">
                            </div>
                        </div>

                        {{-- <div class="item">
                          <div class="project-info">
                            <img src="images/project/project-image03.png" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/project-image04.png" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/project-image05.png" class="img-fluid" alt="project image">
                          </div>
                        </div>
                      </div> --}}

                  </div>
                </div>
                
        </div>
    </section>
    {{-- <section class="project py-5" id="project1">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <p>2- Gestion d'une entreprise <a href="https://www.canva.com/design/DAFt3cjm8nE/6FoSjs7wH0KvGnDW3G2QvQ/view?mode=prototype" target="_blank">Consulter le prototype</a> </p>
                      </div>
                     

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/gestionentreprise.gif" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="images/project/gestion dentreprise.jpg" class="img-fluid" alt="project image">
                          </div>
                        </div>

                  </div>
                </div>
                
        </div>
    </section> --}}

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4">Experiences</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>22 - 23</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>Responsable IT</span><small>  Sarl Kamelofood 12-22 / 05-23</small></h3>
                                  <ul>
                                    <li>&bull; Administration de l'Active Directory.</li>
                                    <li>&bull; Gestion de la sauvegarde avec TINA Atempo.</li>
                                    <li>&bull; Gestion du parc informatique et assistance basique de l'ERP Sage.</li>
                                  </ul>
                                  
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>16 - 22</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Ingénieur d’état en Informatique</span><small>Entreprise Portuaire d’Alger EPAL 01/16 – 11/22</small></h3>
                                <ul>
                                    <li>&bull; Étude et conception de nouveaux projets (informatisation des bons de location d'engins et de bon de mise à disposition, cautions et avance clients, GMAO).</li>
                                    <li>&bull; Développement d'applications web à l'aide du framework Laravel (PHP, HTML, CSS, JavaScript).</li>
                                    <li>&bull; Maintenance et suivi des applications (Facturation Gare maritime, Gestion de clients).</li>
                                    <li>&bull; Administration de la base de données Oracle en utilisant PL/SQL.</li>
                                    <li>&bull; Chef de projet pour la refonte de la gestion de maintenance assistée par ordinateur GMAO.</li>
                                  </ul>
                                                         </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>14 - 15</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Material Request Creator <small>HUAWEI TECHNOLOGIES 09/14 – 09/15</small></h3>
                                <p>&bull; Gestion des demandes de matériel, collaboration avec les équipes de projet, achat
                                    de matériel auprès des fournisseurs, suivi des commandes et livraisons matériel.</p>
                            </div>
                        </div>
                        
                        {{-- <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2014</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Junior Designer<small>Crafted Co.</small></h3>
                                <p>Cras scelerisque scelerisque condimentum. Nullam at volutpat mi. Nunc auctor ipsum eget magna consequat viverra.</p>
                            </div>
                        </div> --}}

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4 mobile-mt-2">Educations</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>2013</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>MASTER Informatique (Génie Logiciel)</span><small>Université de Saad Dahleb Blida</small></h3>
                                  <p>mention Très Bien. Thème : « Conception et développement d’une application de positionnement Indoor pour Smartphone sous le système Android »</p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2010</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Licence Informatique</span><small>Université de Saad Dahleb Blida</small></h3>
                                <p> mention bien. Thème : « Choix et implémentation d’une solution IDS (Détection d’intrusion) en Open source ». </p>
                            </div>
                        </div>
                        
                        {{-- <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2013</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Artwork Design</span><small>New Art School</small></h3>
                                <p>You can freely use Tooplate's templates for your business or personal sites. You cannot redistribute this template without a permission.</p>
                            </div>
                        </div> --}}

                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102533.56130865312!2d2.8359663884282407!3d36.574029595561754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128f08274e3f7203%3A0x1b75ccbdec0d502e!2sBoufarik!5e0!3m2!1sfr!2sdz!4v1693938637051!5m2!1sfr!2sdz" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Ksentini Dalila</h3>
                  <p class="footer-text mb-0">00 213 558 53 32 55</p>
                  <p><a href="mailto:ksentini.dalila@gmail.com">ksentini.dalila@gmail.com</a></p>
                </div>

                <ul class="social-links">
                     <li><a href="https://www.linkedin.com/in/dalila-ksentini-599b1b85/" class="" data-toggle="tooltip" data-placement="left" title="linkedin" target="blank_"><i class="fab fa-linkedin"></i></a></li>
                     {{-- <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                     <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li> --}}
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Si ça vous interesse de travailler avec moi contactez moi !</h2>

              <form action="{{ route('send.email') }}" method="post" id="contact-form">
                @csrf
                @if(session()->has('message'))
                        <div class="alert alert-success">
                          {{ session()->get('message') }}
                      </div>
                @endif
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Votre nom" id="name">
                       @error('name')
                         <span class="text-danger"> {{ $message }} </span>
                       @enderror
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="objet" required>
                    @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                    @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                     @enderror
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Envoyer">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        
                        <p class="copyright-text text-center">Designed by Doli / Created with LARAVEL/HTML/CSS/JAVASCRIPT</a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

    {{-- <script>
        $(document).ready(function() {
            $('#contact-form').submit(function(e) {
                e.preventDefault();
    
                var formData = $(this).serialize();
    
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function(response) {
                        // Gérez la réponse du serveur (par exemple, un message de confirmation)
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Gérez les erreurs ici
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script> --}}
  </body>
</html>