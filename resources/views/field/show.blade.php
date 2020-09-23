@extends('layouts.app')

@section('content')
    <h4>Site de: <strong>{{$sites->nomField}}</strong> </h4>
    
    <div class="row">
        <div class="col-md-10 m-auto">
            <table id="field_table" class="table table-striped table-bordered shadow-lg text-center">
                <thead class="bg-success">
                    <tr>
                       <th>Id</th>
                        <th>Sites</th>
                         <th>Localite</th>
                        <th>Région</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sites->sites as $site)
                        <tr>
                            <td>{{$site->id}}</td>
                            <td>{{$site->nomSite}}</td>
                            <td>{{$site->localite->nomLocalite}}</td>
                            <td>{{$site->localite->region->nomRegion}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
             {{-- {{$sites->links()}} --}}
        </div>
    </div>
@endsection

@section('script')
<script>
    // 
 </script>
   
@endsection