@extends('layouts.app')

@section('content')
    <h4 class="text-center">Historique site de : <strong>{{$sites->nomSite}}</strong> </h4>
    <div class="row">
        <div class="col-md-3 ">
            <div class="card mb-3">
                <div class="card-header text-center">
                    
                       <div>Nom Site: {{$sites->nomSite}}</div>
                       <div>Longitude: {{$sites->longitude}}</div> 
                       <div>Latitude: {{$sites->latitude}}</div> 
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 m-auto">
            <table id="field_table" class="table table-bordered  text-center">
                <thead class="bg-success">
                    <tr>
                       <th>semaine1</th>
                       <th>Semaine2</th>
                       <th>Conso</th>
                       <th>Conso(J)</th>
                       <th>Heure</th>
                       <th>Conso Moyenne(L/H)</th>
                       <th>Durée Fnmt GE(J)</th>
                       <th>Conso(L/J)</th>
                       <th>Restant(J)</th>
                       <th>Date Rupture</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sites->controles as $site)
                        <tr>
                            <td>{{$site->semaine1}}</td>
                            <td>{{$site->semaine2}}</td>
                            <td>{{$site->conso}}</td>
                            <td>{{$site->duree_conso_jour}}</td>
                            <td>{{$site->duree_fonctionnement_ge}}</td>
                            <td>{{$site->conso_moyenne}}</td>
                            <td>{{$site->duree_fonctionnement_ge_jour}}</td>  
                            <td>{{$site->conso_site_jour}}</td>
                            <td>{{$site->dure_conso_restant}}</td>
                            <td>{{$site->date_rupture}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
             {{-- {{$sites->links()}} --}}
        </div>
    </div>
@endsection

@section('script')
<script>
    // 
 </script>
   
@endsection