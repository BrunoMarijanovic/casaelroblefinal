<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $diasminimo->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('minimodias') }}
            {{ Form::text('minimodias', $diasminimo->minimodias, ['class' => 'form-control' . ($errors->has('minimodias') ? ' is-invalid' : ''), 'placeholder' => 'Minimodias']) }}
            {!! $errors->first('minimodias', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>