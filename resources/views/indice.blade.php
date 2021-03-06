<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('css/Hover-master/css/hover.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>SPECTRA</title>
</head>
<?php use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\Storage;?>
<body>
<header class="BGPrincipal">
        <h1>SPECTRA</h1>
        <div class="container">
            <nav>
                <input type="checkbox" id="nav" class="hidden">
                <label for="nav" class="nav-btn">
                    <i></i>
                    <i></i>
                    <i></i>
                </label>
                <div class="nav-wrapper" id="nav-wrapper">
                    <ul>
                        <li><a href="#" class="hvr-push">INICIO</a></li>
                        <li><a href="#" class="hvr-push">NOTICIAS</a></li>
                        <li><a href="#" class="hvr-push">DESTACADOS</a></li>
                        <li class="Filter" id="Filter"><a href="../resources/assets/Spectra/filter.html" class="hvr-push">FILTRAR</a></li>
                        <li><a href="#" class="hvr-push">BLOG</a></li>
                        <li><a href="{{ route('forum') }}" class="hvr-push">FORO</a></li>
                        <li><input type="search" placeholder="Buscar                                        &#xf002;"></li>
                        @if(Auth::check())
                        <li class="UserOptions">
                            <?php $user = Auth::user(); ?>
                            
                            <div class="dropdown">
                                <button class="dropdown-toggle ButtonUserMenu" data-toggle="dropdown"><img src="{{ asset('/storage/img/blank-profile.png') }}" alt="" class="img-user"><span class="PersonalName"></span>{{ $user->username }}</button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="UserMenu">
                                    <a href="" class="dropdown-item"><i class="fas fa-user"></i> Perfil</a>
                                    <a href="" class="dropdown-item"><i class="fas fa-cog"></i> Configuración</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                                </div>
                            </div>
                        </li>
                        @else
                         <li><a href="{{ route('log') }}" class="hvr-push"><i class="user fas fa-user"></i><span>REGÍSTRATE O INICIA SESIÓN</span></a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    @yield('sidebar')
    <div class="side-bar d-flex flex-wrap justify-content-center">
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Home"><img src="{{ asset('img/SideBar/home.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Microsoft"><img src="{{ asset('img/SideBar/microsoft2.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Apple"><img src="{{ asset('img/SideBar/apple.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Open Source"><img src="{{ asset('img/SideBar/ubuntu.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Google"><img src="{{ asset('img/SideBar/search.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Android"><img src="{{ asset('img/SideBar/android.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Programación"><img src="{{ asset('img/SideBar/code.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Machine Learning"><img src="{{ asset('img/SideBar/chip.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Cryptocurrencys"><img src="{{ asset('img/SideBar/bitcoin.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Seguridad Informática"><img src=".{{ asset('img/SideBar/security-on.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Videojuegos"><img src="{{ asset('img/SideBar/console-2.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Diseño"><img src="{{ asset('img/SideBar/layers.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Data Science"><img src="{{ asset('img/SideBar/big-data.svg') }}" alt=""></a>
        <a href="" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Publicaciones"><img src="{{ asset('img/SideBar/message.svg') }}" alt=""></a>
        <a href="Forum/Forum.html" class="hvr-push" data-toggle="tooltip" data-placement="right" title="Foro"><img src="{{ asset('img/SideBar/group.svg') }}" alt=""></a>
    </div>
    <div class="container-fluid MainGeneral">
    
        <main class="MainContainer row" id="MainContainer">
            <div class="col-lg-12">
                <div class="Contenido">
                    <h1 class="display-4">Destacados</h1>
                </div>
            </div>
        </main>
    </div>
    <footer class="container-fluid">
    @yield('footer')
        <div class="row FooterLogoContainer">
            <div class="col-12 FooterLogo"><h1>SPECTRA</h1></div>
        </div>
        <div class="row FollowContainer">
            <div class="col-12 Follow">
                <a href=""><span><i class="fab fa-facebook-f"></i></span></a>
                <a href=""><span><i class="fab fa-twitter"></i></span></a>
                <a href=""><span><i class="fab fa-instagram"></i></span></a>
                <a href=""><span><i class="fab fa-telegram-plane"></i></span></a>
                <a href=""><span><i class="fab fa-youtube"></i></span></a>
                <a href=""><span><i class="fas fa-envelope"></i></span></a>
            </div>
        </div>
        <div class="row FooterMenuContainer">
        
            <div class="col-lg-4 col-6 FooterCat">
                <h3>Categorías</h3>
                <a href=""><p>Microsoft</p></a>
                <a href=""><p>Apple</p></a>
                <a href=""><p>Open Source</p></a>
                <a href=""><p>Android</p></a>
                <a href=""><p>Google</p></a>
                <a href=""><p>Programación</p></a>
                <a href=""><p>Machine Learning</p></a>
                <a href=""><p>Cryptocurrencys</p></a>
                <a href=""><p>Seguridad Informática</p></a>
                <a href=""><p>Videojuegos</p></a>
                <a href=""><p>Diseño</p></a>
                <a href=""><p>Data Science</p></a>
            </div>
            <div class="col-lg-3 col-6 FooterMenu">
            @yield('footer')
                <h3>Menú</h3>
                <a href="">
                    <p>Inicio</p>
                </a>
                <a href="">
                    <p>Noticias</p>
                </a>
                <a href="">
                    <p>Destacados</p>
                </a>
                <a href="">
                    <p>Blog</p>
                </a>
                <a href="">
                    <p>Foro</p>
                </a>
                <a href="">
                    <p>Inicia Sesión o Regístrate</p>
                </a>
            </div>
            <div class="col-lg-5 col-12 FooterRight">
                <form action="" method="get">
                    <label for="EmailNews">RECIBE UN EMAIL AL DÍA CON LAS NOVEDADES DE SPECTRA</label>
                    <span><input type="email" name="EmailNews" id="EmailNews" placeholder="Corre Electrónico"></span>
                    <span><button type="submit" class="btn">Suscribir</button></span>
                </form>
                <div class="Copyright">
                    <a href=""><p>Equipo Editorial</p></a>
                    <a href=""><p>Condiciones de Uso</p></a>
                    <p>Copyright © Todos los Derechos Reservados</p>
                </div>
            </div>
        </div>
    
    </footer>
</body>
</html>