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
                
                @foreach ($collection as $art)
                <!--Start Single Art Box Style2-->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 masonry-item all art insta">
                    <div class="single-art-box-style2 marbtm50">
                        <div class="img-holder">
                            <img src="{{asset($art->art_file_path)}}" alt="Awesome Image">
                            <div class="overlay-content">
                                <div class="zoom-button">
                                    <a class="lightbox-image" data-fancybox="gallery" href="{{asset($art->art_file_path)}}">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3><a href="{{route('art.slug',$art->slug)}}">{{$art->name}}</a></h3>
                            <span>{{$art->artist->DisplayName}}</span>
                        </div>    
                    </div>
                </div>
                <!--End Single Art Box Style2-->
                @endforeach
                

            </div>
        </div>
        
        {!! $collection->links() !!}
    </div>
</section>
<!--End Gallery Area-->


@endsection
