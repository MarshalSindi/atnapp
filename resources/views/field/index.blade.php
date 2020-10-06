@extends('layouts.app')

@section('content')
    <h4>Fields:</h4>
    
    <div class="row">
       
        <div class="col-12"><div class="d-flex">
            <a href="/field/create" class="btn btn-primary btn-sm ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm"></i> Ajouter</a> 
        </div>
        
            <table id="field_table" class="table  table-bordered shadow-lg text-center">
                <thead class="bg-success">
                    <tr>
                       <th>Id</th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Asp</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fields as $field)
                        <tr>
                            <td>{{$field->id}}</td>
                            <td>{{$field->nomField}}</td>
                            <td>{{$field->telephone}}</td>
                            <td>{{$field->nomAsp}}</td>
                            <td><a href="/field/{{$field->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                            <td><a href="/field/{{$field->id}}" class="btn btn-warning btn-sm"><i class="fas fa-broadcast-tower"></i></a></td>
                            <td><a href="/field/{{$field->id}}/delete" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                    {{$fields->links()}}
        </div>
    </div>
@endsection

@section('script')
    <script>
    //    $(document).ready( function () {
            // $('#field_table').DataTable({
            //     processing: true,
            //     serverSide: true,
            //     ajax: '{!! route('field.index') !!}',
            //     columns: [
            //     { data: 'id', name: 'id' },
            //     { data: 'nomField', name: 'nomField' },
            //     { data: 'telephone', name: 'telephone'},
            //     {data: 'action', name:'action', orderable:false}
            // ]
            // });
            // } );
    </script>
@endsection