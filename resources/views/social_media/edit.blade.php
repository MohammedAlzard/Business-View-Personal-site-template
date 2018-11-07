@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Social Media
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($socialMedia, ['route' => ['socialMedia.update', $socialMedia->id], 'method' => 'patch']) !!}

                        @include('social_media.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection