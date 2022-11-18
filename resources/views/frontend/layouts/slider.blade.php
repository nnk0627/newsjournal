
<!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="images/slider/blog-slider-09.png" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="">Sanctus amet sed amet ipsum lorem. Dolores et erat et elitr sea sed</a>
                            </div>
                        </div>
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="images/slider/blog-slider-12.jfif" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="">Sanctus amet sed amet ipsum lorem. Dolores et erat et elitr sea sed</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Categories</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="{{url('blog')}}">View All</a>
                    </div>
                    @foreach($categories as $category)
                    <div class="position-relative overflow-hidden mb-3" style="height: 60px;">
                       
                        <a href="{{route('family',$category->id)}}" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                        {{$category->title}}
                        </a>
                       
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


  
    </div>