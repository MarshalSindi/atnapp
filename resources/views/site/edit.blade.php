@extends('layouts.app')

@section('content')
<div class="col-md-6 m-auto">
    <div class="card shadow-lg">
        <div class="card-body">
            {!!Form::open(['action'=> ['SiteController@update', $site->id], 'method'=>'POST'])!!}
            <div class="form-group">
                {{Form::label('site', 'Site')}}
                {{Form::text('nomSite', $site->nomSite,['class'=>'form-control', 'placeholder'=>'Nom du Site'])}}
            </div>
            <div class="form-group">
                {{Form::label('localite', 'Localite')}}
                {{Form::select('localite_id', $site->localite->pluck('nomLocalite', 'id'), $site->localite_id,['class'=>'form-control selectbox'])}}
            </div>
            <div class="form-group">
                {{Form::label('type_site', 'Type de Site')}}
                {{Form::select('type_site_id', $site->typeSite->pluck('typeSite', 'id'), $site->type_site_id,['class'=>'form-control selectbox'])}}
            </div>
            <div class="form-group">
                {{Form::label('structure', 'Structure du Site')}}
                {{Form::select('structure_id', $site->structure->pluck('structure', 'id'), $site->structure_id,['class'=>'form-control selectbox'])}}
            </div>
            <div class="form-group">
                {{Form::label('longitude', 'Longitude')}}
                {{Form::text('longitude', $site->longitude,['class'=>'form-control', 'placeholder'=>'Longitude'])}}
            </div>
            <div class="form-group">
                {{Form::label('latitude', 'Latitude')}}
                {{Form::text('latitude', $site->latitude,['class'=>'form-control', 'placeholder'=>'Latitude'])}}
            </div>
            
            
            
            <div class="form-group">
                {{Form::label('field', 'Field')}}
                {{Form::select('field_id', $site->field->pluck('nomField', 'id'), $site->field_id,['class'=>'form-control selectbox'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
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