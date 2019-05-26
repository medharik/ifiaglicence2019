@extends('base')
@section('alert')
    <h2>Nouveau produit</h2>
@endsection
@section('main')
<div class="row">
    <div class="col-md-6 mx-auto shadow">
<form action="{{route('produit.store')}}" method="post">
    @csrf
    <div class="from-group">
        <label for="">Libelle</label>
        <input name="libelle" type="text" class="form-control">
    </div>
    <div class="from-group"><label for="">Prix</label><input type="text" name="prix" class="form-control"></div>
    <div class="from-group"><label for=""></label><input type="submit" value="valider"
        class="btn btn-sm btn-primary"></div>
</form>

    </div>
</div>

@endsection
