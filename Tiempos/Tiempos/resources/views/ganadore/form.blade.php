<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_sorteo') }}
            {{ Form::text('id_sorteo', $ganadore->id_sorteo, ['class' => 'form-control' . ($errors->has('id_sorteo') ? ' is-invalid' : ''), 'placeholder' => 'Id Sorteo']) }}
            {!! $errors->first('id_sorteo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('premio_primer_numero') }}
            {{ Form::text('premio_primer_numero', $ganadore->premio_primer_numero, ['class' => 'form-control' . ($errors->has('premio_primer_numero') ? ' is-invalid' : ''), 'placeholder' => 'Premio Primer Numero']) }}
            {!! $errors->first('premio_primer_numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('premio_segundo_numero') }}
            {{ Form::text('premio_segundo_numero', $ganadore->premio_segundo_numero, ['class' => 'form-control' . ($errors->has('premio_segundo_numero') ? ' is-invalid' : ''), 'placeholder' => 'Premio Segundo Numero']) }}
            {!! $errors->first('premio_segundo_numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('premio_tercer_numero') }}
            {{ Form::text('premio_tercer_numero', $ganadore->premio_tercer_numero, ['class' => 'form-control' . ($errors->has('premio_tercer_numero') ? ' is-invalid' : ''), 'placeholder' => 'Premio Tercer Numero']) }}
            {!! $errors->first('premio_tercer_numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $ganadore->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>