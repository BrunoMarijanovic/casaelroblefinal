<div class="box box-info padding-1">
    <div class="box-body">
        
    <br/>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $resena->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('resena') }}
            {{ Form::text('resena', $resena->resena, ['class' => 'form-control' . ($errors->has('resena') ? ' is-invalid' : ''), 'placeholder' => 'Resena']) }}
            {!! $errors->first('resena', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('estrellas') }}
            {{ Form::text('estrellas', $resena->estrellas, ['class' => 'form-control' . ($errors->has('estrellas') ? ' is-invalid' : ''), 'placeholder' => 'Estrellas']) }}
            {!! $errors->first('estrellas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>