@extends("layouts.base")

@section("title", "Page d'accueil")

@section("titrePage", "Accueil")

@section("sousTitrePage", "Page d'accueil")

@section("contenu")

<div class="container">
    <h2 class="d-flex justify-content-center">Veuillez vous connecter svp</h2>
    <form action="{{ route('user.index') }}" method="POST">
        @csrf
        @method('POST')
        {{-- <div class="row"> --}}
            <div class="form-group ">
                <label class="control-label" for="">Email: </label>
                <input value="{{ old('email') }}" type="email" name="email"  class="form-control @error('email') is-invalid @enderror" placeholder=""  >
                {!! $errors->first('email', '<span class="error alert-danger">:message</span>') !!}
            </div>
            <div class="form-group ">
                <label for="">Mot de passe: </label>
                <input value="{{ old('password') }}" type="password" name="password"  class="form-control  @error('password') is-invalid @enderror" placeholder="">
                {!! $errors->first('password', '<span class="error alert-danger">:message</span>') !!}
            </div>

            <div class="form-group  ">
                <button type="submit" class=" btn btn-sm btn-success mr-1">Connexion</button>
                {{-- <button type="reset" class="btn btn-sm btn-danger">
                    <span><i class="fa fa-trash-o" aria-hidden="true"></i></span> Vider
                </button> --}}
            </div>
        {{-- </div> --}}
    </form>
</div>
{{-- @endauth --}}
{{-- <div class="jumbotron">
    <h1 class="display-3">Jumbo heading</h1>
    <p class="lead">Jumbo helper text</p>
    <hr class="my-2">
    <p>More info</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
    </p>
</div> --}}

@endsection
