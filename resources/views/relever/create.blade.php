@extends('layouts.app')

@section('content')
<div class="col-md-6 m-auto">
    <div class="card shadow-lg">
        <div class="card-body">
            {!!Form::open(['action'=> 'ReleverController@store', 'method'=>'POST'])!!}
                <div class="form-group">
                    {{Form::label('nomSite', 'Site')}}
                    {{Form::select('site_id', $site->pluck('nomSite','id'), null,['class'=>'form-control selectbox'])}}
                </div>
                <div class="form-group">
                    {{Form::label('date_relever', 'Date Relever')}}
                    {{Form::date('date_relever', '',['class'=>'form-control', 'placeholder'=>'Date Relever'])}}
                </div>
                <div class="form-group">
                    {{Form::label('qte_relever', 'Niveau Cuve(L)')}}
                    {{Form::text('qte_relever', '',['class'=>'form-control', 'placeholder'=>'Niveau Cuve'])}}
                </div>
                <div class="form-group">
                    {{Form::label('compteur', 'Heure de Marche(H)')}}
                    {{Form::text('compteur', '',['class'=>'form-control', 'placeholder'=>'Heure de Marche'])}}
                </div>
                
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                <a href="/relever" class="btn btn-warning">Retour</a>
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