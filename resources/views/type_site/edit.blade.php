@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> ['Type_siteController@update', $typesite->id], 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('type_site', 'Type de Site')}}
                        {{Form::text('typesite', $typesite->typeSite,['class'=>'form-control', 'placeholder'=>'Type de Site'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/groupe_electrogene" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    
@endsection