@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> ['AspController@update', $asp->id], 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('asp', 'Asp')}}
                        {{Form::text('nomAsp', $asp->nomAsp,['class'=>'form-control', 'placeholder'=>'Nom du ASP'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/asp" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    
@endsection