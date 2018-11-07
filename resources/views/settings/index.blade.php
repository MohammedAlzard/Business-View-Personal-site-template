@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Settings
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
            @include('flash::message')
        <div class="clearfix"></div>
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'settings.store','enctype' => 'multipart/form-data']) !!}

                        <!-- Title Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', $settings->title, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Description Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('description', 'Description:') !!}
                            {!! Form::textarea('description', $settings->description, ['class' => 'form-control', 'id'  => 'settings-description']) !!}
                        </div>

                        <!-- Description Contact Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('desc_contact', 'Description Contact Us:') !!}
                            {!! Form::textarea('desc_contact', $settings->desc_contact, ['class' => 'form-control', 'id'  => 'settings-contact-description']) !!}
                        </div>

                        <!-- Full Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('full_name', 'Full Name:') !!}
                            {!! Form::text('full_name', $settings->full_name, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Profile Image Field -->
                        <div class="form-group col-sm-4">
                            {!! Form::label('profile_image', 'Profile Image:') !!}
                            {!! Form::file('profile_image', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-sm-2">
                            <img width="100%" src="{{ asset('uploads/settings/'.$settings->profile_image) }}" alt="Profile Image" title="Profile Image" />
                        </div>

                        <!-- Age Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('age', 'Age:') !!}
                            {!! Form::text('age', $settings->age, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Residence Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('residence', 'Residence:') !!}
                            {!! Form::text('residence', $settings->residence, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Address Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('address', 'Address:') !!}
                            {!! Form::text('address', $settings->address, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Email Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('email', 'E-mail:') !!}
                            {!! Form::email('email', $settings->email, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Phone Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('phone', 'Phone:') !!}
                            {!! Form::text('phone', $settings->phone, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Skype Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('skype', 'Skype:') !!}
                            {!! Form::text('skype', $settings->skype, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Years Of Experience Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('yearsExperience', 'Years Of Experience:') !!}
                            {!! Form::text('yearsExperience', $settings->yearsExperience, ['class' => 'form-control']) !!}
                        </div>

                        <!-- CV Field -->
                        <div class="form-group col-sm-3">
                            {!! Form::label('cv', 'Upload CV:') !!}
                            {!! Form::file('cv', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group col-sm-2">
                            {!! Form::label('', 'Download CV:') !!}
                            <a href="{{ url('uploads/settings/' . $settings->cv) }}">Download CV</a>
                        </div>
                        <div class="form-group col-sm-1">
                            {!! Form::label('', 'CV:') !!}
                            <a href="{{ url('dashboard/settings/delete-cv') }}">Delete</a>
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ url('/dashboard') }}" class="btn btn-default">Cancel</a>
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
