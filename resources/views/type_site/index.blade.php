@extends('layouts.app')
{{-- @livewireStyles --}}
@section('content')
 {{-- @livewire('counter')  --}}
    <h4>Type Sites:</h4>
    
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <a href="/typesite/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm"></i> Ajouter</a>
            </div> 
            <table id="type_site_table" class="table table-bordered shadow-lg text-center">
                <thead class="bg-success">
                    <tr>
                       <th>Id</th>
                        <th>Type de Site</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($typesites as $typesite)
                        <tr>
                            <td>{{$typesite->id}}</td>
                            <td>{{$typesite->typeSite}}</td>
                            <td><a href="typesite/{{$typesite->id}}/edit" class="text-info"><i class="fas fa-edit"></i></a></td>
                            <td><a href="typesite/{{$typesite->id}}/edit" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- @livewireScripts --}}
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