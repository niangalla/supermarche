@extends('layouts/master', ['title' => 'Contact'])
@section('content')
@include('layouts/partials/_nav')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card text-center mt-3">
                  <img class="card-img-top" src="holder.js/100px180/" alt="">
                  <div class="card-body bg-primary" >
                    <h4 class="card-title text-white">Contact</h4>
                    <p class="card-text">Page de contact veuillez remplir le formulaire svp!</p>
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection
