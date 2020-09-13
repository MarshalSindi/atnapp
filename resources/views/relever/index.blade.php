@extends('layouts.app')

@section('content')
    <h4>Relever:</h4>
    
       
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                 <a href="/relever/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm "></i> Ajouter</a> 
            </div>
            <table  class="table  table-bordered  shadow-lg text-center">
                <thead class=" bg-success text-center">
                    <tr>
                        <th>ID</th>
                        <th>Site</th>
                        <th>Date Relever</th>
                        <th>Niveau Cuve (L)</th>
                        <th>Heure de Marche (H)</th>  
                        <th colspan="2">Action</th>                  
                    </tr>
                </thead>
                <tbody>
                  @foreach ($relevers as $relever)
                      <tr>
                        <td>{{$relever->id}}</td>
                        <td>{{$relever->nomSite}}</td>
                        <td>{{$relever->date_relever}}</td>
                        <td>{{$relever->qte_relever}}</td>
                        <td>{{$relever->compteur}}</td>
                        <td><a href="/relever/{{$relever->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                        <td><a href="/relever/{{$relever->id}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
                {{$relevers->links()}}
        </div>
    </div>
@endsection

@section('script')
    <script>
        //  $(document).ready( function () {
        // $('#site_table').DataTable({
        //     processing: true,
        //     serverSide: true,
        //     ajax: '{!! route('site.index') !!}',
        //     columns: [
        //     { data: 'nomSite', name: 'nomSite' },
        //     { data: 'localite.nomLocalite', name: 'localite.id'},
        //     { data: 'type_site.typeSite', name: 'type_site.id'},
        //     { data: 'field.nomField', name: 'field.id'},
        //     {data:'action', name:'action'}
        // ]
        // });
        // } );
    </script>
@endsection