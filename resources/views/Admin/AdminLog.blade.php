<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fly Admin Login</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-festava-live.css" rel="stylesheet">
    <!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->

</head>

<body>

    <main>

        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Bienvenue Admin!</strong>
                        </p>
                    </div>

                </div>
            </div>
        </header>

        <section class="ticket-section section-padding">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-10 mx-auto">
                        <form class="custom-form ticket-form mb-5 mb-lg-0" action="/AdLog" method="POST">
                            @csrf
                           
                           
                            <h2 class="text-center mb-4">Se connecter</h2>
                              @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nom</label>
                                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Nom" value="{{old('name')}}">
                                <span class="text-danger">@error('name') {{ $message }} @enderror </span>
                        
                              </div>
                              <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Mot de passe</label>
                                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Votre mot de passe"  value="{{old('password')}}" >
                                <span class="text-danger">@error('password') {{ $message }} @enderror </span>
                              </div>

                                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                    <button type="submit" class="form-control">Se connecter</button>
                                </div>
                                <hr>
                                <div class="justify-content-center">
                                <a href="/NewAdmin" >Nouveau Admin?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
    </main>


    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
           

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">Fly Party</h2>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>