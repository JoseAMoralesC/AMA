@extends('adminlte::page')

@section('title', __('Estilos | Añadir'))

@section('content_header')
    <h1>{{ __('Estilos') }}</h1>
@stop
@section('content')
    <div class="card card-outline card-danger">
        <div class="card-header">
            <div class="row justify-content-end">
                <div class="btn-group">
                    <a href="{{ route('admin.estilos.index') }}" class="btn btn-dark btn-sm"><span class="fa fa-reply"></span><br>{{__('Volver')}}</a>
                </div>
            </div>
        </div>

        {{ Form::open(array('class' => 'form-horizontal', 'method' => 'post' , 'route' => 'admin.estilos.store')) }}
            @include('admin.aamm.estilos._form')
        {{ Form::close() }}
    </div>
@stop

@section('js')

@stop
