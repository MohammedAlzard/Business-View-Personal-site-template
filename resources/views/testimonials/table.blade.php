<table class="table table-responsive" id="testimonials-table">
    <thead>
        <tr>
            <th>Author</th>
        <th>Firm</th>
        <th>Image</th>
        <th>Description</th>
        <th>Orderby</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($testimonials as $testimonials)
        <tr>
            <td>{!! $testimonials->author !!}</td>
            <td>{!! $testimonials->firm !!}</td>
            <td><img width="100px" src="{{ asset('uploads/testimonials/' . $testimonials->image) }}"></td>
            <td>{!! $testimonials->description !!}</td>
            <td>{!! $testimonials->orderBy !!}</td>
            <td>
                {!! Form::open(['route' => ['testimonials.destroy', $testimonials->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('testimonials.show', [$testimonials->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('testimonials.edit', [$testimonials->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>