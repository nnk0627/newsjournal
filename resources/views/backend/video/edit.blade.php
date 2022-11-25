@extends('backend.layouts.master')

@section('title', 'Edit Video View')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
        <div class="col-md-10">
            <h3 class="heading mb-5">Update Video</h3>
            @include('alerts')
            <form method="post" action="{{ url("admin/video/$videos->id/edit") }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">                
                        <div class="form-group mb-4">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="title" name="title" value="{{$videos->title}}">
                        </div>
                       
                        <div class="form-group">
                            <label>Upload Video</label>
                            <input type="file" class="form-control-file" name="video" multiple>
                            <video width="260" height="200" controls>
                            <source src="{{ asset('videos/' . $videos->video) }}" >
                            </video>
                        </div>
                        
                        <button class="btn btn-primary mt-3" type="submit">Update</button>
                        <a href="{{ url('admin/video') }}" class="btn btn-secondary mt-3">Back</a>
                    </form>                   
               </div>
            </div>
        </div>
    </div>
</div>    
@endsection