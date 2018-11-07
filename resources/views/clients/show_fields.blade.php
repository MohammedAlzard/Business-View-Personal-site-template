<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p><img width="100px" src="{{ asset('uploads/clients/' . $clients->image) }}"></p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $clients->title !!}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{!! $clients->link !!}</p>
</div>

<!-- Orderby Field -->
<div class="form-group">
    {!! Form::label('orderBy', 'Orderby:') !!}
    <p>{!! $clients->orderBy !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $clients->created_at !!}</p>
</div>
