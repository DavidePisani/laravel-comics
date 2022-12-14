<header>
   
    <!-- Header logo -->
    <div class="header-top">
        <div class="container-top">
            <span>DC POWER VISA</span>
            <span>ADDICTIONAL DC SITES</span>
        </div>
     </div>
    <div class="container">
       
        <div class="logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="Dc logo">
        </div>

    <!-- Header nav -->
        <nav>
            <ul class="menu">
                <li>
                    <a href="#">CHARACTERS</a>
                </li>

                <li class="{{ Route::current()->getName() === 'comics' ? 'current' : '' }}">
                    <a href="{{ route('comics') }}">COMICS</a>
                </li>

                <li>
                    <a href="#">MOVIES</a>
                </li>

                <li>
                    <a href="#">TV</a>
                </li>

                <li>
                    <a href="#">GAMES</a>
                </li>

                <li>
                    <a href="#">COLLECTIBLES</a>
                </li>

                <li>
                    <a href="#">VIDEO</a>
                </li>

                <li>
                    <a href="#">FUNS</a>
                </li>

                <li>
                    <a href="#">NEWS</a>
                </li>

                <li class="{{ Route::current()->getName() === 'single-comics' ? 'current' : '' }}">
                    <a  href="#">SHOP</a>
                </li>
            </ul>
        </nav>

        <div class="btn">
            search <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>

    <section class="jumbotron">

        <img src="{{asset('img/jumbotron.jpg')}}" alt="Banner DC">
   </section>
</header>