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

                                    <form id="editProfileForm" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('auth.updateUserInfo') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        @if(Session::get('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                        @elseif(Session::get('fail'))
                                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                        @endif
                                        <div class="row">
                                            <div class="col-md-4 text-center">
                                                <div id="dropzone">
                                                    @if(isset( $LoggedUserInfo['user_image']) && $LoggedUserInfo['user_image'] !== "NULL")
                                                        <img src="/userImages/{{ $LoggedUserInfo['user_image'] }}" alt="profile_image">
                                                        <div style="position: absolute; background-color: white; padding: 0px 10px; opacity: 0.6;">Upload User Image</div>
                                                    @else
                                                        <div>Upload User Image</div>
                                                    @endif
                                                    <input type="file" id="user_image" accept="image/*">
                                                </div>
                                                <div id="upload-demo" style="display: none;"></div>
                                                <input type="hidden" id="user_image_name" name="user_image_name">
                                                <input type="hidden" id="crop_image" name="crop_image">
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
                                        <button id="updateUserInfo" type="submit" class="btn btn-dark">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('js/croppie.js') }}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/croppie.min.css') }}">
        <script type="text/javascript">


					var resize = $('#upload-demo').croppie({
						enableExif: true,
						enableOrientation: true,
						viewport: { // Default { width: 100, height: 100, type: 'square' }
							width: 150,
							height: 150,
							type: 'circle' //square
						},
						boundary: {
							width: 160,
							height: 160
						}
					});


					//	$('#dropzone input').on('change', function () {
					//		var reader = new FileReader();
					//		reader.onload = function (e) {
					//			resize.croppie('bind',{
					//				url: e.target.result
					//			}).then(function(){
					//				console.log('jQuery bind complete');
					//			});
					//		}
					//		reader.readAsDataURL(this.files[0]);
					//	});

					$(function() {

						$('#dropzone').on('dragover', function() {
							$(this).addClass('hover');
						});

						$('#dropzone').on('dragleave', function() {
							$(this).removeClass('hover');
						});

						$('#dropzone input').on('change', function(e) {
							$("#upload-demo").show();
							$("#dropzone").css('display','none');


							var file = this.files[0];
							var imageFileName = file['name'];
							$('#user_image_name').val(imageFileName);

							$('#dropzone').removeClass('hover');


							$('#dropzone').addClass('dropped');
							$('#dropzone img').remove();

							var reader = new FileReader(file);
							reader.onload = function (e) {
								resize.croppie('bind',{
									url: e.target.result
								}).then(function(){
									console.log('jQuery bind complete');
								});
							}
							reader.readAsDataURL(file);

						});
					});

					$('.cr-slider').on('change', function (ev) {
						resize.croppie('result', {
							type: 'canvas',
							size: 'viewport'
						}).then(function (img) {
							$("#crop_image").val(img);
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

@endsection('content')