<div class="container">
    <div class="box-body"> 
      <div class="row mb-3">
        
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $configuracione->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::date('fecha_inicio', $configuracione->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_final') }}
            {{ Form::date('fecha_final', $configuracione->fecha_final, ['class' => 'form-control' . ($errors->has('fecha_final') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Final']) }}
            {!! $errors->first('fecha_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_inicio') }}
            {{ Form::time('hora_inicio', $configuracione->hora_inicio, ['class' => 'form-control' . ($errors->has('hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
            {!! $errors->first('hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_final') }}
            {{ Form::time('hora_final', $configuracione->hora_final, ['class' => 'form-control' . ($errors->has('hora_final') ? ' is-invalid' : ''), 'placeholder' => 'Hora Final']) }}
            {!! $errors->first('hora_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('premio_primer_numero') }}
            {{ Form::text('premio_primer_numero', $configuracione->premio_primer_numero, ['class' => 'form-control' . ($errors->has('premio_primer_numero') ? ' is-invalid' : ''), 'placeholder' => 'Premio Primer Numero']) }}
            {!! $errors->first('premio_primer_numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('premio_segundo_numero') }}
            {{ Form::text('premio_segundo_numero', $configuracione->premio_segundo_numero, ['class' => 'form-control' . ($errors->has('premio_segundo_numero') ? ' is-invalid' : ''), 'placeholder' => 'Premio Segundo Numero']) }}
            {!! $errors->first('premio_segundo_numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('premio_tercer_numero') }}
            {{ Form::text('premio_tercer_numero', $configuracione->premio_tercer_numero, ['class' => 'form-control' . ($errors->has('premio_tercer_numero') ? ' is-invalid' : ''), 'placeholder' => 'Premio Tercer Numero']) }}
            {!! $errors->first('premio_tercer_numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $configuracione->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>