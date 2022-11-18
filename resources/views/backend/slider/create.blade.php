<!-- {{ Form::open(array('route' => 'slides.store', 'files' => true)) }}

  {{ Form::label('title', 'Title') }}

  {{ Form::text('title', null, array('class' => 'form-control')) }}


  {{ Form::label('photo', 'Photo') }}

  {{ Form::file('photo', array('class' => 'form-control')) }}


  {{ Form::submit('Add', array('class' => 'pull-right btn btn-primary')) }}

{{ Form::close() }} -->

@extends('backend.layouts.master')

@section('title', 'Create Slider View')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                @include('alerts')
                <div class="card-header bg-primary">
                    <h4>Create New Slider</h4>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ url('admin/slider') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Slide Title</label>
                            <input type="title" class="form-control" name="name">
                        </div>
                        
                        <div class="form-group">
                            <label>Upload Photo</label>
                            <input type="file" name="photo" class="form-control-file" id="profile-img">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('admin/slider') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection