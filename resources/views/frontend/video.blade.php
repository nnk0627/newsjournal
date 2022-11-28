@extends('frontend.layouts.master')

@section('title', 'Videos')

@section('content')

<div class="container">
    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Videos</h3>
            </div>
    <div class="row mb-4">
        <div class="col-md-6">
        @foreach ($videos as $video)                                                       

            <div class="embed-responsive embed-responsive-16by9">                 
                <iframe class="embed-responsive-item" src="{{ asset('videos/' . $video->video) }}"  allowfullscreen>
               
                </iframe>
                
            </div>
            <h6> {{ $video->title }}</h6>
        @endforeach 
        </div>
    </div>
</div>

@endsection