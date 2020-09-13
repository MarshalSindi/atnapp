@extends('layouts.app')

@section('content')
    <h4>Localités:</h4>
    
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <a href="/localite/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm"></i> Ajouter</a> 
            </div>
            <table id="localite_table" class="table  shadow-lg table-bordered text-center">
                <thead class="bg-success text-center">
                    <tr>
                        <th>Id</th>
                        <th>Localité</th>
                        <th>Région</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($localites as $localite)
                        <tr>
                            <td>{{$localite->id}}</td>
                            <td>{{$localite->nomLocalite}}</td>
                            <td>{{$localite->nomRegion}}</td>
                            <td><a href="/localite/{{$localite->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                            <td><a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                {{$localites->links()}}
        </div>
    </div>
@endsection

@section('script')
    <script>
        // $(document).ready( function () {
        // $('#localite_table').DataTable({
        //     processing: true,
        //     serverSide: true,
        //     ajax: '{!! route('localite.index') !!}',
        //     columns: [
        //     { data: 'id', name: 'id' },
        //     { data: 'nomLocalite', name: 'nomLocalite' },
        //     { data: 'region.nomRegion', name: 'region.id'},
        //     {data:'action', name:'action'}
        // ]
        // });
        // } );
    </script>
@endsection