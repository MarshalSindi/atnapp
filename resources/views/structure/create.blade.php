@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> 'StructureController@store', 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('structure', 'Structure')}}
                        {{Form::text('structure', '',['class'=>'form-control', 'placeholder'=>'Structure du Site'])}}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/structure" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection