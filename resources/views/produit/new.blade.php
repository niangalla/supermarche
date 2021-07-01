@extends('layouts.master')

@section('title', 'Creation Produit')

@section('titrePage', 'Produit')

@section('sousTitrePage', 'Creation Produit')

@section('contenu')
@foreach ($errors as $message)
    {{ $message }}
@endforeach

<div class="container">
        <h2>Formulaire de Creation d'un Produit</h2>
        <form action="{{ route('produit.store') }}" method="POST">
            @csrf
            @method('POST')
        <div class="row">
            <div class="form-group col-12 col-md-6">
                <label for="">Nom: </label>
                <input value="{{ old('nom') }}" type="text" name="nomprod"  class="form-control @error('nomprod') is-invalid @enderror" placeholder="" aria-describedby="helpId" >
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="">Prix: </label>
                <input value="{{ old('prix') }}" type="number" name="prixprod"  class="form-control  @error('prixprod') is-invalid @enderror" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="">Quantite en Stock: </label>
                <input value="{{ old('qtprod') }}" type="number" name="qtprod"  class="form-control  @error('qtprod') is-invalid @enderror" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="">Code: </label>
                <input value="{{ old('code') }}" type="text" name="codeprod"  class="form-control  @error('codeprod') is-invalid @enderror" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="">Couleur: </label>
                <input value="{{ old('couleur') }}" type="color" name="couleurprod"  class="form-control  @error('couleurprod') is-invalid @enderror" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-12 col-md-6">
                <label for="">Etat: &nbsp;</label>
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
