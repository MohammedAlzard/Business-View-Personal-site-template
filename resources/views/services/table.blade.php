<table class="table table-responsive" id="services-table">
    <thead>
        <tr>
            <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Orderby</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($services as $services)
        <tr>
            <td><img width="100px" src="{{ asset('uploads/services/' . $services->image) }}"></td>
            <td>{!! $services->title !!}</td>
            <td>{!! $services->description !!}</td>
            <td>{!! $services->orderBy !!}</td>
            <td>
                {!! Form::open(['route' => ['services.destroy', $services->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('services.show', [$services->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('services.edit', [$services->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>