<!-- Matricula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matricula', 'Matricula:') !!}
    {!! Form::text('matricula', null, ['class' => 'form-control']) !!}
</div>

<!-- Ssn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ssn', 'Ssn:') !!}
    {!! Form::text('ssn', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Fch Nac Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fch_nac', 'Fch Nac:') !!}
    {!! Form::text('fch_nac', null, ['class' => 'form-control']) !!}
</div>

<!-- Vote 2018 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vote_2018', 'Vote 2018:') !!}
    {!! Form::text('vote_2018', null, ['class' => 'form-control']) !!}
</div>

<!-- Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departamento', 'Departamento:') !!}
    {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Distrito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('distrito', 'Distrito:') !!}
    {!! Form::text('distrito', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('registros.index') }}" class="btn btn-default">Cancel</a>
</div>
