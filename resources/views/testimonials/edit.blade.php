@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Testimonials
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($testimonials, ['route' => ['testimonials.update', $testimonials->id], 'method' => 'patch','enctype' => 'multipart/form-data']) !!}

                        @include('testimonials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection