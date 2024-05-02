<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $categorie->name }}</p>
</div>

<!-- User Created Field -->
<div class="col-sm-12">
    {!! Form::label('user_created', 'User Created:') !!}
    <p>{{ $categorie->user_created }}</p>
</div>

<!-- User Modified Field -->
<div class="col-sm-12">
    {!! Form::label('user_modified', 'User Modified:') !!}
    <p>{{ $categorie->user_modified }}</p>
</div>

