@extends('layouts/home') @section('title', 'Single Post') @section('content')

<section class="breadcrumb-area" style="background-image: url(images/breadcrumb/breadcrumb-3.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="inner-content clearfix">
            <div class="title">
              <h1>Event Detail</h1>
            </div>
            <div class="breadcrumb-menu">
              <ul class="clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Event Detail</li>
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
          <div class="events-single-image-box">
            <img src="images/events/event_single_img_1.jpg" alt="Awesome Image">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8">
          <div class="events-single-text-box">
            <h2>
              Opening Reception: 'Alexander Calder. From the<br>
              Stony River'
            </h2>
            <p>
              Cras dapibus ullamcorper dictum. Vivamus nec erat placerat
              felis scelerisque porttitor in ac turpis. In nec imperdiet
              turpis. Suspendisse quis orci ut orci pulvinar eleifend. Nulla
              eu mattis ipsum. Integer eget sagittis nulla. Praesent
              consectetur lacus et maximus eleifend. Integer non lacus dui.
              Mauris tortor diam, laoreet quis commodo vitae, sodales vel
              augue. Sed rutrum, libero non pretium tristique, arcu mi
              sollicitudin ex, quis venenatis orci tellus vel dolor. Donec
              gravida, dolor ut auctor facilisis, enim dolor pellentesque
              lectus, nec vehicula nibh risus ac leo.
            </p>
            <p>
              Mauris volutpat aliquam tellus nec rhoncus. Aliquam et nibh
              pulvinar, sodales nibh et, pretium urna. Vivamus quam augue,
              maximus in consequat imperdiet, iaculis non nibh. Aliquam erat
              volutpat. Curabitur venenatis massa sed lacus tristique, non
              auctor nisl sodales. Sed ultricies lacus ut libero faucibus
              fringilla. Ut nisi tellus, posuere vel mattis nec, convallis a
              metus. Nullam elementum molestie felis nec lobortis. Cras at
              justo eu elit semper tempor sed quis orci. In risus magna,
              malesuada vel elementum ut, finibus et nunc.
            </p>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="events-single-info-box">
            <ul class="events-info">
              <li>
                <p>Type :</p>
                <span>Gallery Talk</span>
              </li>
              <li>
                <p>Time :</p>
                <span>April 1, 2019 - 12:00 AM - 12:00 AM</span>
              </li>
              <li>
                <p>Venue :</p>
                <span>32 Quincy Street, Cambridge, MA</span>
              </li>
              <li>
                <p>Duration :</p>
                <span>120 Minutes (approximately)</span>
              </li>
            </ul>
            <div class="social-links">
              <p>Shear :</p>
              <ul class="sociallinks-style-two">
                <li>
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="events-single-map-box">
            <div class="map-outer">
              <!--Map Canvas-->
              <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/resources/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Single Events Detais Box-->
        <div class="col-xl-4">
          <div class="single-events-detais-box">
            <h3>Details</h3>
            <ul>
              <li><span>START:</span>November 30</li>
              <li><span>END:</span>November 28, 2020</li>
              <li><span>COST:</span>$35</li>
              <li><span>EVENT CATEGORY:</span>Art</li>
            </ul>
          </div>
        </div>
        <!-- End Events Detais Box-->
        <!-- Single Events Detais Box-->
        <div class="col-xl-4">
          <div class="single-events-detais-box">
            <h3>Venue</h3>
            <ul>
              <li><span>VENUE NAME:</span>Central Park</li>
              <li>
                <span>ADDRESS:</span>Brooklyn, NY 10036<br>
                New York, United States<br>
                + Google Map
              </li>
              <li>
                <span>PHONE:</span><a href="tel:1(000)1112233">+ 1 (000) 111 2233</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Events Detais Box-->
        <!-- Single Events Detais Box-->
        <div class="col-xl-4">
          <div class="single-events-detais-box">
            <h3>Organizer</h3>
            <ul>
              <li><span>ORGANIZER NAME:</span>Nick Sims</li>
              <li>
                <span>PHONE:</span><a href="tel:1(123)2345678">+1 123 2345 678</a>
              </li>
              <li>
                <span>EMAIL:</span><a href="mailto:info@templatepath.com">sims@example.com</a>
              </li>
              <li>
                <span>WEBSITE:</span><a href="https://www.example.com/">example.com</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Events Detais Box-->
      </div>

      <div class="row">
        <div class="col-xl-12">
          <div class="project-single-prev-next-button wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInUp;">
            <div class="button">
              <a class="prev" href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Prev Event</a>
              <a class="middle" href="#">
                <img src="images/icon/prev-next-button-icon.png" alt="Button Icon">
              </a>
              <a class="next" href="#">Next Event<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
