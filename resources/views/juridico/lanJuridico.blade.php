<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soluciones juridicas</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <style>
        header.masthead {
            padding-top: 10.5rem;
            padding-bottom: 6rem;
            text-align: center;
            color: rgb(255, 255, 255);
            background-image: url('{{asset("storage/uploads/themis2.png")}}') ;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center center;
            background-size: cover;
            width: 1400px;
            height: 700px;

        }
    </style>

</head>

<body id="page top">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img width="100" height="100" src="{{asset('storage/uploads/juridico.png')}}" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i> 
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 ">
                    <li class="nav-item "><a class="nav-link  " href="#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link " href="#portfolio">Portafolio</a></li>
                    <li class="nav-item"><a class="nav-link " href="#team">Equipo</a></li>
                    <li class="nav-item"><a class="nav-link " href="#contact">Contactos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead" style="background">
        <div class="container">
            <div class="masthead-subheading">!Bienvenidos!</div>
            <div class="masthead-heading text-uppercase">En que te ayudamos</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#contact">Contactar</a>
        </div>
    </header>

    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase fa-circle">Servicios y tramites</h2>
                <h3 class="section-subheading text-muted text-uppercase">Somos un corporativo juridico legal que brinda servicios de alta calidad ofreciendo un trato especializado y particularizado
                    generandpo confianza y fidelidad con nuestros clientes, el cual trabaja en equipo creando la excelencia en nuestros servicios.</h3>
            </div>
            
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-balance-scale fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3 fa-circle text-uppercase">Amparo</h4>
                    <p class="text-muted" style="text-align:justify">Somos una firma legal integrada por maestros en derecho, profesionistas y abogados litigantes los cuales contamos con mas de 12 años de experiencia comprobable
                        en procedimientos de amparos en las materias laboral, familiar, penal y mercantil.
                    </p>
                </div>
                
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-briefcase fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3 fa-circle text-uppercase">Laboral</h4>
                    <p class="text-muted " style="text-align:justify" >Contamos con mas de 12 años de experiencia en asesoria, litigio y demandas a trabajadores del sector privado y del sector publico,
                         asi como a empresas y personas fisicas que tienen la calidad de patron. Por lo que tenemos una amplia experiencia comprobables en demandas por despido injustificado, incremento de salario,
                        quinquenio, remates y adjudicaciones ejecuciones de sentencias y convenios fuera y dentro de juicio.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-gavel fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3 fa-circle text-uppercase">Penal</h4>
                    <p class="text-muted" style="text-align: justify">Somos un corporativo legal que se caracteriza por la discrecion, asesoria y compromiso 
                        con nuestros clientes siempre buscando la mejor solucion en los procesos.
                    Razon por la cual siempre se busca una solucion rapida y eficaz. Siempre atendiendo las necesidades de las personas que acuden a nosotros. </p>
                </div>
    
            </div>
            <div class="row text-center">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x" >
                        <i class="fas fa-circle fa-stack-2x text-primary" ></i>
                        <i class="fas fa-house-user fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3 fa-circle text-uppercase">Familiar</h4>
                    <p class="text-muted " style="text-align: justify">Nos especializamos en el interes superior del menor en el ambito de convivencia familiar, pension alimenticia,
                        divorcio y liquidacion de la sociedad conyugal.
                        Siendo asi una firma legal integrada por profesionistas del derecho que agota todas las instancias y los medios de impugnacion, recursos,
                        y amparos con la finalidad de dar un resultado positivo a nuestros clientes.
                    </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-file-invoice-dollar fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3 fa-circle text-uppercase">Mercantil</h4>
                    <p class="text-muted " style="text-align: justify">Somos abogados litigantes con una trayectoria amplia en materia de defensa, recuperacion y cobro de todo tipo de acto mercantil y de comercio,
                        como lo son pagares, facturas y titulos de credito.
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section class="page-section " id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase fa-circle">Portfolio</h2>
                
            </div>
            <div class="row text-center">
                @foreach($imagenes as $imagen){
                    
                <div class="col md-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1" data-titulo="{{$imagen->texto1}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{asset('storage').'/'.$imagen->imagen1}}" alt="..." />
                        </a>
                        
                    </div>
                </div>
                }
                @endforeach
                
            </div>
        </div>
    </section>

    <section class="page-section " id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase fa-circle" >Nuestra firma legal se integra con un equipo que siempre busca la excelencia en los servicios que brindamos.</h2>
                <h3 class="section-subheading text-muted">.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                       
                        <h4 class="fa-circle">Ruben Ayón</h4>
                        <br>
                        <h5 class="text-muted">Laboral</h5>
                        <h5 class="text-muted">Penal</h5>
                
                        <h5 class="text-muted">Burocratico</h5>
                        <h5 class="text-muted">Amparo</h5>
                        <h5 class="text-muted">Familiar</h5>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <h4 class="fa-circle">Cesar Acosta</h4>
                        <br>
                        <h5 class="text-muted">Laboral burocratico</h5>
                        <h5 class="text-muted">Amparo</h5>
                        <h5 class="text-muted">Familiar</h5>
                        <h5 class="text-muted">Penal</h5>
                        <h5 class="text-muted">Administrativo</h5>
                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <h4 class="fa-circle">Bryan Gonzales Serrato</h4>
                        <br>
                        <h5 class="text-muted">Mercantil</h5>
                        
                        <h5 class="text-muted">Civil</h5>
                        
                        <h5 class="text-muted">Laboral</h5>
                        <h5 class="text-muted">Familiar</h5>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="team-member">
                        <h4 class="fa-circle">Luis Antonio Morales soto.</h4>
                        <br>
                        <h5 class="text-muted">Penal</h5>
                        
                        <h5 class="text-muted">Amparo</h5>
                        
                        <h5 class="text-muted">Civil</h5>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div>
        </div>
    </section>

    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contactanos</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="/contactar" method="POST">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Nombre *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Correo *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Telefono celular *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Mensaje *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="/contactar"></a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar mensaje</button></div>
            </form>
        </div>
    </section>

    <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog " w>
                <div class="modal-content">
                    <div class="close-modal fas fa-times" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"></h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('storage').'/'.$imagen->imagen1}}" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                   
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal fas fa-times" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('storage/uploads/contratos.jpg')}}" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                   
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal fas fa-times" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Nombre de la imagen</h2>
                                   <br>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('storage/uploads/divorcio.jpg')}}" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal fas fa-times" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Nombre de la imagen</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('storage/uploads/pagare.jpg')}}" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal fas fa-times" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Nombre de la imagen</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('storage/uploads/penal.jpg')}}" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal fas fa-times" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Nombre de la imagen</h2>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="{{asset('storage/uploads/menores.jpg')}}" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>