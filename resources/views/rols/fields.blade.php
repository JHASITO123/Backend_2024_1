<!-- Name Field -->
<div class="form-group col-sm-6">
{!! Form::label('id', 'Id:') !!}
    {!! Form::text('id', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}

    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>