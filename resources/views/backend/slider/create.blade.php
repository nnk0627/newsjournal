@extends('backend.layouts.master')

@section('title', 'Create Slider View')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
                <h5 class="alert alert-success">{{session('status')}}</h5>
            @endif
        <div class="col-md-10">
            <h3 class="heading mb-5">Create New Slider</h3>
            @include('alerts')
            <form method="post" action="{{ url('admin/slider') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">                
                        <div class="form-group mb-4">
                            <label>Heading</label>
                            <input type="text" class="form-control" placeholder="heading" name="heading">
                        </div>
                        <div class="form-group mb-4">
                            <label>Description</label>
                            <textarea class="form-control" rows="6" name="description" id="summernote"></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link">
                        </div>
                        <div class="form-group mb-4">
                            <label>Link Name</label>
                            <input type="text" class="form-control" name="link_name">
                        </div>
                        <div class="form-group">
                            <label>Slider Upload Image</label>
                            <input type="file" class="form-control-file" name="image" multiple>
                        </div>
                        <div class="form-group mb-4">
                            <label>Status</label>
                            <input type="checkbox" name="status">0=visible, 1=hidden
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Create</button>
                        <a href="{{ url('admin/slider') }}" class="btn btn-secondary mt-3">Back</a>
                    </form>                   
               </div>
            </div>
        </div>
    </div>
</div>  
@endsection