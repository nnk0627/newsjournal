<!-- {{ Form::model($slider, array('route' => array('slides.update', $slider->id), 'method' => 'PUT', 'files' => true)) }}

{{Form::label('title', 'Title')}}
{{Form::text('title', null, array('class' => 'form-control'))}}
<br>

{{Form::label('photo', 'Photo')}}
{{Form::file('photo', array('class' => 'form-control'))}}

<br>
<img src="{{url('images')}}/{{$slider->photo}}" alt="image">

<br><br><br>

{{ Form::submit('Update Slide', array('class' => 'btn btn-success')) }}

{{Form::close()}} -->

@extends('backend.layouts.master')

@section('title', 'Edit Slider')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                @include('alerts')
                <div class="card-header bg-primary">
                    <h4>Update Slider Photo</h4>
                </div>

                <div class="card-body">
                    <form method="post" action="{{ url("admin/slider/$slider->id/edit") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Upload Photo</label>
                            <input type="file" name="photo" class="form-control-file" id="profile-img">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('admin/slider') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection