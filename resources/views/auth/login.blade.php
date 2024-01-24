@extends('layouts.auth')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block bg-register-image">
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="{{ route('login') }}" class="user">
                                        @csrf

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0"><img
                                                    src="{{ asset('images/media/1705595435codeup-high-resolution-logo-transparent.png') }}"
                                                    width="100px" alt="codeup"></span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connectez-vous à votre
                                            compte</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email"
                                                class="form-control form-control-user  @error('email') is-invalid @enderror"
                                                placeholder="Adresse e-mail" value="{{ old('email') }}" autofocus />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password"
                                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                                placeholder="Mot de passe" name="password" id="password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block">Se connecter</button>
                                        </div>

                                        {{-- <a class="small text-muted" href="#!">Mot de passe oublié?</a> --}}
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Vous n'avez pas de compte ? <a
                                                href="{{ route('register') }}" style="color: #393f81;">Inscrivez-vous
                                                ici</a></p>
                                        {{-- <a href="#!" class="small text-muted">Conditions d'utilisation.</a>
                    <a href="#!" class="small text-muted">Politique de confidentialité</a> --}}
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
