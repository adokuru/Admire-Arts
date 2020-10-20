@extends('layouts/home') @section('title', 'Auctions') @section('content')

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/breadcrumb/breadcrumb-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                       <h1>Gallery</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li class="active">Gallery</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!--Start subscribe Area-->

<!--Start Gallery Area-->
<section class="gallery-area">
    <div class="container">
        <div class="sortable-masonry">
            <!--Filter-->
            
            <div class="row items-container clearfix">
                <!--Start Single Art Box Style2-->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 masonry-item all art insta">
                    <div class="single-art-box-style2 marbtm50">
                        <div class="img-holder">
                            <img src="images/art/art-v2-1.jpg" alt="Awesome Image">
                            <div class="overlay-content">
                                <div class="zoom-button">
                                    <a class="lightbox-image" data-fancybox="gallery" href="images/art/art-v2-1.jpg">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3><a href="#">Mysteries of Prince Shōtoku</a></h3>
                            <span>Tankha Atska</span>
                        </div>    
                    </div>
                </div>
                <!--End Single Art Box Style2-->

            </div>
        </div>
        
        <div class="view-more-button text-center">
            <a class="btn-two" href="#">View More</a>
        </div>
    </div>
</section>
<!--End Gallery Area-->


@endsection
