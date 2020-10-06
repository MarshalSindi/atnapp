@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> ['FieldController@update', $field->id], 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('nomField', 'Nom du Field')}}
                        {{Form::text('nomField', $field->nomField,['class'=>'form-control', 'placeholder'=>'Nom Field'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('telephone', 'Téléphone')}}
                        {{Form::text('telephone', $field->telephone,['class'=>'form-control', 'placeholder'=>'téléphone'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('ap', 'Asp')}}
                        {{Form::select('asp_id', $field->asp->pluck('nomAsp', 'id'), $field->asp_id,['class'=>' selectbox form-control'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/field" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    
@endsection