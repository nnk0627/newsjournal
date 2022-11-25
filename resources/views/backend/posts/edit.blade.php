@extends('backend.layouts.master')

@section('title', 'Edit View')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="heading mb-5">Update Post</h3>
            @include('alerts')
            <form method="post" action="{{ url("admin/post/$post->id/edit") }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">
                <div class="form-group mb-4">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group mb-4">
                    <label>Title (EN)</label>
                    <input type="text" class="form-control" placeholder="Title" name="engtitle" value="{{ $post->engtitle }}">
                </div>
                <div class="form-group">
                    <label> Category</label>
                    <select class="form-control categories" name="category_id[]" multiple="multiple">
                    <option value="">Please Select Category</option>                   
                    @foreach($cats as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $post->category_id ? 'selected' : '' }}>
                            {{ $cat->title }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label>Date</label>
                    <input type="date" class="form-control" placeholder="" name="date" value="{{ $post->date }}">
                    
                </div>
                
                <div class="form-group mb-4">
                    <label>Description</label>
                    <textarea class="form-control" rows="4" name="content" id="summernote">
                    {!! $post->content !!}
                    </textarea>
                </div>
                <div class="form-group mb-4">
                    <label>Description(EN)</label>
                    <textarea class="form-control" rows="4" name="engcontent" id="summernote1">
                    {!! $post->engcontent !!}
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Upload News Image</label>
                    <input type="file" class="form-control-file" value="{{ asset('images/blogimg/' . $post->images) }}" name="images">
                    {{ $post->images }}
                </div>
                <div class="form-group">
                    <label>Upload Slider Image</label>
                    <input type="file" class="form-control-file" value="{{ asset('images/' . $post->slideimages) }}" name="slideimages">
                    {{ $post->slideimages }}
                </div>
                <div class="form-group mb-4">
                    <!-- <label>SlideShow</label> -->
                    <input type="checkbox" name="slideshow" {{$post->status == '1' ? 'checked' : '' }}>
                    <span class="mr-10">SlideShow</span>    
                    <!-- <label>PostShow</label> -->
                    <input type="checkbox" name="status" {{$post->status == '1' ? 'checked' : '' }}>
                    <span>PostShow</span>    
                </div>
                <div>
                    <button class="btn btn-primary mt-3" type="submit">Update</button>
                    <a href="{{ url('/admin/post') }}" class="btn btn-secondary mt-3">Back</a>
                </div>
            </form>
        </div>
    </div>

    @endsection