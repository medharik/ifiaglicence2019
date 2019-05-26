@extends('base')
@section('alert')
    Consultation du produit : {{$p->libelle}}
@endsection
@section('main')
<ul>
    <li>Prix : {{$p->prix}}DHS</li>
    <li>Cree le : {{$p->created_at}}</li>
    <li>Cree le : {{$p->updated_at}}</li>
</ul>
@endsection
