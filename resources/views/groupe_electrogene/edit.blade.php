@extends('layouts.app')

@section('content')
    <div class="col-md-6 m-auto">
        <div class="card shadow-lg">
            <div class="card-body">
                {!!Form::open(['action'=> ['Groupe_electrogeneController@update', $groupe_electrogene->id], 'method'=>'POST'])!!}
                    <div class="form-group">
                        {{Form::label('num_serie', 'Numéro de Serie')}}
                        {{Form::text('num_serie', $groupe_electrogene->num_serie,['class'=>'form-control', 'placeholder'=>'Marque'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('marque', 'Marque Du Groupe')}}
                        {{Form::text('marque', $groupe_electrogene->marque,['class'=>'form-control', 'placeholder'=>'Marque'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('capacite_cuve', 'Capacité Cuve')}}
                        {{Form::text('capacite_cuve', $groupe_electrogene->capacite_cuve,['class'=>'form-control', 'placeholder'=>'téléphone'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('puissance_groupe', 'Puissance du Groupe')}}
                        {{Form::text('puissance_groupe', $groupe_electrogene->puissance_groupe,['class'=>'form-control', 'placeholder'=>'téléphone'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    <a href="/groupe_electrogene" class="btn btn-warning">Retour</a>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    
@endsection