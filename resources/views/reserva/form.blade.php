<div class="box box-info padding-1">
    <div class="box-body">
        
        <br/>
        <div class="form-group">
            {{ Form::label('Fecha Inicio') }}
            {{ Form::date('fechaInicio', $reserva->fechaInicio, ['class' => 'form-control' . ($errors->has('fechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('fechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Fecha Fin') }}
            {{ Form::date('fechaFin', $reserva->fechaFin, ['class' => 'form-control' . ($errors->has('fechaFin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
            {!! $errors->first('fechaFin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br/>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('email', $reserva->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
        <br/>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>