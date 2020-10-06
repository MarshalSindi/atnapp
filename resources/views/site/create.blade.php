@extends('layouts.app')

@section('content')
<div class="col-md-6 m-auto">
    <div class="card shadow-lg">
        <div class="card-body">
            {!!Form::open(['action'=> 'SiteController@store', 'method'=>'POST'])!!}
                <div class="form-group">
                    {{Form::label('nomSite', 'Nom Site')}}
                    {{Form::text('nomSite', '',['class'=>'form-control', 'placeholder'=>'Nom Site'])}}
                </div>
                <div class="form-group">
                    {{Form::label('localite', 'Localité')}}
                    {{Form::select('localite_id', $localites->pluck('nomLocalite','id'), null,['class'=>'form-control selectbox'])}}
                </div>
                <div class="form-group">
                    {{Form::label('typeSite', 'Type de Site')}}
                    {{Form::select('type_site_id', $typesites->pluck('typeSite','id'), null,['class'=>'form-control selectbox'])}}
                </div> 
                <div class="form-group">
                    {{Form::label('longitude', 'Longitude')}}
                    {{Form::text('longitude', '',['class'=>'form-control', 'placeholder'=>'Longitude'])}}
                </div>
                <div class="form-group">
                    {{Form::label('latitude', 'Latitude')}}
                    {{Form::text('latitude', '',['class'=>'form-control', 'placeholder'=>'Latitude'])}}
                </div>
                <div class="form-group">
                    {{Form::label('field', 'Field')}}
                    {{Form::select('field_id', $fields->pluck('nomField','id'), null,['class'=>'form-control selectbox'])}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                <a href="/site" class="btn btn-warning">Retour</a>
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