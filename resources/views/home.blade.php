@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Récaputulatif') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table  class="table  table-bordered  shadow-lg text-center">
                        <thead class=" bg-success text-center">
                            <tr>
            
                                <th>Site</th>
                                <th>Niveau Cuve</th>
                                <th>Conso(J/L)</th>
                                <th>Marche(J/H)</th>
                                
                                <th>Niveau Cuve (Avant)</th>
                                <th>Niveau Cuve (Après)</th>
                                <th>Heure de Marche (H)</th>
                                <th colspan="2">Action</th>                  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($livraisons as $livraison)
                                <tr>
                                    <td>{{$livraison->date_livraison}}</td>
                                    <td>{{$livraison->nomSite}}</td>
                                    <td>{{$livraison->qte_livre}}</td>
                                    <td>{{$livraison->qte_avant}}</td>
                                    <td>{{$livraison->total}}</td>
                                    <td>{{$livraison->compteur}}</td>
                                    <td><a href="/livraison/{{$livraison->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="/livraison/{{$livraison->id}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
