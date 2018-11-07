
<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p><img width="400px" src="{{ asset('uploads/services/' . $services->image) }}"></p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $services->title !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $services->description !!}</p>
</div>

<!-- Orderby Field -->
<div class="form-group">
    {!! Form::label('orderBy', 'Orderby:') !!}
    <p>{!! $services->orderBy !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $services->created_at !!}</p>
</div>
