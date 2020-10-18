@extends('layouts/home') @section('title', 'Artists') @section('content')

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/breadcrumb/breadcrumb-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                       <h1>Artists</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Artists</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<div class="container mt-5">
    <div class="row">
        @foreach ($artists as  $artist)
            
      
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="https://ui-avatars.com/api/?bold=true&name={{$artist->DisplayName}}" width="70">
                    <div class="d-flex flex-column ml-2"><span>Name: {{$artist->DisplayName}} </span><span class="text-black-50">Gender: {{$artist->Gender}} <br> Nationality: {{$artist->Nationality}} </span></div>
                </div>
                <h6>{{$artist->ArtistBio}}</h6>
            </div>
        </div>

        @endforeach
    </div>
    <br>
    
        {!! $artists->links() !!}
    

</div>


@endsection