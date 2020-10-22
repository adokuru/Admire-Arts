<!--Start subscribe Area-->
<section class="subscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="subscribe-title">
                    <h1>News Letter Now</h1>
                    <span
                        >Receive e-mail updates on our new arts, auctions, and
                        more........</span
                    >
                </div>
            </div>
            <div class="col-xl-6">
                <div class="subscribe-box">
                    <form class="subscribe-form" action="{{route('newsletter')}}" method="POST">
                        @csrf
                        <input
                            type="email"
                            name="email"
                            placeholder="Your Email Address"
                        />
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Start Partner Area Style3-->
<section class="partner-style3-area fix">
    <div class="layer-outer"></div>
    <div class="container">
        <div class="sec-title text-center">
            <div class="big-title"><h1>Our Partners & Sponsers</h1></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="partner-box">
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="{{asset('images/brand/1.png')}}" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="{{asset('images/brand/2.png')}}" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="{{asset('images/brand/3.png')}}" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="{{asset('images/brand/4.png')}}" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <div class="single-partner-logo-box">
                        <a href="#"><img src="{{asset('images/brand/5.png')}}" alt="Awesome Image"></a>
                    </div>
                    <!--End Single Partner Logo Box-->
                </div>
            </div>
        </div>
    </div>
</section> 
<!--End Partner Area Style3--> 

<script>
    @if (session('alerts'))
            swal({
            title: '{{ session('alerts') }}',
            icon: 'success',
            timer: 3000,
          });
          @endif
      </script>