
<!-- Datetime Field -->
<div class="form-group">
    {!! Form::label('datetime', 'Datetime:') !!}
    <p>{!! $resumes->datetime !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $resumes->type !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $resumes->title !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $resumes->description !!}</p>
</div>

<!-- Orderby Field -->
<div class="form-group">
    {!! Form::label('orderBy', 'Orderby:') !!}
    <p>{!! $resumes->orderBy !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $resumes->created_at !!}</p>
</div>
