@extends('frontend.layouts.master')

@section('title', 'Videos')

@section('content')

<div class="container">
    <h1 class="home-title text-danger text-center">Videos</h1>
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