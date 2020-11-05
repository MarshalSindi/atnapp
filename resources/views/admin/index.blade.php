@extends('layouts.app')

@section('content')
    <h4>Utilisateur:</h4>
    
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
            <a href="/user/create" class="btn btn-primary ml-auto p-2 mb-2"><i class="fas fa-plus fa-sm"></i> Ajouter</a>
            </div> 
            <table id="" class="table table-bordered shadow-lg text-center">
                <thead class="bg-success">
                    <tr>
                       <th>Id</th>
                        <th>Utilisateur</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->roles()->get->plunk('role')}}</td>
                        <td><a href="{{route('user.edit', $user->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></td>
                        <td><a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a></td>
                      </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
   
    </script>
@endsection