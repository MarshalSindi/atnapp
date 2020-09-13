@extends('layouts.app')

@section('content')

<div class="col-md-6 m-auto">
    <div class="card shadow-lg">
        <div class="card-body">
            {!!Form::open(['action'=> 'Groupe_electrogeneController@store', 'method'=>'POST'])!!}
                <div class="form-group">
                    {{Form::label('marque', 'Marque')}}
                    {{Form::text('marque', '',['class'=>'form-control', 'placeholder'=>'Marque du Groupe'])}}
                </div>
                <div class="form-group">
                    {{Form::label('puissanceGroupe', 'puissanceGroupe (kva)')}}
                    {{Form::text('puissance_groupe','',['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('capacite_cuve', 'capaciteCuve (L)')}}
                    {{Form::text('capacite_cuve','',['class'=>'form-control'])}}
                </div>
                
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                <a href="/groupe_electrogene" class="btn btn-warning">Retour</a>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection