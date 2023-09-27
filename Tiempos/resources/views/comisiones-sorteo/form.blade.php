<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $comisionesSorteo->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sorteo') }}
            {{ Form::text('id_sorteo', $comisionesSorteo->id_sorteo, ['class' => 'form-control' . ($errors->has('id_sorteo') ? ' is-invalid' : ''), 'placeholder' => 'Id Sorteo']) }}
            {!! $errors->first('id_sorteo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_comision') }}
            {{ Form::text('id_comision', $comisionesSorteo->id_comision, ['class' => 'form-control' . ($errors->has('id_comision') ? ' is-invalid' : ''), 'placeholder' => 'Id Comision']) }}
            {!! $errors->first('id_comision', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $comisionesSorteo->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $comisionesSorteo->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>