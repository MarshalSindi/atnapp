@extends('layouts.app')

@section('content')
    <h4>Controle de la Consommation:</h4>
    
       
    <div class="row">
        <div class="col-12">
            
            <table  class="table  table-bordered  shadow-lg text-center">
                <thead class=" bg-success text-center">
                    <tr>
                        <th>Site</th>
                        <th>Conso Total</th>
                        <th>Nbre Jour</th>
                        <th>Durée Fnmt GE (H)</th>
                        <th>Conso Moyenne(L/H)</th>
                        <th>Durée Fnmt (J)</th>
                        <th>Conso (L/J)</th>
                                         
                    </tr>
                </thead>
                <tbody>
                    @foreach ($controles as $controle)
                        <tr>
                            <td>{{$controle->nomSite}}</td>
                            <td>{{$controle->conso}}</td>
                            <td>{{$controle->duree_conso_jour}}</td>
                            <td>{{$controle->duree_fonctionnement_ge}}</td>
                            <td>{{$controle->conso_moyenne}}</td>
                            <td>{{$controle->duree_fonctionnement_ge_jour}}</td>  
                            <td>{{$controle->conso_site_jour}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                {{$controles->links()}}
        </div>
    </div>
@endsection

@section('script')
    <script>
        
    </script>
@endsection