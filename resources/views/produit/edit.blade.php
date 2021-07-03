@extends('layouts.base')

@section('title', 'Modification Produit')

@section('titrePage', 'Produit')

@section('sousTitrePage', 'Modification Produit')

@section('contenu')
@foreach ($errors as $message)
    {{ $message }}
@endforeach

<div class="container">
        <h2>Formulaire de Modification d'un Produit</h2>
        <form action="{{ route('produit.update', compact('produit')) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="form-group col-12 col-md-6">
                <label for="">Nom: </label>
                <input value="{{ old('nomprod') ?? $produit->nom }}" type="text" name="nomprod"  class="form-control" placeholder="" aria-describedby="helpId" >
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="">Prix: </label>
                <input value="{{ old('prixprod') ?? $produit->prix }}" type="number" name="prixprod"  class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="">Quantite en Stock: </label>
                <input value="{{ old('qtprod') ?? $produit->quantiteEnStock }}" type="number" name="qtprod"  class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="">Code: </label>
                <input value="{{ old('code') ?? $produit->code }}" type="text" name="codeprod"  class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="">Couleur: </label>
                <input value="{{ old('couleur') ?? $produit->couleur }}" type="color" name="couleurprod"  class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-12 col-md-6">
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="etat" id="etat" >
                    Actif &nbsp;&nbsp;&nbsp;&nbsp;
                  </label>
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="etat" id="etat">
                    Inactif
                  </label>
                </div>
            </div>
            <div class="form-group col-12 col-md-6 d-flex justify-content-end">
                <button type="submit" class=" btn btn-sm btn-success mr-1">Enregistrer</button>
                <button type="reset" class="btn btn-sm btn-danger">
                    <span><i class="fa fa-trash-o" aria-hidden="true"></i></span> Vider
                </button>
            </div>
        </div>


        </form>
    </div>


</div>

@endsection
