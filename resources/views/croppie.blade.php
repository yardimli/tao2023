<html lang="en">
<head>
    <title>Laravel Cropping and uploading an image with Croppie plugin using jQuery Ajax </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Laravel Cropping and uploading an image with Croppie plugin using jQuery Ajax</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-4 text-center">
                    <div id="upload-demo"></div>
                </div>
                <div class="col-md-4" style="padding:6%;">
                    <strong>Select image to crop:</strong>
                    <input type="file" id="image">

                    <button class="btn btn-primary btn-block upload-image" style="margin-top:2%">Upload Image</button>
                </div>

                <div class="col-md-4">
                    <div id="preview-crop-image" style="background:#9d9d9d;width:350px;padding:50px 50px;height:350px;"></div>
                </div>
            </div>

        </div>
    </div>
</div>


<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    var resize = $('#upload-demo').croppie({
        enableExif: true,
        enableOrientation: true,
        viewport: { // Default { width: 100, height: 100, type: 'square' }
            width: 250,
            height: 250,
            type: 'circle' //square
        },
        boundary: {
            width: 350,
            height: 350
        }
    });


    $('#image').on('change', function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            resize.croppie('bind',{
                url: e.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
    });


    $('.upload-image').on('click', function (ev) {
        resize.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (img) {
            $.ajax({
                url: "{{route('croppie.upload-image')}}",
                type: "POST",
                data: {"image":img,'op':'hello'},
                success: function (data) {
                    html = '<img src="' + img + '" />';
                    $("#preview-crop-image").html(html);
                }
            });
        });
    });


</script>


</body>
</html>
