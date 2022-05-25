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
                                        @if(Session::get('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                        @elseif(Session::get('fail'))
                                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                        @endif
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
