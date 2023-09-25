<div class="box box-info padding-1">
    <div class="box-body">
        
    <br/>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $precio->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $precio->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>