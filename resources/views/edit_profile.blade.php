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

                                    <form id="editProfileForm" data-parsley-validate
                                          class="form-horizontal form-label-left"
                                          action="{{ route('auth.updateUserInfo') }}" method="post"
                                          enctype="multipart/form-data">
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
                                                    @if(isset( $LoggedUserInfo['user_image']) && ($LoggedUserInfo['user_image'] !== "" && $LoggedUserInfo['user_image'] !== "NULL" ))
                                                        <img src="/userImages/{{ $LoggedUserInfo['user_image'] }}"
                                                             alt="profile_image">
                                                        <div style="position: absolute; background-color: white; padding: 0px 10px; opacity: 0.6;">
                                                            Upload User Image
                                                        </div>
                                                    @else
                                                        <div>Upload User Image</div>
                                                    @endif
                                                    <input type="file" id="user_image" class="form-control"
                                                           name="user_image">
                                                </div>
                                                <div id="upload-demo" style="display: none;"></div>
                                                <input type="hidden" id="crop_image" name="crop_image">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Enter New Username :</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="Enter new username" name="name"
                                                           value="{{ $LoggedUserInfo['name'] }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Enter New Email :</label>
                                                    <input type="email" placeholder="Enter new email"
                                                           class="form-control" name="email"
                                                           value="{{ $LoggedUserInfo['email'] }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>About me :</label>
                                            <textarea type="text" placeholder="Write some words to describe yourself"
                                                      name="introduction">{{ $LoggedUserInfo['introduction'] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Facebook Link Url:</label>
                                            <input type="url" placeholder="Enter facebook link url" class="form-control"
                                                   name="facebook_link" value="{{ $LoggedUserInfo['facebook_link'] }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Twitter Link Url:</label>
                                            <input type="url" placeholder="Enter twitter link url" class="form-control"
                                                   name="twitter_link" value="{{ $LoggedUserInfo['twitter_link'] }}">
                                        </div>


                                        <div class="form-group">
                                            <label>Enter Current Password :</label>
                                            <input type="password" class="form-control" id="password"
                                                   placeholder="Please enter your password to update settings"
                                                   name="password">
                                            <div id="checkPasswordMsg"
                                                 style="color: #721c24; margin-top: 5px; display: none;"></div>
                                        </div>
                                        <button id="updateUserInfo" type="submit" class="btn btn-dark" disabled>Update
                                        </button>
                                        <span style="color:red; font-size: 14px;" class="update_warning">Please enter your password before click update.</span>
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
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/croppie.min.css') }}">
        <script type="text/javascript">
					//check password to enable the update button
					$('#password').on('keyup', function () {
						var password = $(this).val();
						$.ajax({
							url: '{{ route('auth.checkPassword') }}',
							method: 'post',
							dataType: 'json',
							data: {
								"_token": "{{ csrf_token() }}",
								"password": password
							},
							success: function (res) {
								if (res['message'] == 'Success') {
									$('#checkPasswordMsg').hide();
									$('#updateUserInfo').prop('disabled', false);
								} else {
									$('#checkPasswordMsg').html('Incorrect password.');
									$('#checkPasswordMsg').show();
									$('#updateUserInfo').prop('disabled', true);
								}
							}, error: function (err) {
								if (err.status == 422) { // when status code is 422, it's a validation issue
									var data = err.responseJSON;
									var msg = data['errors']['password'][0];
									$('#checkPasswordMsg').html(msg);
									$('#checkPasswordMsg').show();
									$('#updateUserInfo').prop('disabled', true);
								}
							}
						});
					});

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

					$(function () {

						$('#dropzone').on('dragover', function () {
							$(this).addClass('hover');
						});

						$('#dropzone').on('dragleave', function () {
							$(this).removeClass('hover');
						});

						$('#dropzone input').on('change', function (e) {
							$("#upload-demo").show();
							$("#dropzone").css('display', 'none');


							var file = this.files[0];

							$('#dropzone').removeClass('hover');


							$('#dropzone').addClass('dropped');
							$('#dropzone img').remove();

							var reader = new FileReader(file);
							reader.onload = function (e) {
								resize.croppie('bind', {
									url: e.target.result
								}).then(function () {
									console.log('jQuery bind complete');
								});
							}
							reader.readAsDataURL(file);

						});
					});

					$('#upload-demo').on('update.croppie', function (ev, cropData) {

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

            #dropzone input {
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

            .update_warning{
                display: none;
            }

            #updateUserInfo:hover + .update_warning{
                display: inline-block;
            }


        </style>

@endsection('content')