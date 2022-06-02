@extends('layouts.main')

@section('container1')
    
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection

