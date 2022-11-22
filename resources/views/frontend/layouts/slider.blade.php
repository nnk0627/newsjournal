
<!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    
                        <div class="carousel-inner">
                            @php $i=1; @endphp
                            @foreach ($slider as $post)
                            <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">
                                @php $i++; @endphp
                                <div class="position-relative" style="height: 435px;">
                                    <img class="img-fluid w-100 h-100" src="{{ asset('images/' . $post->slideimages) }}" style="object-fit: cover;">
                                    <div class="overlay">
                                        <div class="mb-1">
                                            <a class="text-white" href="">{{$post->category->title}}</a>
                                            <span class="px-2 text-white">/</span>
                                            <span class="text-white">{{$post->date}}</span>
                                        </div>
                                       
                                        <a class="h4 m-0 text-white" href="{{ url("post/$post->id") }}">{{$post->title}}</a>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Categories</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="{{url('blog')}}">View All</a>
                    </div>
                    @foreach($categories as $category)
                    <div class="position-relative overflow-hidden mb-3" style="height: 60px; ">
                        
                        <a href="{{route('family',$category->id)}}" class="overlay align-items-center justify-content-center h4 m-0  text-decoration-none">
                        {{$category->title}}
                        </a>
                        
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->
