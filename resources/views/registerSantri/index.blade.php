@extends('layouts.main')

@section('container1')

    <div class="row justify-content-center" style="padding: 1rem">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center ">Tambah User</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top " id="name" placeholder="Nama">
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating">
                        <input type="int" name="kelas" class="form-control" id="kelas" placeholder="1">
                        <label for="kelas">Kelas</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Tambah Santri</button>
                </form>
            </main>
        </div>
    </div>

@endsection