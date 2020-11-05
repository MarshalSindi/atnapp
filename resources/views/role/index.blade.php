@extends('layouts.app')

@section('content')
    <h4>Roles:</h4>
    
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <a href="role/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm"></i> Ajouter</a>
            </div> 
            <table id="type_site_table" class="table table-bordered shadow-lg text-center">
                <thead class="bg-success">
                    <tr>
                       <th>Id</th>
                        <th>Rôle</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($roles as $role)
                      <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->role}}</td>
                        <td><a href="role/{{$role->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                        <td><a href="role/{{$role->id}}/edit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
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
    //             ajax: '{!! route('typesite.index') !!}',
    //             columns: [
    //             { data: 'id', name: 'id' },
    //             { data: 'typeSite', name: 'typeSite' },
    //             {data: 'action', name:'action', orderable:false}
    //         ]
    //         });
    //         } );
    </script>
@endsection