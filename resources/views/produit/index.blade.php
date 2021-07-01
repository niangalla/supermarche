@extends('layouts.master')

@section('title', 'Liste des produits')

@section('titrePage', 'Produit')

@section('sousTitrePage')
<div class="row">
    <div class="col-md-6">
        Liste Produit
    </div>
    <div class="col-md-6 d-flex justify-content-end ">
        <a href="{{ route('produit.create') }}" class="col-2 btn btn-sm btn-primary d-flex justify-content-center">
            <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
        </a>
    </div>
</div>


@endsection

@section('contenu')
<div class="row">

</div>
<div class="row">
    @foreach ($produits as $produit)
    <div class="col-12 col-md-6 col-lg-4">

        <div class="card">
            <img style="height: 150px" class="card-img-top" src="https://rapidos.sn/wp-content/uploads/2020/05/PRESSEA-MANGUE-PASSION.jpg" alt="">
            <div class="card-body">
                <h4 class="card-title">{{ $produit->nom }}</h4>
                <p class="card-text">
                    <span class="badge badge-primary">{{  $produit->prix  }} FCFA</span>
                    <span class="badge badge-secondary">{{ $produit->quantiteEnStock }} unité(s)</span>
                </p>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-sm btn-primary ml-1" href="{{ route('produit.show', ['produit' => $produit]) }}">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('produit.edit', compact('produit')) }}" class="btn btn-sm btn-warning ml-1" >
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <form action="{{ route('produit.destroy', compact('produit')) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger ml-1">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection
