@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Services
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($services, ['route' => ['services.update', $services->id], 'method' => 'patch','enctype' => 'multipart/form-data']) !!}

                        @include('services.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection