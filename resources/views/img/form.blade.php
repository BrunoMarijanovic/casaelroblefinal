<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::file('imagen', $img->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tituloES') }}
            {{ Form::text('tituloES', $img->tituloES, ['class' => 'form-control' . ($errors->has('tituloES') ? ' is-invalid' : ''), 'placeholder' => 'Tituloes']) }}
            {!! $errors->first('tituloES', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tituloCAT') }}
            {{ Form::text('tituloCAT', $img->tituloCAT, ['class' => 'form-control' . ($errors->has('tituloCAT') ? ' is-invalid' : ''), 'placeholder' => 'Titulocat']) }}
            {!! $errors->first('tituloCAT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tituloEN') }}
            {{ Form::text('tituloEN', $img->tituloEN, ['class' => 'form-control' . ($errors->has('tituloEN') ? ' is-invalid' : ''), 'placeholder' => 'Tituloen']) }}
            {!! $errors->first('tituloEN', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tituloFR') }}
            {{ Form::text('tituloFR', $img->tituloFR, ['class' => 'form-control' . ($errors->has('tituloFR') ? ' is-invalid' : ''), 'placeholder' => 'Titulofr']) }}
            {!! $errors->first('tituloFR', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcionES') }}
            {{ Form::text('descripcionES', $img->descripcionES, ['class' => 'form-control' . ($errors->has('descripcionES') ? ' is-invalid' : ''), 'placeholder' => 'Descripciones']) }}
            {!! $errors->first('descripcionES', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcionCAT') }}
            {{ Form::text('descripcionCAT', $img->descripcionCAT, ['class' => 'form-control' . ($errors->has('descripcionCAT') ? ' is-invalid' : ''), 'placeholder' => 'Descripcioncat']) }}
            {!! $errors->first('descripcionCAT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcionEN') }}
            {{ Form::text('descripcionEN', $img->descripcionEN, ['class' => 'form-control' . ($errors->has('descripcionEN') ? ' is-invalid' : ''), 'placeholder' => 'Descripcionen']) }}
            {!! $errors->first('descripcionEN', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcionFR') }}
            {{ Form::text('descripcionFR', $img->descripcionFR, ['class' => 'form-control' . ($errors->has('descripcionFR') ? ' is-invalid' : ''), 'placeholder' => 'Descripcionfr']) }}
            {!! $errors->first('descripcionFR', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>