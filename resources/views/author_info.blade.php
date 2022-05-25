@extends('default.headAndFooter')


@section('content')
    <body class="archive">
    <div class="top-scroll-bar"></div>
    @include('default.mobileNav')
    <div id="wrapper">
        <header id="header" class="d-lg-block d-none">
            @include('default.header')
        </header>
        <main id="content">
            <div class="content-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="box box-author m_b_2rem">
                                <div class="post-author row-flex">
                                    <div class="author-img">
                                        @if(isset( $LoggedUserInfo['user_image']) && ($LoggedUserInfo['user_image'] !== "" || $LoggedUserInfo['user_image'] !== "NULL" ))
                                            <img alt="author avatar" src="/userImages/{{ $LoggedUserInfo['user_image'] }}" class="avatar">
                                        @else
                                            <img alt="author avatar" src="/images/user_default.png" class="avatar">
                                        @endif

                                    </div>
                                    <div class="author-content">
                                        <div class="top-author">
                                            <h5 class="heading-font"><a href="author" title="Ryan" rel="author">{{ $LoggedUserInfo['name'] }} </a></h5></div>
                                        @if(isset( $LoggedUserInfo['introduction']) && ($LoggedUserInfo['introduction'] !== "" || $LoggedUserInfo['introduction'] !== "NULL" ))
                                            <p class="d-none d-md-block">{{ $LoggedUserInfo['introduction'] }}</p>
                                        @else
                                            <p class="d-none d-md-block">This author is still a mystery.</p>
                                        @endif
                                        <div class="content-social-author">
                                            @if(isset( $LoggedUserInfo['facebook_link']))
                                                <a target="_blank" class="author-social" href="{{ $LoggedUserInfo['facebook_link'] }}">Facebook </a>
                                            @elseif(isset( $LoggedUserInfo['twitter_link']))
                                                <a target="_blank" class="author-social" href="{{ $LoggedUserInfo['twitter_link'] }}">Twitter </a>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <a class="btn btn-green d-inline-block mb-4 mb-md-0" href="edit_profile">Edit Profile</a>
                                <a class="btn btn-green d-inline-block mb-4 mb-md-0" href="edit_password">Reset Password</a>
                            </div>

                        </div>
                        <div class="col-md-4 pl-md-5 sticky-sidebar">

                        </div> <!--col-md-4-->
                    </div>
                </div>
            </div>

            <div class="content-widget">
                <div class="container">
                    <div class="sidebar-widget ads">
                        <a href="#"><img src="/images/ads/ads-2.png" alt="ads"></a>
                    </div>
                    <div class="hr"></div>
                </div>
            </div> <!--content-widget-->
        </main>
@endsection('content')
