@extends('layouts/master', ['title' => 'Dashboard'])

@section('content')
@include('layouts/partials/_nav')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card text-white bg-primary mt-3">
                  <img class="card-img-top" src="holder.js/100px180/" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Dashboard</h4>
                    <p class="card-text">Welcome to your Dashboard</p>
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection
