<table class="table table-responsive" id="funFacts-table">
    <thead>
        <tr>
            <th>Icon</th>
        <th>Title</th>
        <th>Number</th>
        <th>Orderby</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($funFacts as $funFacts)
        <tr>
            <td><i class="{!! $funFacts->icon !!}" style="font-size: 36px;"></i></td>
            <td>{!! $funFacts->title !!}</td>
            <td>{!! $funFacts->number !!}</td>
            <td>{!! $funFacts->orderBy !!}</td>
            <td>
                {!! Form::open(['route' => ['funFacts.destroy', $funFacts->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('funFacts.show', [$funFacts->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('funFacts.edit', [$funFacts->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>