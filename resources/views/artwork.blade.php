@extends('layouts/home') @section('title', 'Artworks') @section('content')


<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/breadcrumb/breadcrumb-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                       <h1>Artworks</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Artworks</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<!--Start Exhibitions Area-->
<section class="exhibitions-area exhibitions-page">
    <div class="container">
        <div class="row masonary-layout">
            @foreach ($feautredart as $art)
               <!--Start single exhibition Box-->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                <div class="single-exhibition-box style4">
                    <div class="img-holder">
                        <img src="{{asset($art->art_file_path)}}" alt="Awesome Image">
                        <div class="overlay-style-one bg1">
                            <div class="zoom-button">
                                <a class="lightbox-image" data-fancybox="gallery" href="{{asset($art->art_file_path)}}">
                                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder text-center">
                        <span>{{$art->art_category->name}}</span>
                        <h2><a href="{{route('art.slug',$art->slug)}}">{{$art->name}}</a></h2>
                        <p>Year Made: {{$art->short_note}}</p>
                        <div class="bottom">
                            <div class="review-box">
                                @if ( $art->amount < 40000)
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                   
                                </ul>
                                @else
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul> 
                                @endif
                                


                            </div>
                            <div class="value">$ {{number_format($art->amount, 2) }}</div>
                        </div>
                    </div>   
                </div>    
            </div>
            <!--End single exhibition Box--> 
            @endforeach
            
           
              
        </div>
                {!! $feautredart->links() !!}
    </div>
</section>
<!--End Exhibitions Area-->

@endsection
