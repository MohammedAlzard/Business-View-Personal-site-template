<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icon:') !!}
    <!-- {!! Form::text('icon', null, ['class' => 'form-control']) !!} -->
    <div class="btn-group">
        <button data-selected="graduation-cap" type="button"
            class="icp icp-dd btn btn-primary dropdown-toggle iconpicker-component"
            data-toggle="dropdown">
            <i class="fas fa-heart"></i>
            <span class="caret"></span>
        </button>
    
        <div class="dropdown-menu"></div>
        <i id="Icon" ></i>

        <input class="icp icp-opts" type="hidden" name="icon" id="myIcon" />
        {{-- Old Icon --}}
        @if (!empty($funFacts->icon))
        <span style="margin-left: 30px;">
            <i class="{{ $funFacts->icon }}" style="font-size: 60px;"></i>
        </span>
        @endif
    </div>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Orderby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orderBy', 'Orderby:') !!}
    {!! Form::number('orderBy', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('funFacts.index') !!}" class="btn btn-default">Cancel</a>
</div>
