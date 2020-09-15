@extends('layouts.app')

@section('content')
    <h4>Livraison:</h4>
    
       
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                 <a href="/livraison/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm "></i> Ajouter</a> 
            </div>
            <table  class="table  table-bordered  shadow-lg text-center">
                <thead class=" bg-success text-center">
                    <tr>
                        <th>Date Livraison</th>
                        <th>Site</th>
                        <th>Quantité Livrée</th>
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
@endsection

@section('script')
    <script>
        
    </script>
@endsection