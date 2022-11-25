@extends('backend.layouts.master')

@section('title', 'Create View')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        
            <h3 class="heading mb-5">Create New Post</h3>
            @include('alerts')
            <form method="post" action="{{ url('admin/post') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">
                <div class="form-group mb-4">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                </div>
                <div class="form-group mb-4">
                    <label>Title(EN)</label>
                    <input type="text" class="form-control" placeholder="Title" name="engtitle" required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control categories" name="category_id[]" 
                    id="select2Multiple" multiple="multiple" required>
                        <option value="">Please Select Category</option>
                        @foreach($cats as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label>Date</label>
                    <input type="date" class="form-control" placeholder="" name="date" required>
                </div>
                
                <div class="form-group mb-4">
                    <label>Description</label>
                    <textarea class="form-control" rows="4" name="content" id="summernote" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <label>Description(EN)</label>
                    <textarea class="form-control" rows="4" name="engcontent" id="summernote1" required></textarea>
                </div>
                <div class="form-group">
                    <label>Upload News Image</label>
                    <input type="file" class="form-control-file" name="images" multiple>
                </div>
                <div class="form-group">
                    <label>Upload Slider Image</label>
                    <input type="file" class="form-control-file" name="slideimages" multiple required>
                </div>
                <div class="form-group mb-4">
                    <!-- <label>SlideShow</label> -->
                    <input type="checkbox" name="slideshow">
                    <span style="margin-right: 10px;">SlideShow</span>
                <!-- </div>
                <div class="form-group mb-4"> -->
                    <!-- <label>PostShow</label> -->
                    <input type="checkbox" name="status" checked>
                    <span>PostShow</span>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Create</button>
                <a href="{{ url('admin/post') }}" class="btn btn-secondary mt-3">Back</a>
        </div>
        </form>
    </div>
</div>

@endsection
