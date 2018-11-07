
<!-- Icon Field -->
<div class="form-group">
    {!! Form::label('icon', 'Icon:') !!}
    <p><i class="{!! $funFacts->icon !!}" style="font-size: 36px;"></i></p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $funFacts->title !!}</p>
</div>

<!-- Number Field -->
<div class="form-group">
    {!! Form::label('number', 'Number:') !!}
    <p>{!! $funFacts->number !!}</p>
</div>

<!-- Orderby Field -->
<div class="form-group">
    {!! Form::label('orderBy', 'Orderby:') !!}
    <p>{!! $funFacts->orderBy !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $funFacts->created_at !!}</p>
</div>
