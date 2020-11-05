@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> ['StructureController@update', $structure->id], 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('Structure', 'Type de Site')}}
                        {{Form::text('structure', $structure->structure,['class'=>'form-control', 'placeholder'=>'Structure du Site'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/structure" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    
@endsection