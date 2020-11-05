@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> 'RoleController@store', 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('role', 'Rôle')}}
                        {{Form::text('role', '',['class'=>'form-control', 'placeholder'=>'Rôle'])}}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/role" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection