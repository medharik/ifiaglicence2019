@extends('base')
@section('alert')
    {{$notice}}
@endsection
@section('main')
<table>
    <tr>
        <td>id</td>
        <td>libelle</td>
        <td>prix</td>
        <td>actions</td>
    </tr>
@foreach ($produits as $p)

<tr>
    <td>{{$p->id}}</td>
    <td>{{$p->libelle}}</td>
    <td>{{$p->prix}}</td>
    <td><a href="" class="btn">Supprimer</a>
    <a href="" class="btn">Modifier</a>
    <a href="{{url('produit/'.$p->id)}}" class="btn">Consulter</a></td>
</tr>
@endforeach
</table>
@endsection
