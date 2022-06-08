@extends('adminlte::page')

@section('title', __('Reglamentos | Añadir'))

@section('content_header')
    <h1>{{ __('Reglamentos') }}</h1>
@stop
@section('content')
    <div class="card card-outline card-danger">
        <div class="card-header">
            <div class="row justify-content-end">
                <div class="btn-group">
                    <a href="{{ route('admin.reglamentos.index') }}" class="btn btn-dark btn-sm"><span class="fa fa-reply"></span><br>{{__('Volver')}}</a>
                </div>
            </div>
        </div>

        {{ Form::open(array('class' => 'form-horizontal', 'method' => 'post' , 'route' => 'admin.reglamentos.store')) }}
            @include('admin.aamm.reglamentos._form')
        {{ Form::close() }}
    </div>
@stop

@section('js')

@stop
