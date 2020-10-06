@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> 'FieldController@store', 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('nomField', 'Nom Field')}}
                        {{Form::text('nomField', '',['class'=>'form-control', 'placeholder'=>'Nom Field'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('telephone', 'Téléphone')}}
                        {{Form::text('telephone', '' ,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('asp', 'ASP')}}
                        {{Form::select('asp_id', $asps->pluck('nomAsp','id'), null,['class'=>'selectbox form-control'])}}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/field" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    
@endsection