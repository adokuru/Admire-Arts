<!--Start Exhibitions Area-->
<section class="exhibitions-area">
    <div class="container">
        <div class="sec-title">
            <p>CURRENT EXHIBITIONS & Display</p>
            <div class="big-title">
                <h1>Post-War Art</h1>
            </div>
        </div>
        <div class="row masonary-layout">
            <!--Start single exhibition Box-->
            @foreach ($arts as $art)
                
            
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                <div class="single-exhibition-box">
                    <div class="img-holder">
                        <img
                            src="{{asset($art->art_file_path)}}"
                            alt="Awesome Image"
                        />
                        <div class="overlay-style-one bg1">
                            <div class="zoom-button">
                                <a
                                    class="lightbox-image"
                                    data-fancybox="gallery"
                                    href="{{asset($art->art_file_path)}}"
                                >
                                    <i
                                        class="fa fa-search-plus"
                                        aria-hidden="true"
                                    ></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <span>{{$art->art_category->name}}</span>
                        <h2>
                            <a href="{{route('art.slug',$art->slug)}}"
                                >{{$art->name}}</a
                            >
                        </h2>
                        <p>{{ Str::words($art->description, 20, ' ...')}}</p>
                        <div class="button">
                            <div class="inner">
                                <a class="btn-one" href="{{route('art.slug',$art->slug)}}">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single exhibition Box-->
            @endforeach
          
        </div>
    </div>
</section>
<!--End Exhibitions Area-->