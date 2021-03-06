@extends('layouts.app')

@section('content')
    <h4>Sites:</h4>
    
       
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                 <a href="/site/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm "></i> Ajouter</a> 
            </div>
            <table id="site_table" class="table  table-bordered  shadow-lg text-center">
                <thead class=" bg-success text-center">
                    <tr>
                        <th>Id</th>
                        <th>Région</th>
                        <th>Localité</th>
                        <th>Site</th> 
                        <th>Type Site</th>
                        <th>Structure Site</th>
                        <th>Longitude</th>
                        <th>Latitude</th>
                        <th>Field</th>  
                        <th colspan="3">Action</th>                  
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sites as $site)
                        <tr>
                            
                            <td>{{$site->id}}</td>
                            <td>{{$site->nomRegion}}</td>
                            <td>{{$site->nomLocalite}}</td>
                            <td>{{$site->nomSite}}</td>
                            <td>{{$site->typeSite}}</td>
                            <td>{{$site->structure}}</td>
                            <td>{{$site->longitude}}</td>
                            <td>{{$site->latitude}}</td>
                            <td>{{$site->nomField}}</td>
                            <td><a href="/site/{{$site->id}}/edit" class="text-info"><i class="fas fa-edit"></i></a></td>
                            <td><a href="/site/{{$site->id}}" class="text-warning"><i class="fas fa-history"></i></a></td>
                            <td><a href="" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                {{$sites->links()}}
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