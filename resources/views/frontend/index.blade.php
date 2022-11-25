@extends('frontend.layouts.master')


@section('content')
<div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Featured</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="{{url('blog')}}">View All</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                @foreach($posts as $post)
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a style="font-size: 16px;color:ghostwhite" href="">{{$post->category->title}}</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="">{{$post->date}}</a>
                        </div>
                        <a class="h m-0 text-white" href="{{ url("post/$post->id") }}">{{$post->title}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</div>
     <!-- Category News Slider Start -->
     <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Politics</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    @foreach($politicsposts as $post)
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 160px; object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">{{$post->category->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$post->date}}</span>
                                </div>
                                <a class="h6 m-0" href="" style="height: 60px;">{{$post->title}}</a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Business</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    @foreach($businessposts as $post)
                        <div class="position-relative" >
                            <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 160px; object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">{{$post->category->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$post->date}}</span>
                                </div>
                                <a class="h6 m-0" href="" style="height: 60px;">{{$post->title}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Articles</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    @foreach($articlesposts as $post)
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 160px; object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">{{$post->category->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$post->date}}</span>
                                </div>
                                <a class="h6 m-0" href="" style="height: 60px;">{{$post->title}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">LifeStyle</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach($lifestyleposts as $post)
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 160px; object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">{{$post->category->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$post->date}}</span>
                                </div>
                                <a class="h6 m-0" href="" style="height: 60px;">{{$post->title}}</a>
                            </div>
                        </div>
                        @endforeach  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Weather</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                    @foreach($weatherposts as $post)
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 160px; object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">{{$post->category->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$post->date}}</span>
                                </div>
                                <a class="h6 m-0" href="" style="height: 60px;">{{$post->title}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Interviews</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach($interviewsposts as $post)
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 160px; object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="">{{$post->category->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$post->date}}</span>
                                </div>
                                <a class="h6 m-0" href="" style="height: 60px;">{{$post->title}}</a>
                            </div>
                        </div>
                        @endforeach  
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->

    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Popular</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="{{url('blog')}}">View All</a>
                            </div>
                        </div>
                        @foreach ($posts as $post)
                        <div class="col-lg-6">
                        
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 200px;object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">{{$post->category->title}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$post->date}}</span>
                                    </div>
                                    <a class="h6" href="{{ url("post/$post->id") }}" style="height: 60px">{{$post->title}}</a>
                                    <!-- <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p> -->
                                </div>
                            </div>
                        
                            <!-- @foreach ($posts as $post)
                            
                            <div class="d-flex mb-3">
                                <img src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">{{$post->category->title}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$post->date}}</span>
                                    </div>
                                    <a class="h6 m-0" href="{{ url("post/$post->id") }}">{{$post->title}}</a>
                                </div>
                            </div>
                            @endforeach -->
    
                        </div>
                        @endforeach
                        <!-- <div class="col-lg-6">
                        @foreach ($posts as $post)
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 200px;object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">{{$post->category->title}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$post->date}}</span>
                                    </div>
                                    <a class="h6" href="{{ url("post/$post->id") }}" style="height: 60px">{{$post->title}}</a>
                                </div>
                            </div>
                        @endforeach -->
                            <!-- @foreach ($posts as $post)
                            
                            <div class="d-flex mb-3">
                                <img src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">{{$post->category->title}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$post->date}}</span>
                                    </div>
                                    <a class="h6 m-0" href="{{ url("post/$post->id") }}">{{$post->title}}</a>
                                </div>
                            </div>
                            @endforeach -->
    
                        <!-- </div> -->
                    </div>
                 
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Latest</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="{{url('blog')}}">View All</a>
                            </div>
                        </div>
                        @foreach ($latestposts as $post)
                        <div class="col-lg-6">
                       
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 200px;object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">{{$post->category->title}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$post->date}}</span>
                                    </div>
                                    <a class="h6" href="{{ url("post/$post->id") }}" style="height: 60px">{{$post->title}}</a>
                                     <!-- <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>  -->
                                </div>
                            </div>
                           
                        </div>
                       
                        @endforeach
                        <!-- <div class="row">

                            @foreach ($posts as $post)
                            <div class="col-lg-12">                               
                                <div class="d-flex mb-3">
                                    <img src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 100px; height: 100px; object-fit: cover;">
                                    <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                        <div class="mb-1" style="font-size: 13px;">
                                            <a href="">{{$post->category->title}}</a>
                                            <span class="px-1">/</span>
                                            <span>{{$post->date}}</span>
                                        </div>
                                        <a class="h6 m-0" href="{{ url("post/$post->id") }}">{{$post->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> -->
                        <!-- <div class="col-lg-6">
                        @foreach ($posts as $post)
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 300px; height: 200px;object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">{{$post->category->title}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$post->date}}</span>
                                    </div>
                                    <a class="h6" href="{{ url("post/$post->id") }}" style="height: 60px">{{$post->title}}</a>
                                </div>
                            </div>
                            @endforeach
                            @foreach ($posts as $post)
                            
                            <div class="d-flex mb-3">
                                
                                <img src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">{{$post->category->title}}</a>
                                        <span class="px-1">/</span>
                                        <span>{{$post->date}}</span>
                                    </div>
                                    <a class="h6 m-0" href="{{ url("post/$post->id") }}">{{$post->title}}</a>
                                </div>
                            </div>
                    @endforeach
                        </div> -->
                        
                        </div>   
                </div>
                
                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    
                   

                    <!-- Popular News Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tranding</h3>
                        </div>
                        @foreach ($posts as $post)
                            
                        <div class="d-flex mb-3">
                            <img src="{{ asset('images/blogimg/' . $post->images) }}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">{{$post->category->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$post->date}}</span>
                                </div>
                                <a class="h6 m-0" href="{{ url("post/$post->id") }}">{{$post->title}}</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Articles</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Weather</a>
                        </div>
                    </div>
                    <!-- Tags End -->
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->
@endsection