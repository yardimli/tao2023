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
                                        @if(Session::get('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                        @elseif(Session::get('fail'))
                                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                        @endif

                                        <div class="form-group">
                                            <label>Enter New Username :</label>
                                            <input type="text" class="form-control" placeholder="Enter new username" name="name" value="{{ $LoggedUserInfo['name'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter New Email :</label>
                                            <input type="email" placeholder="Enter new email" class="form-control" name="email" value="{{ $LoggedUserInfo['email'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>About me :</label>
                                            <textarea type="text" placeholder="Write some words to describe yourself" name="introduction">{{ $LoggedUserInfo['introduction'] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Facebook Link Url:</label>
                                            <input type="url" placeholder="Enter facebook link url" class="form-control" name="facebook_link" value="{{ $LoggedUserInfo['facebook_link'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Twitter Link Url:</label>
                                            <input type="url" placeholder="Enter twitter link url" class="form-control" name="twitter_link" value="{{ $LoggedUserInfo['twitter_link'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload User Image :</label>
                                            <input type="file" id="user_image" class="form-control" name="user_image" style="line-height: unset; cursor: pointer">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Current Password :</label>
                                            <input type="password" class="form-control" placeholder="Enter password confirmation"
                                                   name="password">
                                        </div>
                                        <button type="submit" class="btn btn-dark">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection('content')
