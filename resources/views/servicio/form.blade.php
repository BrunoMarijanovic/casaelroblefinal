<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('parrafo01ES') }}
            <div>
                {{ Form::textarea('parrafo01ES', $servicio->parrafo01ES, ['class' => 'form-control' . ($errors->has('parrafo01ES') ? ' is-invalid' : ''), 'placeholder' => 'Parrafo01Es']) }}
                {!! $errors->first('parrafo01ES', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('parrafo01CAT') }}
            <div>
                {{ Form::textarea('parrafo01CAT', $servicio->parrafo01CAT, ['class' => 'form-control' . ($errors->has('parrafo01CAT') ? ' is-invalid' : ''), 'placeholder' => 'Parrafo01Cat']) }}
                {!! $errors->first('parrafo01CAT', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('parrafo01EN') }}
            <div>
                {{ Form::textarea('parrafo01EN', $servicio->parrafo01EN, ['class' => 'form-control' . ($errors->has('parrafo01EN') ? ' is-invalid' : ''), 'placeholder' => 'Parrafo01En']) }}
                {!! $errors->first('parrafo01EN', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('parrafo01FR') }}
            <div>
                {{ Form::textarea('parrafo01FR', $servicio->parrafo01FR, ['class' => 'form-control' . ($errors->has('parrafo01FR') ? ' is-invalid' : ''), 'placeholder' => 'Parrafo01Fr']) }}
                {!! $errors->first('parrafo01FR', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('parrafo02ES') }}
            <div>
                {{ Form::textarea('parrafo02ES', $servicio->parrafo02ES, ['class' => 'form-control' . ($errors->has('parrafo02ES') ? ' is-invalid' : ''), 'placeholder' => 'Parrafo02Es']) }}
                {!! $errors->first('parrafo02ES', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('parrafo02CAT') }}
            <div>
                {{ Form::textarea('parrafo02CAT', $servicio->parrafo02CAT, ['class' => 'form-control' . ($errors->has('parrafo02CAT') ? ' is-invalid' : ''), 'placeholder' => 'Parrafo02Cat']) }}
                {!! $errors->first('parrafo02CAT', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('parrafo02EN') }}
            <div>
                {{ Form::textarea('parrafo02EN', $servicio->parrafo02EN, ['class' => 'form-control' . ($errors->has('parrafo02EN') ? ' is-invalid' : ''), 'placeholder' => 'Parrafo02En']) }}
                {!! $errors->first('parrafo02EN', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('parrafo02FR') }}
            <div>
                {{ Form::textarea('parrafo02FR', $servicio->parrafo02FR, ['class' => 'form-control' . ($errors->has('parrafo02FR') ? ' is-invalid' : ''), 'placeholder' => 'Parrafo02Fr']) }}
                {!! $errors->first('parrafo02FR', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>