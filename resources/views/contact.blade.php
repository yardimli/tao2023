@extends('default.headAndFooter')


@section('content')
    <body class="single page-contact">
        <div class="top-scroll-bar"></div>
        @include('default.mobileNav')
        <div id="wrapper">
            <header id="header" class="d-lg-block d-none">
                @include('default.header')
            </header>
            <main id="content">
                <div class="container">
                    <!--Begin Page Header-->
                        <div class="row">
                            <div class="col-12 archive-header text-center pt-3 pb-3 mb-5">
                                <h1 class="mb-3">Contact Us</h1>
                                <p class="archive-intro">We have a dedicated support center for all of your support needs. We usually get back to you within 12-24 hours.</p>
                            </div>                          
                        </div>                      
                       
                    <!--End Page Header-->
                    <article class="mb-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="spanborder">
                                    <span>Contact details</span>
                                </h4>
                                <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl.</p>
                                <div class="sidebar-widget widget-about">
                                    <p><i class="icon-map"></i> 423B, Wordwide Country, USA</p>
                                    <p><i class="icon-paper-plane"></i> alithemes@gmail.com</p>
                                    <p><i class="icon-phone"></i> +91-234-567-8900</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="spanborder">
                                    <span>Get in touch</span>
                                </h4>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur amet fermentum. Sed posuere consectetur est at lobortis.</p>
                                <div class="form-contact">
                                    <p><input type="text" name="your-name" placeholder="Your Name"></p>
                                    <p><input type="email" name="your-email" placeholder="Your Mail"></p>
                                    <p><textarea name="your-message" cols="40" rows="10" placeholder="Your Message"></textarea></p>
                                    <p><input type="submit" value="send message"></p>
                                </div>
                            </div>
                        </div>                       
                    </article> <!--entry-content-->                   
                </div> <!--container-->
            </main>
@endsection('content')