<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        {{-- Bootstrap Icon --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        {{-- my CSS --}}
        <link rel="stylesheet" href="style.css">

        <title>PP Manarul Hasan</title>
    </head>
    <body id="home">
        {{-- awal Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #32502E;">
            <div class="container">
            <a class="navbar-brand" href="#">PP Manarul Hasan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#lokasi">Lokasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Masuk</a>
                </li>

            </div>
            </div>
        </nav>
        {{-- akhir Navbar --}}

        {{-- awal Jumbotron --}}
        <section class="jumbotron text-center" style="padding: 5rem">
            <h1 class="display-4">SELAMAT DATANG </h1>
            <p class="lead">DI WEBSITE RESMI PP MANARUL HASAN</p>
        </section>
        {{-- akhir Jumbotron --}}
        
        {{-- awal Tentang --}}
        <section id="tentang">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="coL">
                        <h2>Tentang</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 text-center">
                    <div class="col-md-4 mb-3">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et minus doloribus odio cumque voluptatibus eaque provident adipisci deserunt commodi repellendus, dicta ut necessitatibus assumenda iusto mollitia quod. Doloribus, vel quasi?</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt nihil natus cum doloremque eum eos enim sequi. Itaque iure, labore hic deleniti earum natus a libero! Rem ab culpa enim?</p>
                    </div>
                </div>    
            </div>
        </section>
        {{-- akhir Tentang --}}
            
        {{-- awal Lokasi --}}
        <section id="lokasi" >
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="coL">
                        <h2>Lokasi</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 text-center">
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="maps.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt nihil natus cum doloremque eum eos enim sequi. Itaque iure, labore hic deleniti earum natus a libero! Rem ab culpa enim?</p>
                    </div>
                </div>    
            </div>
        </section>
        {{-- akhir Lokasi --}}

        {{-- awal Kontak --}}
        <section id="kontak">
            <div class="container">
                <div class="row text-center mb-3">
                    <div class="coL">
                        <h2>Kontak</h2>
                    </div>
                </div>
                <div class="row justify-content-center fs-5 text-center">
                    <div class="col-md-3 mb-2">
                        <p><i class="bi bi-instagram"> Instagram</i></p>
                    </div>
                    <div class="col-md-3 mb-2">
                        <p><i class="bi bi-youtube"> YouTube</i></p>
                    </div>
                    <div class="col-md-3 mb-2">
                        <p><i class="bi bi-facebook"> Facebook</i></p>
                    </div>
                    <div class="col-md-3 mb-2">
                        <p><i class="bi bi-envelope"> E-mail</i></p>
                    </div>
                </div>    
            </div>
        </section>
        {{-- akhir Kontak --}}

        {{-- awal Footer --}}
        <footer class="text-center text-white">
            <p>PP Manarul Hasan 2022</p>
        </footer>
        {{-- akhir Footer --}}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    </body>
</html>

