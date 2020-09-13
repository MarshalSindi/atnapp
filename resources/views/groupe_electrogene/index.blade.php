@extends('layouts.app')

@section('content')
    <h4>Groupe Electrogene:</h4>
     
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <a href="/groupe_electrogene/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm"></i> Ajouter</a>
            </div>
                
                <table id="groupe_table" class="table table-bordered rounded shadow-lg text-center">
                    <thead class="text-center bg-success">
                        <tr>
                            <th>Id</th>
                            <th>Marque</th>
                            <th>Capacité Cuve (L)</th>
                            <th>Puissance Ge (Kva)</th> 
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($groupes as $groupe)
                            <tr>
                                <td>{{$groupe->id}}</td>
                                <td>{{$groupe->marque}}</td>
                                <td>{{$groupe->capacite_cuve}}</td>
                                <td>{{$groupe->puissance_groupe}}</td>
                                <td><a href="groupe_electrogene/{{$groupe->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                                <td><a href="groupe_electrogene/{{$groupe->id}}/edit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$groupes->links()}}
        </div>
    </div>
@endsection

@section('script')
    <script>
        // $(document).ready( function () {
        //     $('#groupe_table').DataTable({
        //         processing: true,
        //         serverSide: true,
        //         ajax: '{!! route('groupe_electrogene.index') !!}',
        //         columns: [
        //         { data: 'id', name: 'id' },
        //         { data: 'marque', name: 'marque' },
        //         { data: 'capacite_cuve', name: 'capacite_cuve'},
        //         { data: 'puissance_groupe', name: 'puissance_groupe'},
        //         {data: 'action', name:'action', orderable:false}
        //     ]
        //     });
        //     } );
    </script>  
@endsection