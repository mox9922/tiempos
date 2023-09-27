<div class="container">
    <div class="box-body">
      <div class="row mb-3">
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $restringido->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sorteo') }}
            {{ Form::text('id_sorteo', $restringido->id_sorteo, ['class' => 'form-control' . ($errors->has('id_sorteo') ? ' is-invalid' : ''), 'placeholder' => 'Id Sorteo']) }}
            {!! $errors->first('id_sorteo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
    <br>
</div>