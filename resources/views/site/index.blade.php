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
                        <th>Région</th>
                        <th>Localité</th>
                        <th>Site</th> 
                        <th>Type Site</th>
                        <th>Field</th>  
                        <th colspan="2">Action</th>                  
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sites as $site)
                        <tr>
                            
                            <td>{{$site->nomRegion}}</td>
                            <td>{{$site->nomLocalite}}</td>
                            <td>{{$site->nomSite}}</td>
                            <td>{{$site->typeSite}}</td>
                            <td>{{$site->nomField}}</td>
                            <td><a href="/site/{{$site->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                            <td><a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
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