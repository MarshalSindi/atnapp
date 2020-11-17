@extends('layouts.app')

@section('content')
<div class="col-md-6 m-auto">
    <div class="card shadow-lg">
        <div class="card-body">
            {!!Form::open(['action'=> ['LivraisonController@update', $livraison->id], 'method'=>'POST'])!!}
                <div class="form-group">
                    {{Form::label('site', 'Site')}}
                    {{Form::select('site_id', $livraison->site->pluck('nomSite', 'id'), $livraison->site_id,['class'=>' selectbox form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('date_relever', 'Date Relever')}}
                    {{Form::date('date_livraison', $livraison->date_livraison,['class'=>'form-control', 'placeholder'=>'Date Relever'])}}
                </div>
                <div class="form-group">
                    {{Form::label('qte_avant', 'Quantité Avant (L)')}}
                    {{Form::text('qte_avant', $livraison->qte_avant,['class'=>'form-control', 'placeholder'=>'Quantité Avant'])}}
                </div>
                <div class="form-group">
                    {{Form::label('qte_livre', 'Quantité Livrée')}}
                    {{Form::text('qte_livre', $livraison->qte_livre,['class'=>'form-control', 'placeholder'=>'Quantité Livrée'])}}
                </div>
                <div class="form-group">
                    {{Form::label('compteur', 'Heure de Marche')}}
                    {{Form::text('compteur', $livraison->compteur,['class'=>'form-control', 'placeholder'=>'Quantité Livrée'])}}
                </div>
                <div class="form-group">
                    {{Form::label('observation', 'Observation')}}
                    {{Form::text('observation', $livraison->observation,['class'=>'form-control', 'placeholder'=>'Observation'])}}
                </div>
                {{Form::hidden('_method', 'PUT')}}
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