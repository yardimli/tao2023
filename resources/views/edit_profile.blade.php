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

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div id="dropzone">
                                                    <div>Upload User Image</div>
                                                    <input type="file" id="user_image" accept="image/*" name="user_image">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Enter New Username :</label>
                                                    <input type="text" class="form-control" placeholder="Enter new username" name="name" value="{{ $LoggedUserInfo['name'] }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Enter New Email :</label>
                                                    <input type="email" placeholder="Enter new email" class="form-control" name="email" value="{{ $LoggedUserInfo['email'] }}">
                                                </div>
                                            </div>
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

                                        {{--<div class="form-group">--}}
                                            {{--<img id="preview-image-before-upload" src="https://climate.onep.go.th/wp-content/uploads/2020/01/default-image-300x300.jpg"--}}
                                                 {{--alt="preview image" style="max-height: 150px;">--}}
                                        {{--</div>--}}


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

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
        $(function() {

	        $('#dropzone').on('dragover', function() {
		        $(this).addClass('hover');
	        });

	        $('#dropzone').on('dragleave', function() {
		        $(this).removeClass('hover');
	        });

	        $('#dropzone input').on('change', function(e) {
		        var file = this.files[0];

		        $('#dropzone').removeClass('hover');


		        $('#dropzone').addClass('dropped');
		        $('#dropzone img').remove();

                var reader = new FileReader(file);

                reader.readAsDataURL(file);

                reader.onload = function(e) {
                    var data = e.target.result,
                        $img = $('<img />').attr('src', data).fadeIn();

	                $('#dropzone div').html('');
                    $('#dropzone').append($img);
                };

	        });
        });

</script>

        <style>
            #dropzone {
                display: flex;
                justify-content: center;
                align-items: center;
                border: 4px dotted #ddd;
                border-radius: 20px;
                /*font: 400 18px/200px Cabin;*/
                height: 170px;
                width: 170px;
                margin: 15px auto;
            }

            #dropzone.hover {
                border: 4px solid #828282;
                color: #828282;
            }

            #dropzone.dropped {
                background: #222;
                border: 10px solid #444;
            }


            #dropzone input{
                height: 100%;
            }

            #dropzone img {
                border-radius: 10px;
                max-width: 95%;
                max-height: 95%;
            }

            #dropzone [type="file"] {
                cursor: pointer;
                position: absolute;
                opacity: 0;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
            }
        </style>