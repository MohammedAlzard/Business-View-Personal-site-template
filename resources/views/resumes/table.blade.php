<table class="table table-responsive" id="resumes-table">
    <thead>
        <tr>
            <th>Datetime</th>
        <th>Type</th>
        <th>Title</th>
        <th>Description</th>
        <th>Orderby</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($resumes as $resumes)
        <tr>
            <td>{!! $resumes->datetime !!}</td>
            <td>{!! $resumes->type !!}</td>
            <td>{!! $resumes->title !!}</td>
            <td>{!! $resumes->description !!}</td>
            <td>{!! $resumes->orderBy !!}</td>
            <td>
                {!! Form::open(['route' => ['resumes.destroy', $resumes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('resumes.show', [$resumes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('resumes.edit', [$resumes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>