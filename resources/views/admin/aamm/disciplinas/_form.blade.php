<div class="card-body">
    <div class="form-group row {{ $errors->has('nombre') ? 'has-error' : ''}}">
        {{ Form::label('nombre', __('Nombre'), array('class' => 'col-sm-2 col-form-label') ) }}
        <div class="col-sm-10">
            {{ Form::text('nombre', isset($disciplina->nombre) ? $disciplina->nombre : "", array('class' => 'form-control', 'placeholder' => __('Nombre de la disciplina'), 'id' => 'nombre')) }}
        </div>
        {!! $errors->first('nombre', '<p class="help-block" style="color:red;">:message *</p>') !!}
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-dark float-right">{{ __('Aceptar') }}</button>
</div>
