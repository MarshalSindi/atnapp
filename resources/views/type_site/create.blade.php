@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> 'Type_siteController@store', 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('typeSite', 'Type Site')}}
                        {{Form::text('typeSite', '',['class'=>'form-control', 'placeholder'=>'Type de Site'])}}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/typesite" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection