@extends('layouts.app')

@section('content')
<div class="col-md-6 m-auto">
    <div class="card shadow-lg">
        <div class="card-body">
            {!!Form::open(['action'=> 'LocaliteController@store', 'method'=>'POST'])!!}
                <div class="form-group">
                    {{Form::label('nomLocalite', 'Localité')}}
                    {{Form::text('nomLocalite', '',['class'=>'form-control', 'placeholder'=>'Nom Localité'])}}
                </div>
                <div class="form-group">
                    {{Form::label('region', 'Région')}}
                    {{Form::select('region_id', $regions->pluck('nomRegion','id'), null,['class'=>'selectbox form-control'])}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                <a href="/localite" class="btn btn-warning">Retour</a>
            {!!Form::close()!!}
        </div>
    </div>
</div>
    @section('script')
        <script>
             $('.selectbox').select2({
                width: 'resolve',
                placeholder: "Select Region"
             }
            );
        </script>
    @endsection
@endsection