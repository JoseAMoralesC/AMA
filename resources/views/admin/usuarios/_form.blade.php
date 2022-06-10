<div class="card-body">
    <div class="form-group row {{ $errors->has('nombre') ? 'has-error' : ''}}">
        {{ Form::label('nombre', __('Nombre'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="col-sm-8 col-md-8 col-lg-8">
            {{ Form::text('nombre', isset($usuario->nombre) ? $usuario->nombre : "", array('class' => 'form-control', 'placeholder' => __('Nombre del usuario'), 'id' => 'nombre')) }}
            {!! $errors->first('nombre', '<p class="help-block" style="color:red;">:message *</p>') !!}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('apellido1') ? 'has-error' : ''}}">
        {{ Form::label('apellido1', __('Apellidos'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-6 col-md-6 col-lg-6 input-group">
                {{ Form::text('apellido1', isset($usuario->apellido1) ? $usuario->apellido1 : "", array('class' => 'form-control', 'placeholder' => __('1º Apellido'), 'id' => 'apellido1')) }}
                {!! $errors->first('apellido1', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
            <div style="display:none;" class="col-1 row salto-movil"></div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::text('apellido2', isset($usuario->apellido2) ? $usuario->apellido2 : "", array('class' => 'form-control', 'placeholder' => __('2º Apellido'), 'id' => 'apellido2')) }}
            </div>
        </div>
    </div>

    <div class="form-group row {{ $errors->has('sexo') ? 'has-error' : ''}}">
        {{ Form::label('sexo', __('Sexo'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::select('sexo', $sexoUsuario, isset($usuario->sexo) ? $usuario->sexo : null, ['class' => 'form-control select2',"placeholder" => __('Selecciona el sexo'),'aria-hidden' => 'true' ]) }}
                {!! $errors->first('sexo', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
        {{ Form::label('email', __('Contacto'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::email('email', isset($usuario->email) ? $usuario->email : "", array('class' => 'form-control', 'placeholder' => __('Email del usuario'), 'id' => 'email')) }}
                {!! $errors->first('email', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::text('telefono', isset($usuario->telefono) ? $usuario->telefono : "", array('class' => 'form-control', 'placeholder' => __('Telefono de contacto'), 'id' => 'telefono')) }}
            </div>
        </div>
    </div>

    <div class="form-group row {{ $errors->has('direccion') ? 'has-error' : ''}}">
        {{ Form::label('direccion', __('Direccion/C. Postal'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-8 col-md-9 col-lg-9">
                {{ Form::text('direccion', isset($usuario->direccion) ? $usuario->direccion : "", array('class' => 'form-control', 'placeholder' => __('Direccion del usuario'), 'id' => 'direccion')) }}
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3">
                {{ Form::text('cod_postal', isset($usuario->cod_postal) ? $usuario->cod_postal : "", array('class' => 'form-control', 'placeholder' => __('Cod. Postal'), 'id' => 'cod_postal')) }}
            </div>
        </div>
        {!! $errors->first('direccion', '<p class="help-block offset-sm-3" style="color:red;">:message *</p>') !!}
    </div>

    <div class="form-group row {{ $errors->has('fec_nac') ? 'has-error' : ''}}">
        {{ Form::label('fec_nac', __('Fecha nacimiento'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::date('fec_nac', isset($usuario->fec_nac) ? $usuario->fec_nac : "", array('class' => 'form-control', 'placeholder' => __('Fecha de nacimiento'), 'id' => 'fec_nac')) }}
                {!! $errors->first('fec_nac', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
            <div class="row col-sm-6 col-md-6 col-lg-6" id="altura-peso">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    {{ Form::number('altura', isset($usuario->altura) ? $usuario->altura : "", array('class' => 'form-control', 'placeholder' => __('Altura (m,cm)'), 'id' => 'altura')) }}
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    {{ Form::number('peso', isset($usuario->peso) ? $usuario->peso : "", array('class' => 'form-control', 'placeholder' => __('Peso (kg)'), 'id' => 'peso')) }}
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row {{ $errors->has('dni') ? 'has-error' : ''}}">
        {{ Form::label('dni', __('D.N.I/N.I.E.'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::text('dni', isset($usuario->dni) ? $usuario->dni : "", array('class' => 'form-control', 'placeholder' => __('DNI/NIE del usuario'), 'id' => 'dni')) }}
            </div>
        </div>
        {!! $errors->first('dni', '<p class="help-block offset-sm-3" style="color:red;">:message *</p>') !!}
    </div>

    <div class="form-group row {{ $errors->has('usuario') ? 'has-error' : ''}}">
        {{ Form::label('usuario', __('Usuario'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::text('usuario', isset($usuario->usuario) ? $usuario->usuario : "", array('class' => 'form-control', 'placeholder' => __('Nombre de la cuenta'), 'id' => 'usuario')) }}
                {!! $errors->first('usuario', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::select('tipo', $tiposUsuario, isset($usuario->tipo) ? $usuario->tipo : null, ['class' => 'form-control',"placeholder" => __('Selecciona el tipo de usuario'),'aria-hidden' => 'true','id' => 'tipo' ]) }}
                {!! $errors->first('tipo', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group row {{ $errors->has('password') ? 'has-error' : ''}}">
        {{ Form::label('password', __('Contraseña'), array('class' => 'col-sm-2 offset-sm-1 col-form-label') ) }}
        <div class="row col-sm-8 col-md-8 col-lg-8">
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => __('Contraseña'), 'id' => 'password')) }}
                {!! $errors->first('password', '<p class="help-block" style="color:red;">:message *</p>') !!}
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                {{ Form::password('repetir_password', array('class' => 'form-control', 'placeholder' => __('Repita la contraseña'), 'id' => 'repetir_password')) }}
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
                $('#apellido2, #telefono, #cod_postal,#tipo,#repetir_password').css('margin-left','auto');
                $('#altura, #peso').css('margin-left','auto');
                $('#apellido2, #telefono, #cod_postal,#altura,#peso,#tipo,#repetir_password').css('margin-top','calc(0.375rem + 1px)');
            }else{
                $('#apellido2, #telefono, #cod_postal,#tipo,#repetir_password').css('margin-left','0.8rem');
                $('#altura, #peso').css('margin-left','1.8rem');
                $('#apellido2, #telefono, #cod_postal,#altura, #peso,#tipo,#repetir_password').css('margin-top','auto');
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
