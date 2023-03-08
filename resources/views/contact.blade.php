@extends('layouts/home') @section('title', 'Contact Us') @section('content')
<section class="breadcrumb-area" style="background-image: url(images/breadcrumb/breadcrumb-4.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Contact Form Section-->
<section class="contact-form-area">
    <div class="auto-container">
        <div class="sec-title text-center">
            <div class="big-title">
                <h1>Get in Touch</h1>
            </div>
            <p>Feel free to get in touch with me. we alwasy open to discussing now projects, createive ideas<br> or
                opportunities to be part of your visions</p>
        </div>
        <div class="row clearfix">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="contact-form">
                    <div class="inner-box">
                        <form id="contact-form" name="contact_form" class="default-form2"
                            action="{{ route('contactform') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input-box">
                                        <input type="text" name="form_name" value="" placeholder="Name"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input-box">
                                        <input type="email" name="form_email" value="" placeholder="Email"
                                            required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <textarea name="form_message" placeholder="Your Message..." required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="button-box text-center">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control"
                                            type="hidden" value="">
                                        <button g-recaptcha data-sitekey="6LcqLNoZAAAAAGZmRONuKShUiPohmELb6VbgKNVr"
                                            data-callback='onSubmit' data-action='submit' type="submit"
                                            data-loading-text="Please wait...">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Contact Form Section-->

<script>
    function onSubmit(token) {
        document.getElementById("contact-form").submit();
    }
</script>
@endsection
