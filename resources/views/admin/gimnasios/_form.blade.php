<div class="card-body">
    <div class="form-group row {{ $errors->has('nombre') ? 'has-error' : ''}}">
        {{ Form::label('nombre', __('Nombre'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="col-sm-8 col-md-8 col-lg-8">
            {{ Form::text('nombre', isset($gimnasio->nombre) ? $gimnasio->nombre : "", array('class' => 'form-control', 'placeholder' => __('Nombre del gimnasio'), 'id' => 'nombre')) }}
            {!! $errors->first('nombre', '<p class="help-block" style="color:red;">:message *</p>') !!}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('precio') ? 'has-error' : ''}}">
        {{ Form::label('precio', __('Direccion'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-8 col-md-8 col-lg-8">
                {{ Form::text('direccion', isset($gimnasio->direccion) ? $gimnasio->direccion : "", array('class' => 'form-control', 'placeholder' => __('Direccion del gimnasio'), 'id' => 'direccion', 'step' => 'any')) }}
                {!! $errors->first('direccion', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4" id="altura-peso">
                {{ Form::number('cod_postal', isset($gimnasio->cod_postal) ? $gimnasio->cod_postal : "", array('class' => 'form-control', 'placeholder' => __('Codigo Postal'), 'id' => 'cod_postal')) }}
                {!! $errors->first('cod_postal', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
        </div>
    </div>
    <div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
        {{ Form::label('email', __('Contacto'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::email('email', isset($gimnasio->email) ? $gimnasio->email : "", array('class' => 'form-control', 'placeholder' => __('Email del gimnasio'), 'id' => 'email')) }}
                {!! $errors->first('email', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::text('telefono', isset($gimnasio->telefono) ? $gimnasio->telefono : "", array('class' => 'form-control', 'placeholder' => __('Telefono de contacto'), 'id' => 'telefono')) }}
            </div>
        </div>
    </div>
</div>

<div class="card-footer">
    <button type="submit" class="btn btn-dark float-right">{{ __('Aceptar') }}</button>
</div>

@push('js')
    <script>
        function inputSize(){
            if($(window).width() < 575){
                $('#cod_postal,#telefono').css({'margin-left':'auto', 'margin-top':'calc(0.375rem + 1px)'});
            }else{
                $('#cod_postal,#telefono').css({'margin-left':'0.8rem', 'margin-top':'auto'});
            }
        }

        $(document).ready(function(){
            inputSize();

            $(window).resize(function(){
                inputSize();
            });
        });
    </script>
@endpush
