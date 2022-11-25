@extends('backend.layouts.master')

@section('title', 'Create Video View')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
                <h5 class="alert alert-success">{{session('status')}}</h5>
            @endif
        <div class="col-md-10">
            <h3 class="heading mb-5">Create New Video</h3>
            @include('alerts')
            <form method="post" action="{{ url('admin/video') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">                
                        <div class="form-group mb-4">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="title" name="title">
                        </div>
                        
                        <div class="form-group">
                            <label> Upload Video</label>
                            <input type="file" class="form-control-file" name="video" multiple>
                        </div>
                        
                        <button class="btn btn-primary mt-3" type="submit">Create</button>
                        <a href="{{ url('admin/video') }}" class="btn btn-secondary mt-3">Back</a>
                    </form>                   
               </div>
            </div>
        </div>
    </div>
</div>
@endsection