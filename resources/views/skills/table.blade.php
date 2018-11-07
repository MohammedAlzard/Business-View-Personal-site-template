<table class="table table-responsive" id="skills-table">
    <thead>
        <tr>
            <th>Type</th>
        <th>Title</th>
        <th>Persentasie</th>
        <th>Orderby</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($skills as $skills)
        <tr>
            <td>{!! $skills->type !!}</td>
            <td>{!! $skills->title !!}</td>
            <th>{!! $skills->persentasie !!}</th>
            <td>{!! $skills->orderBy !!}</td>
            <td>
                {!! Form::open(['route' => ['skills.destroy', $skills->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('skills.show', [$skills->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('skills.edit', [$skills->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>