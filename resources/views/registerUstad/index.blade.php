@extends('layouts.main')

@section('container1')

    <div class="row justify-content-center" style="padding: 1rem">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center ">Tambah Ustad</h1>
                <form action="/registerUstad" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Nama" required value="{{old('name')}}">
                        <label for="name">Nama</label>
                        @error ('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="kitab" class="form-control @error('kitab') is-invalid @enderror" id="kitab" placeholder="Kitab" required value="{{old('kitab')}}">
                        <label for="kitab">Kitab yang diampu</label>
                        @error ('kitab')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{old('username')}}">
                        <label for="username">Username</label>
                        @error ('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error ('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Tambah Santri</button>
                </form>
            </main>
        </div>
    </div>

@endsection