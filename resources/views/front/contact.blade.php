@extends('master')
@section('title','contact')
@section('main')
<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title container">Contact</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs container">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Contact</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="site-main main-container no-sidebar">
    <div class="section-041">
        <div class="container">
            {{-- <div class="kobolg-google-maps" id="kobolg-google-maps" data-hue="" data-lightness="1" data-map-style="2"
                 data-saturation="-99" data-longitude="-73.985130" data-latitude="40.758896" data-pin-icon=""
                 data-zoom="14" data-map-type="ROADMAP"></div>
        </div> --}}
        <div align="center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.123532952015!2d105.80185907479616!3d21.02774258781446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab43b09c6ff3%3A0x13c84b17203e8dd5!2sHong%20Kong%20Tower!5e0!3m2!1svi!2s!4v1690981454627!5m2!1svi!2s" width="900" height="500" style="border-radius: 2em" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="section-042">
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-xl-1 col-xl-10 col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="az_custom_heading">WP SHOP THEME</h4>
                            <p>3100 West Cary Street Richmond, Virginia 23221<br>
                                P: 804.355.4383 F: 804.367.7901</p>
                            <h4 class="az_custom_heading">Store Hours</h4>
                            <p>Monday-Saturday 11am-7pm ET<br>
                                Sunday 11am-6pm ET</p>
                            <h4 class="az_custom_heading">Specialist Hours</h4>
                            <p>Monday-Friday 9am-5pm ET</p>
                        </div>
                        <div class="col-md-6">
                            <div role="form" class="wpcf7">
                                <form class="wpcf7-form">
                                    <p><label> Name *<br>
                                        <span class="wpcf7-form-control-wrap your-name">
                                            <input name="your-name" value="" size="40"
                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                   type="text"></span>
                                    </label></p>
                                    <p><label> Email *<br>
                                        <span class="wpcf7-form-control-wrap your-email">
                                            <input name="your-email" value="" size="40"
                                                   class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                   type="email"></span>
                                    </label></p>
                                    <p><label> Your Message *<br>
                                        <span class="wpcf7-form-control-wrap your-message">
                                            <textarea name="your-message"
                                                      cols="40" rows="10"
                                                      class="wpcf7-form-control wpcf7-textarea"></textarea></span>
                                    </label></p>
                                    <p><input value="Send" class="wpcf7-form-control wpcf7-submit" type="submit"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
