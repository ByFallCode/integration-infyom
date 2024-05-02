<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- User Created Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_created', 'User Created:') !!}
    {!! Form::number('user_created', null, ['class' => 'form-control']) !!}
</div>

<!-- User Modified Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_modified', 'User Modified:') !!}
    {!! Form::number('user_modified', null, ['class' => 'form-control']) !!}
</div>