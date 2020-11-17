@extends('layouts.app')

@section('content')
    <h4>Structure Sites:</h4>
    
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <a href="/structure/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm"></i> Ajouter</a>
            </div> 
            <table id="type_site_table" class="table table-bordered shadow-lg text-center">
                <thead class="bg-success">
                    <tr>
                       <th>Id</th>
                        <th>Structure du Site</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($structures as $structure)
                        <tr>
                            <td>{{$structure->id}}</td>
                            <td>{{$structure->structure}}</td>
                            <td><a href="structure/{{$structure->id}}/edit" class="text-info"><i class="fas fa-edit"></i></a></td>
                            <td><a href="structure/{{$structure->id}}/edit" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
    //    $(document).ready( function () {
    //         $('#type_site_table').DataTable({
    //             processing: true,
    //             serverSide: true,
    //             ajax: '{!! route('structure.index') !!}',
    //             columns: [
    //             { data: 'id', name: 'id' },
    //             { data: 'structure', name: 'structure' },
    //             {data: 'action', name:'action', orderable:false}
    //         ]
    //         });
    //         } );
    </script>
@endsection