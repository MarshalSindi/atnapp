@extends('layouts.app')

@section('content')
    <h4>ASP:</h4>
    
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <a href="/asp/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm"></i> Ajouter</a>
            </div> 
            <table id="type_site_table" class="table table-bordered shadow-lg text-center">
                <thead class="bg-success">
                    <tr>
                       <th>Id</th>
                        <th>ASP</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($asps as $asp)
                       <tr>
                            <td>{{$asp->id}}</td>
                            <td>{{$asp->nomAsp}}</td>
                            <td><a href="asp/{{$asp->id}}/edit" class="text-info"><i class="fas fa-edit"></i></a></td>
                            <td><a href="asp/{{$asp->id}}/edit" class="text-danger"><i class="fas fa-trash"></i></a></td>
                       </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
  
@endsection