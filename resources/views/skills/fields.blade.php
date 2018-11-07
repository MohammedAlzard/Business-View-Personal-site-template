<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    <!-- {!! Form::text('type', null, ['class' => 'form-control']) !!} -->
    <select name="type" class="form-control">
        @if(!empty($resumes))
            <option @if($resumes->type === "Design Skills") selected @endif value="Design Skills">Design Skills</option>
            <option @if($resumes->type === "Coding Skills") selected @endif value="Coding Skills">Coding Skills</option>
        @else
            <option value="Design Skills">Design Skills</option>
            <option value="Coding Skills">Coding Skills</option>
        @endif
    </select>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Persentasie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('persentasie', 'Persentasie:') !!}
    {!! Form::text('persentasie', null, ['class' => 'form-control']) !!}
</div>

<!-- Orderby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orderBy', 'Orderby:') !!}
    {!! Form::number('orderBy', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('skills.index') !!}" class="btn btn-default">Cancel</a>
</div>
