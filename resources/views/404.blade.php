@extends('default.headAndFooter')


@section('content')
    <body class="single page-404">
        <div class="top-scroll-bar"></div>
        @include('default.mobileNav')
        <div id="wrapper">
            <header id="header" class="d-lg-block d-none">
                @include('default.header')
            </header>
            <main id="content">
                <div class="container">
                    <article class="entry-wraper mb-5">
                        <h1 class="text-center mb-3 mt-5">404</h1>
                        
                        <form action="#" method="get" class="search-form d-lg-flex open-search mb-5">                           
                            <i class="icon-search"></i>                            
                            <input type="text" class="search_field" placeholder="Search..." value="" name="s">
                        </form>

                        <p class="text-center">The link you clicked may be broken or the page may have been removed.<br>
                            visit the <a href="index">Homepage</a> or <a href="contact">Contact us</a> about the problem
                        </p>
                    </article> <!--entry-content-->                   
                </div> <!--container-->
            </main>
@endsection('content')