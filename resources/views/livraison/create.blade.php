@extends('layouts.app')

@section('content')
<div class="col-md-6 m-auto">
    <div class="card shadow-lg">
        <div class="card-body">
            {!!Form::open(['action'=> 'LivraisonController@store', 'method'=>'POST'])!!}
                <div class="form-group">
                    {{Form::label('nomSite', 'Site')}}
                    {{Form::select('site_id', $site->pluck('nomSite','id'), null,['class'=>'form-control selectbox'])}}
                </div>
                <div class="form-group">
                    {{Form::label('date_livraison', 'Date Livraison')}}
                    {{Form::date('date_livraison', '',['class'=>'form-control', 'placeholder'=>'Date Livraison'])}}
                </div>
                <div class="form-group">
                    {{Form::label('qte_avant', 'Niveau Cuve Avant (L)')}}
                    {{Form::text('qte_avant', '',['class'=>'form-control', 'placeholder'=>'Niveau Cuve Avant'])}}
                </div>
                <div class="form-group">
                    {{Form::label('qte_livre', 'Quantité Livré (L)')}}
                    {{Form::text('qte_livre', '',['class'=>'form-control', 'placeholder'=>'Quantité Livré'])}}
                </div>
                <div class="form-group">
                    {{Form::label('compteur', 'Heure de Marche(H)')}}
                    {{Form::text('compteur', '',['class'=>'form-control', 'placeholder'=>'Heure de Marche'])}}
                </div>
                <div class="form-group">
                    {{Form::label('observation', 'Observation')}}
                    {{Form::textarea('observation', '',['class'=>'form-control', 'placeholder'=>'Observation'])}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                <a href="/livraison" class="btn btn-warning">Retour</a>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection

@section('script')
        <script>
             $('.selectbox').select2({
                width: 'resolve',
                placeholder: "Select Region"
             }
            );
        </script>
    @endsection