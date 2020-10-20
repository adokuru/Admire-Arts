@extends('layouts/home') @section('title', 'Home') @section('content')

@include('sections/featuredArt')

<!--Start Events Area-->
<section class="events-area">
    <div class="container">
        <div class="sec-title">
            <p>Featured Categories</p>
            <div class="big-title"><h1>Impressionist & Modern Art</h1></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div
                    class="event-carousel owl-carousel owl-theme owl-dot-style1"
                >
                    <!--Start Single event Box-->
                    @foreach ($feautredart as $fart)
                    <div class="single-event-box">
                        <div class="img-holder">
                            <div class="inner">
                                <img style="width: 370px; height:250px" 
                                    src="{{asset($fart->art_file_path)}}"
                                    alt="Awesome Image"
                                />
                                <div class="overlay-style-one bg2"></div>
                            </div>
                            <div class="date-box">
                                <div class="left">$</div>
                                <div class="right">
                                    <h3>{{number_format($fart->amount, 2) }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="title-holder">
                            <div class="inner">
                                <span>{{$fart->art_category->name}}</span>
                                <h3>
                                    <a href="{{route('art.slug',$fart->slug)}}">{{$fart->name}}</a
                                    ><i
                                        class="fa fa-angle-double-right"
                                        aria-hidden="true"
                                    ></i>
                                </h3>
                            </div>
                            <div class="bottom">
                                <div class="text">
                                    {{$fart->artist->DisplayName}}
                                </div>
                                <div class="button">
                                    <a href="{{route('art.slug',$fart->slug)}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach
                    
                   
                    <!--End Single event Box-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Events Area-->

<!--Start Art Area-->
<section class="art-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="top">
                    <div class="sec-title">
                        <p>EXPLORE ART</p>
                        <div class="big-title">
                            <h1>Works by popular artists</h1>
                        </div>
                    </div>
                    <div class="view-more-button">
                        <a class="btn-one" href="#">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container art-container">
        <div class="row masonary-layout">
            <!--Start Single Art Box-->
            @foreach ($artistart as $arts)
            <div
            class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp animated"
            data-wow-delay="00ms"
            data-wow-duration="1500ms"
        >
            <div class="single-art-box">
                <div class="img-holder" style="height: 350px; width:350px;">
                    <img
                        src="{{asset($arts->art_file_path)}}"
                        alt="Awesome Image"
                    />
                    <div class="overlay-content">
                        <div class="title">
                            <h3>
                                <a href="{{route('art.slug',$arts->slug)}}"
                                    >{{$arts->name}} <br> By {{$arts->artist->DisplayName}}</a
                                >
                            </h3>
                        </div>
                        <div class="readmore-button">
                            <a href="{{route('art.slug',$arts->slug)}}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
            
            <!--End Single Art Box-->
            
        </div>
    </div>
</section>
<!--End Art Area-->

<!--Start Fact Counter Area-->
<section class="fact-counter-area">
    <div class="container">
        <div class="sec-title text-center">
            <p>
                Everything about our organization in numerical counter view.
            </p>
            <div class="big-title">
                <h1>
                    We Strive for Perfection<br />
                    Every day.
                </h1>
            </div>
        </div>
        <div class="row">
            <!--Start Single Fact Counter-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div
                    class="single-fact-counter text-center wow fadeInLeft"
                    data-wow-delay="100ms"
                    data-wow-duration="1500ms"
                >
                    <div class="icon">
                        <img src="images/icon/fact-counter-1.png" alt="Icon" />
                    </div>
                    <div class="count-box">
                        <h1>
                            <span
                                class="timer"
                                data-from="1"
                                data-to="356"
                                data-speed="5000"
                                data-refresh-interval="50"
                                >356</span
                            >
                        </h1>
                    </div>
                    <div class="title">
                        <h3>
                            Over Organized<br />
                            Exhibitions
                        </h3>
                    </div>
                </div>
            </div>
            <!--End Single Fact Counter-->
            <!--Start Single Fact Counter-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div
                    class="single-fact-counter text-center wow fadeInLeft"
                    data-wow-delay="100ms"
                    data-wow-duration="1500ms"
                >
                    <div class="icon">
                        <img src="images/icon/fact-counter-2.png" alt="Icon" />
                    </div>
                    <div class="count-box">
                        <h1>
                            <span
                                class="timer"
                                data-from="1"
                                data-to="400"
                                data-speed="5000"
                                data-refresh-interval="50"
                                >400</span
                            >
                        </h1>
                    </div>
                    <div class="title">
                        <h3>
                            Unique Objects Around<br />
                            the World
                        </h3>
                    </div>
                </div>
            </div>
            <!--End Single Fact Counter-->
            <!--Start Single Fact Counter-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div
                    class="single-fact-counter text-center wow fadeInLeft"
                    data-wow-delay="100ms"
                    data-wow-duration="1500ms"
                >
                    <div class="icon">
                        <img src="images/icon/fact-counter-3.png" alt="Icon" />
                    </div>
                    <div class="count-box">
                        <h1>
                            <span
                                class="timer"
                                data-from="1"
                                data-to="80"
                                data-speed="5000"
                                data-refresh-interval="50"
                                >80</span
                            >
                        </h1>
                    </div>
                    <div class="title">
                        <h3>
                            Multi media Exhibitions<br />
                            with a Guide
                        </h3>
                    </div>
                </div>
            </div>
            <!--End Single Fact Counter-->
            <!--Start Single Fact Counter-->
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div
                    class="single-fact-counter text-center wow fadeInLeft"
                    data-wow-delay="100ms"
                    data-wow-duration="1500ms"
                >
                    <div class="icon">
                        <img src="images/icon/fact-counter-4.png" alt="Icon" />
                    </div>
                    <div class="count-box">
                        <h1>
                            <span
                                class="timer"
                                data-from="1"
                                data-to="4648"
                                data-speed="5000"
                                data-refresh-interval="50"
                                >4,648</span
                            >
                        </h1>
                    </div>
                    <div class="title">
                        <h3>
                            Tickets Sold by our<br />
                            Organization
                        </h3>
                    </div>
                </div>
            </div>
            <!--End Single Fact Counter-->
        </div>
    </div>
</section>
<!--End Fact Counter Area-->

<!--Start latest blog area -->
<section class="latest-blog-area">
    <div class="container inner-content">
        <div class="row">
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                <div class="latest-blog-title">
                    <div class="sec-title">
                        <p>OUR LATEST NEWS</p>
                        <div class="big-title">
                            <h1>
                                Interviews and<br />
                                Publications
                            </h1>
                        </div>
                    </div>
                    <div class="text">
                        <p>
                            Your our Latest News interview and<br />
                            Publication on your Update work. if you<br />
                            want to this to you subcribe us now<br />
                            and more detial
                        </p>
                        <a href="/Editorial">More View</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                <div
                    class="blog-carousel owl-carousel owl-theme owl-nav-style-one"
                >
                    <!--Start single blog post-->
                    <div
                        class="single-blog-post wow fadeInLeft"
                        data-wow-delay="0ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img
                                src="images/blog/latest-b-v1-1.jpg"
                                alt="Awesome Image"
                            />
                            <div class="overlay-style-one bg1"></div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <span>January 12, 2019</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="#"
                                    >Looking Forward: The Phasrasth and
                                    Kenyard</a
                                >
                            </h3>
                            <div class="text">
                                Her tricky smile and timeless allure have
                                inspired academic study & artistic emulation for
                                more than five once and
                            </div>
                            <div class="button-box">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div
                        class="single-blog-post wow fadeInLeft"
                        data-wow-delay="0ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img
                                src="images/blog/latest-b-v1-2.jpg"
                                alt="Awesome Image"
                            />
                            <div class="overlay-style-one bg1"></div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <span>January 12, 2019</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="#"
                                    >Scenes from Stepan Hawkin’s World</a
                                >
                            </h3>
                            <div class="text">
                                In a 1982 essay, Halley wrote that the idealist
                                square becomes the prison made Geoetry is
                                revealed as confinementIn other
                            </div>
                            <div class="button-box">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->

                    <!--Start single blog post-->
                    <div
                        class="single-blog-post wow fadeInLeft"
                        data-wow-delay="0ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img
                                src="images/blog/latest-b-v1-1.jpg"
                                alt="Awesome Image"
                            />
                            <div class="overlay-style-one bg1"></div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <span>January 12, 2019</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="#"
                                    >Looking Forward: The Phasrasth and
                                    Kenyard</a
                                >
                            </h3>
                            <div class="text">
                                Her tricky smile and timeless allure have
                                inspired academic study & artistic emulation for
                                more than five once and
                            </div>
                            <div class="button-box">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                    <!--Start single blog post-->
                    <div
                        class="single-blog-post wow fadeInLeft"
                        data-wow-delay="0ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="img-holder">
                            <img
                                src="images/blog/latest-b-v1-2.jpg"
                                alt="Awesome Image"
                            />
                            <div class="overlay-style-one bg1"></div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <span>January 12, 2019</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="#"
                                    >Scenes from Stepan Hawkin’s World</a
                                >
                            </h3>
                            <div class="text">
                                In a 1982 essay, Halley wrote that the idealist
                                square becomes the prison made Geoetry is
                                revealed as confinementIn other
                            </div>
                            <div class="button-box">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End latest blog area-->


@endsection
