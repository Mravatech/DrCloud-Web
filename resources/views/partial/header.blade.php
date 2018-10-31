<!DOCTYPE html>
<html>
<!-- font family -->
<head>
    <title>Home - Dr Cloud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <style type="text/css">
    svg {
      fill: green;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
</head>

<body>
    <div class="head" id="main">
        <div class="">
            <div class="row text-center">
                <div class="col-md-4"><img src="{{asset('img/logo.png')}}" height="50px" width="100px"></div>
                <div class="col-md-1 padding"></div>
                <div class="col-md-7 padding header">
                    <div class="">
                      <a class="round" href="#">Home</a>
                      <a class="round" href="#">Who We Are</a>
                      <a class="round" href="#">Our Cause</a>
                      <a class="round" href="#">Partner</a>
                      <a class="round" href="member">Membership</a>
                      <a class="btn btn-danger round" href="#" role="button">Donate</a>
                    </div>

                </div>
            </div>
            <div class="row hr">
                <hr>
            </div>
            <div class="row text-center">
                <div class="col-md-6" style="font-size: 15px;padding-left: 52px;">
                    <!-- <i class="fa fa-ambulance"></i> -->
                    <img src="{{ asset('img/amb.png')}}" style="width: 60px;">
                    <span style="color: red">Dr.cloud Emergency Response Center</span>
                </div>
                <div>
                    <a class="btn btn-danger btn-lg call" href="#" role="button">Call (314)</a>
                </div>
            </div>
            <div class="row hr">
                <hr>
            </div>
