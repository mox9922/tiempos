<div class="container">
    <div class="box-body">
      <div class="row mb-3">
        <div class="form-group">
            {{ Form::label('id_configuracion') }}
            {{ Form::text('id_configuracion', $sorteo->id_configuracion, ['class' => 'form-control' . ($errors->has('id_configuracion') ? ' is-invalid' : ''), 'placeholder' => 'Id Configuracion']) }}
            {!! $errors->first('id_configuracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio', $sorteo->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_final') }}
            {{ Form::text('fecha_final', $sorteo->fecha_final, ['class' => 'form-control' . ($errors->has('fecha_final') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Final']) }}
            {!! $errors->first('fecha_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
    <br>
</div></div>