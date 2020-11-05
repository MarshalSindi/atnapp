@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> ['Admin\UsersController@update', $user->id], 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', $user->name,['class'=>'form-control', 'placeholder'=>'Nom utilisateur'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('email', 'Email')}}
                        {{Form::text('email', $user->email,['class'=>'form-control', 'placeholder'=>'Email'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('name', 'Rôle')}}
                        {{Form::select('role', $roles->pluck('role', 'id'),null,['class'=>'form-control', 'placeholder'=>'Rôle'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/asp" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    
@endsection