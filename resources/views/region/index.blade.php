@extends('layouts.app')
@section('content')
    <div class="container">
        <h4>Liste des Régions:</h4>
        <table id="" class="table table-bordered hover shadow-lg text-center">
            <thead class="bg-success">
                <tr>
                    <th>Id</th>
                    <th>Nom Région</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($regions as $region)
                    <tr>
                        <td>{{$region->id}}</td>
                        <td>{{$region->nomRegion}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            {{$regions->links()}}
    </div>
   
@endsection

@section('script')
    <script>
        // $(document).ready( function () {
        //     $('#region_table').DataTable({
        //         processing: true,
        //         serverSide: true,
        //         ajax: '{!! route('region.index') !!}',
        //         columns: [
        //         { data: 'id', name: 'id' },
        //         { data: 'nomRegion', name: 'nomRegion' },
        //         { data: 'action', name: 'action', orderable:false }
        //     ]
        //     });
        //     } );
    </script>
@endsection