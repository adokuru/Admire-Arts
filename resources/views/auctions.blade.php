@extends('layouts/home') @section('title', 'Auctions') @section('content')

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/breadcrumb/breadcrumb-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                       <h1>Art Auctions</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Art Auctions</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!--Start subscribe Area-->

<section class="art-area art-page sortable-masonry">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="sec-title pull-left">
                    <p>EXPLORE ART</p>
                    <div class="big-title"><h1>From Our Collection</h1></div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container art-container">
        <div class="row items-container">
            @foreach ($collection as $art)
                <!--Start Single Art Box-->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 masonry-item all art insta">
                <div class="single-art-box">
                    <div class="img-holder">
                        <img src="{{asset($art->art_file_path)}}" alt="Awesome Image">
                        <div class="overlay-content">
                            <div class="title"> 
                                <h3><a href="{{route('art.slug',$art->slug)}}">{{$art->name}}</a></h3>
                            </div>
                            <div class="meta-box">
                                <ul>
                                    <li><a href="{{route('art.slug',$art->slug)}}"><i class="fa fa-heart-o" aria-hidden="true"></i>  Bid Now</a></li>
                                    
                                </ul>
                            </div>    
                        </div>
                    </div>    
                </div>
            </div>
            <!--End Single Art Box-->
            @endforeach
            
            
        </div>
        <div class="row">
            <div class="col-xl-12">
                {!! $collection->links() !!}
            </div>
        </div>
    </div>
</section>


@endsection
