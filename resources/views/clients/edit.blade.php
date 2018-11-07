@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Clients
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clients, ['route' => ['clients.update', $clients->id], 'method' => 'patch','enctype' => 'multipart/form-data']) !!}

                        @include('clients.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection