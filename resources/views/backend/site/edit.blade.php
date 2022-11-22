@extends('backend.layouts.master')

@section('title', 'Edit Site View')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <div class="col-md-10">
            <h3 class="heading mb-5">Update Logo&Site Name</h3>
            @include('alerts')
            <form method="post" action="{{ url("admin/site/$sites->id/edit") }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">                
                        <div class="form-group mb-4">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="title" name="title" value="{{$sites->title}}">
                        </div>
                       
                        <div class="form-group">
                            <label>Logo Upload Image</label>
                            <input type="file" class="form-control-file" name="image" multiple>
                            <img src="{{ asset('images/' . $sites->image) }}" style="width: 100px;" alt="Logo Image">
                        </div>
                        
                        <button class="btn btn-primary mt-3" type="submit">Update</button>
                        <a href="{{ url('admin/site') }}" class="btn btn-secondary mt-3">Back</a>
                    </form>                   
               </div>
            </div>
        </div>
    </div>
</div>  
@endsection