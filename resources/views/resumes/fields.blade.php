<!-- Datetime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datetime', 'Datetime:') !!}
    {!! Form::text('datetime', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    <!-- {!! Form::text('type', null, ['class' => 'form-control']) !!} -->
    <select name="type" class="form-control">
        @if(!empty($resumes))
            <option @if($resumes->type === "Education") selected @endif value="Education">Education</option>
            <option @if($resumes->type === "Experience") selected @endif value="Experience">Experience</option>
        @else
            <option value="Education">Education</option>
            <option value="Experience">Experience</option>
        @endif
    </select>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Orderby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orderBy', 'Orderby:') !!}
    {!! Form::number('orderBy', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('resumes.index') !!}" class="btn btn-default">Cancel</a>
</div>
