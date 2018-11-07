<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $skills->type !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $skills->title !!}</p>
</div>

<!-- Persentasie Field -->
<div class="form-group">
    {!! Form::label('persentasie', 'Persentasie:') !!}
    <p>{!! $skills->persentasie !!}</p>
</div>

<!-- Orderby Field -->
<div class="form-group">
    {!! Form::label('orderBy', 'Orderby:') !!}
    <p>{!! $skills->orderBy !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $skills->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $skills->created_at !!}</p>
</div>
