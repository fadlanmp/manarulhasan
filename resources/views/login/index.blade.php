@extends('layouts.main')

@section('container1')

    <div class="row justify-content-center" style="padding: 1rem">
        <div class="col-md-4">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center ">Masuk Terlebih Dahulu</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Ahmad22001">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                </form>
            </main>
        </div>
    </div>

@endsection