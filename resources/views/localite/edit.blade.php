@extends('layouts.app')

@section('content')
<div class="col-md-6 m-auto">
    <div class="card shadow-lg">
        <div class="card-body">
            {!!Form::open(['action'=> ['LocaliteController@update', $localite->id], 'method'=>'POST'])!!}
                <div class="form-group">
                    {{Form::label('localite', 'Localité')}}
                    {{Form::text('nomLocalite', $localite->nomLocalite,['class'=>'form-control', 'placeholder'=>'Nom Localité'])}}
                </div>
                <div class="form-group">
                    {{Form::label('region', 'Région')}}
                    {{Form::select('region_id', $localite->region->pluck('nomRegion', 'id'), $localite->region_id,['class'=>' selectbox form-control'])}}
                </div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                <a href="/localite" class="btn btn-warning">Retour</a>
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