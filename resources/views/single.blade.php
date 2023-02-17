@extends('layouts/home') @section('title'){{$art->name}}@endsection @section('content')
<style>
  .swal-button {
  padding: 7px 19px;
  border-radius: 2px;
  background-color: #000;
  font-size: 12px;
  border: 1px solid #000;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
}
</style>
<section class="breadcrumb-area" style="background-image: url({{asset('images/breadcrumb/breadcrumb-3.jpg')}})">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="inner-content clearfix">
            <div class="title">
              <h1>Art Detail</h1>
            </div>
            <div class="breadcrumb-menu">
              <ul class="clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">{{$art->name}}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!--Start subscribe Area-->

<section class="events-single-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          
        
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8">
          <div class="events-single-image-box" style=" height:600px; ">
            <img src="{{asset($art->art_file_path)}}" alt="Awesome Art" style=" height:600px; ">
            
        </div>
          <div class="events-single-text-box">
            <h2>
                {{$art->name}}
                <div class="zoom-button">
                    <a
                        class="lightbox-image"
                        data-fancybox="gallery"
                        href="{{asset($art->art_file_path)}}"
                    >View
                        <i
                            class="fa fa-search-plus"
                            aria-hidden="true"
                        ></i>
                    </a>
                </div>
            </h2>
            <p>
                {{$art->description}}
            </p>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="events-single-info-box">
            <ul class="events-info">
              <li>
                <p>Type :</p>
                <span>Year Made: {{$art->short_note}}</span>
              </li>
              <li>
                <p>Price :</p>
                <span>${{number_format($art->amount, 2) }}</span>
              </li>
              <li>
                <p>Category :</p>
                <span>{{$art->art_category->name}}</span>
              </li>
              <li>
                
                <button type="button" class="btn-one" data-toggle="modal" data-target="#exampleModalCenter">
                    Buy Now
                  </button>
              </li>
            </ul>
            <div class="social-links">
              <p>Share on Socials :</p>
              <ul class="sociallinks-style-two">
                <li>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="http://www.twitter.com/share?url={{Request::url()}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="mailto:info@admireart.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br>
      <div class="row">
        <!-- Single Events Detais Box-->
        <div class="col-xl-4">
          <div class="single-events-detais-box">
            <h3>Details</h3>
            <ul>
              <li><span>COST:</span>${{number_format($art->amount, 2) }}</li>
              <li><span>EVENT CATEGORY:</span>{{$art->art_category->name}}</li>
            </ul>
          </div>
        </div>
        <!-- End Events Detais Box-->
        <!-- Single Events Detais Box-->
        <div class="col-xl-4">
          <div class="single-events-detais-box">
            <h3>Venue</h3>
            <ul>
              <li><span>VENUE NAME:</span>Admire Arts</li>
              <li>
                <span>ADDRESS:</span>3420 Veteran Dr. #201, Pekin,<br />
                Illinois, US 61554<br>
              </li>
              <li>
                <span>PHONE:</span><a href="tel:1309-650-1352"
                >+44 (0) 744 144 3572</a
            >
              </li>
            </ul>
          </div>
        </div>
        <!-- End Events Detais Box-->
        <!-- Single Events Detais Box-->
        <div class="col-xl-4">
          <div class="single-events-detais-box">
            <h3>Artist</h3>
            <ul>
              <li><span>Artist NAME:</span>{{$art->artist->DisplayName}}</li>
              <li>
                <span>ORGANIZER NAME:</span>Admire Arts</li>
              <li>
                <span>EMAIL:</span><a href="mailto:info@admirearts.net">info@admireart.net</a>
              </li>
              <li>
                <span>WEBSITE:</span><a href="https://www.admirearts.net/">admireart.net</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Events Detais Box-->
      </div>
       <br>
    </div>
  </section>


  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Send message to gallery</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{route('Artcontact')}}" id="buy-form">
                @csrf
                <div class="input-box form-group"> 
                    <input  type="text" disabled name="form_subject" value="To: Admire Art" placeholder="Subject">
                </div>
                <div class="scontact-artwork-details">
                    <img src="{{asset($art->art_file_path)}}" style="width: 100px">
                    <p>{{$art->name}}</p><p><em>{{$art->artist->DisplayName}}</em></p></div>
                    <div class="input-box form-group"> 
                        <input class="form-control"  type="hidden" name="form_art" value="{{$art->id}}" placeholder="Full Name" required>
                    </div>
                <div class="input-box form-group">
                    <label for="message-text" class="col-form-label">Message:</label>   
                    <textarea class="form-control" rows="4"  id="message-text" name="form_message" placeholder="Your Message..." required="" aria-required="true">Hi, I’m interested in purchasing this work. Could you please provide more information about the piece?
                    </textarea>
                </div>
                <div class="input-box form-group"> 
                    <input class="form-control"  type="text" name="form_name" value="" placeholder="Full Name" required>
                </div>
                <div class="input-box form-group"> 
                    <input class="form-control"  type="email" name="form_email" value="" placeholder="Email" required>
                </div>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-two" data-dismiss="modal">Close</button>
          <button class="g-recaptcha btn-one" 
          data-sitekey="6LcqLNoZAAAAAGZmRONuKShUiPohmELb6VbgKNVr" 
          data-callback='onSubmit' 
          data-action='submit' style="width: 100%" type="submit" >Send</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <script>
@if (session('alert'))
        swal({
        title: '{{ session('alert') }}',
        icon: 'success',
        timer: 3000,
      });
      @endif
  </script>
  <script>
    function onSubmit(token) {
      document.getElementById("buy-form").submit();
    }
  </script>

@endsection
