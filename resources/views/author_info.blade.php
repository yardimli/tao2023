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
                                        <p class="d-none d-md-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse laoreet ut ligula et
                                            semper. Aenean consectetur, est id gravida venenatis.</p>
                                        <div class="content-social-author">
                                            <a target="_blank" class="author-social" href="#">Facebook </a>
                                            <a target="_blank" class="author-social" href="#">Twitter </a>
                                            <a target="_blank" class="author-social" href="#"> Google + </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">
                                    <h6>Change User Information</h6>
                                </div>
                                <div class="card-body">
                                    @if (count($errors))
                                        @foreach ($errors->all() as $error)

                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif

                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('auth.updateUserInfo') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <div class="form-group">
                                            <label>Enter New Username :</label>
                                            <input type="text" id="first-name" class="form-control" placeholder="Enter new username" name="name" value="{{ $LoggedUserInfo['name'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter New Email :</label>
                                            <input type="email" id="first-name" placeholder="Enter new email" class="form-control" name="email" value="{{ $LoggedUserInfo['email'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Current Password :</label>
                                            <input type="password" id="first-name" class="form-control" placeholder="Enter password confirmation"
                                                   name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload User Image :</label>
                                            <input type="file" id="user_image" class="form-control" name="user_image" style="line-height: unset; cursor: pointer">
                                        </div>
                                        @if(Session::get('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                        @elseif(Session::get('fail'))
                                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                        @endif
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h6>Change Password with Current Password Validation</h6>
                                </div>
                                <div class="card-body">
                                    @if (count($errors))
                                        @foreach ($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                        @endforeach
                                    @endif
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('auth.updatePassword') }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label>Enter Old Password :</label>
                                            <input type="password" id="first-name" class="form-control" placeholder="Enter old password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter New Password :</label>
                                            <input type="password" id="first-name" placeholder="Enter new password" class="form-control" name="newpassword">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Confirm Password :</label>
                                            <input type="password" id="first-name" class="form-control" placeholder="Enter password confirmation"
                                                   name="newpassword_confirmation">
                                        </div>
                                        @if(Session::get('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                        @elseif(Session::get('fail'))
                                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                        @endif
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
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
