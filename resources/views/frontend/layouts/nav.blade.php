<!-- Topbar Start -->
<div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">Tranding</div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                    @foreach ($posts as $post)                       
                    <div class="text-truncate"><a class="text-secondary" href="">{{ $post->title }}</a></div>
                    @endforeach    
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block" style="font-size: 14px;">
            <span id="date-time"> </span>
            <script>
            var dt = new Date();
            document.getElementById('date-time').innerHTML=dt;
            </script>
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-8">
                <a href="" class="navbar-brand d-none d-lg-block">
                @foreach ($sites as $site)
                  
                <div class="row ">
                    <img style="width: 140px;height:60px; margin-left: 15px;" class="rounded" src="{{ asset('images/' . $site->image) }}" alt="">
                    <h2 class="m-0 display-5 text-uppercase px-2 "><span class="text-primary ">{{ $site->title }}</span></h2>
                </div>                                       
                    
                @endforeach 
                </a>
            </div>
           
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{url('blog')}} " class="nav-item nav-link mx-2"> News</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                        <div class="dropdown-menu rounded-0 m-0">
                        @foreach($categories as $category)
                            <a class="dropdown-item" href="{{route('family',$category->id)}}">
                            {{$category->title}}</a>   
                        @endforeach
                        </div>
                    </div>
                    <a href="{{url('contact-us')}}" class="nav-item nav-link">Contact</a>

                </div>
               
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

