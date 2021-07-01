@extends('layouts.master')

@section('title', 'Details produits')

@section('titrePage', 'Produits')

@section('sousTitrePage', 'Détails Produits')

@section('contenu')

<div class="row">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="https://rapidos.sn/wp-content/uploads/2020/05/PRESSEA-MANGUE-PASSION.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">{{ $produit->nom }}</h4>
                <p class="card-text">
                    <span class="bridge bridge-primary">
                        {{ $produit->prix }} FCFA
                    </span>
                    <span class="bridge bridge-secondary">
                        {{ $produit->quantiteEnStock }} unité(s)
                    </span>
                </p>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-sm btn-primary ml-1" href="{{ route('produit.edit',['produit' => $produit]) }}">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <button type="button" class="btn btn-sm btn-danger ml-1">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-8">
        <div class="card">
            <div class="card-body">
                <blockquote class="blockquote">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Veniam obcaecati rerum dolor voluptas, vero explicabo tempora nisi atque
                        repellat odio temporibus consequuntur accusamus iusto tenetur,
                        culpa quae non, delectus error.
                    </p>
                    <footer class="card-blockquote">Footer<cite title="Source title">Source title</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>

@endsection
