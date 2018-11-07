<table class="table table-responsive" id="socialMedia-table">
    <thead>
        <tr>
            <th>Icon</th>
        <th>Link</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($socialMedia as $socialMedia)
        <tr>
            <td><p><i class="{!! $socialMedia->icon !!}" style="font-size: 36px;"></i></p></td>
            <td>{!! $socialMedia->link !!}</td>
            <td>
                {!! Form::open(['route' => ['socialMedia.destroy', $socialMedia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('socialMedia.show', [$socialMedia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('socialMedia.edit', [$socialMedia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>