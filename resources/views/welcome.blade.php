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
</head>

<body>
    <div style="margin-top: 20px; margin-bottom: 20px">
        <div class="">
            <div class="row text-center">
                <div class="col-md-4"><img src="{{asset('img/logo.png')}}" height="50px" width="100px"></div>
                <div class="col-md-4 padding"></div>
                <div class="col-md-4 padding">
                    <div class="dropdown">
                        <div class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Yoruba
                            <span style="margin-right: 16px;" class="caret"></span>
                            <i style="color: red; margin-right: 16px;" class="fas fa-user"></i>
                            <i style="color: red" class="fas fa-search"></i>
                            <a class="btn btn-danger round" href="#" role="button">Donate</a>
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row hr">
                <hr>
            </div>
            <div class="row text-center">
                <div class="col-md-6" style="font-size: 20px;padding-left: 195px;">
                    <!-- <i class="fa fa-ambulance"></i> -->
                    <img src="{{ asset('img/amb.png')}}" style="width: 60px;">
                    <span style="color: red">Dr.cloud Emergency Response Center</span>
                </div>
                <div>
                    <a class="btn btn-danger btn-lg" href="#" style="width: 153px;" role="button">Call (314)</a>
                </div>
            </div>
            <div class="row hr">
                <hr>
            </div>

            <!-- Slides Controller -->
            {{-- <div class="row" style="margin-bottom: 100px">
                <ul class="slides-c">
                    <li class="nav-dots">
                        <label for="img-1" class="nav-dot" id="img-dot-1"><img src="{{ asset('img/person.png')}}" width="60px" height="60px"></label>
                        <label for="img-2" class="nav-dot" id="img-dot-2"><img src="{{ asset('img/ste.png')}}" width="60px" height="60px"></label>
                        <label for="img-3" class="nav-dot" id="img-dot-3"><img src="{{ asset('img/cap.png')}}" width="60px" height="60px"></label>
                        <label for="img-4" class="nav-dot" id="img-dot-4"><img src="{{ asset('img/love.png')}}" width="60px" height="60px"></label>
                        <label for="img-5" class="nav-dot" id="img-dot-5"><img src="{{ asset('img/ste.png')}}" width="60px" height="60px"></label>
                        <label for="img-6" class="nav-dot" id="img-dot-6"><img src="{{ asset('img/person.png')}}" width="60px" height="60px"></label>
                        <label for="img-7" class="nav-dot" id="img-dot-7"><img src="{{ asset('img/cap.png')}}" width="60px" height="60px"></label>
                        <label for="img-8" class="nav-dot" id="img-dot-8"><img src="{{ asset('img/love.png')}}" width="60px" height="60px"></label>

                    </li>
                </ul>

            </div> --}}
            <!-- End Slide Controller -->

            <!-- Slides -->
            <div class="row">
                <div class="icon-slider">
                  <ul class="slides-c">
                      <li class="nav-dots">
                          <label for="img-1" class="nav-dot" id="img-dot-1"><img src="{{ asset('svg/person.svg')}}" width="60px" height="60px"></label>
                          <label for="img-2" class="nav-dot" id="img-dot-2"><img src="{{ asset('svg/ste.svg')}}" width="60px" height="60px"></label>
                          <label for="img-3" class="nav-dot" id="img-dot-3"><img src="{{ asset('svg/cap.svg')}}" width="60px" height="60px"></label>
                          <label for="img-4" class="nav-dot" id="img-dot-4"><img src="{{ asset('svg/love.svg')}}" width="60px" height="60px"></label>
                          <label for="img-5" class="nav-dot" id="img-dot-5"><img src="{{ asset('svg/ste.svg')}}" width="60px" height="60px"></label>
                          <label for="img-6" class="nav-dot" id="img-dot-6"><img src="{{ asset('svg/person.svg')}}" width="60px" height="60px"></label>
                          <label for="img-7" class="nav-dot" id="img-dot-7"><img src="{{ asset('svg/cap.svg')}}" width="60px" height="60px"></label>
                          <label for="img-8" class="nav-dot" id="img-dot-8"><img src="{{ asset('svg/love.svg')}}" width="60px" height="60px"></label>

                      </li>
                  </ul>
                </div>
                <div class="container-slider">
                  <ul class="slides">
                    <input type="radio" name="radio-btn" id="img-1" checked />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://farm9.staticflickr.com/8072/8346734966_f9cd7d0941_z.jpg" />
                        </div>
                        <div class="nav">
                            {{-- <label for="img-6" class="prev">&#x2039;</label>
                            <label for="img-2" class="next">&#x203a;</label> --}}
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-2" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />
                        </div>
                        <div class="nav">
                            {{-- <label for="img-1" class="prev">&#x2039;</label>
                            <label for="img-3" class="next">&#x203a;</label> --}}
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-3" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://farm9.staticflickr.com/8068/8250438572_d1a5917072_z.jpg" />
                        </div>
                        <div class="nav">
                            {{-- <label for="img-2" class="prev">&#x2039;</label>
                            <label for="img-4" class="next">&#x203a;</label> --}}
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-4" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://farm9.staticflickr.com/8061/8237246833_54d8fa37f0_z.jpg" />
                        </div>
                        <div class="nav">
                            {{-- <label for="img-3" class="prev">&#x2039;</label>
                            <label for="img-5" class="next">&#x203a;</label> --}}
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-5" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://farm9.staticflickr.com/8055/8098750623_66292a35c0_z.jpg" />
                        </div>
                        <div class="nav">
                            {{-- <label for="img-4" class="prev">&#x2039;</label>
                            <label for="img-6" class="next">&#x203a;</label> --}}
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-6" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://farm9.staticflickr.com/8195/8098750703_797e102da2_z.jpg" />
                        </div>
                        <div class="nav">
                            {{-- <label for="img-5" class="prev">&#x2039;</label>
                            <label for="img-7" class="next">&#x203a;</label> --}}
                        </div>
                    </li>
                    <input type="radio" name="radio-btn" id="img-7" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://bnballocharity.org/wp-content/uploads/2018/09/slider-6.jpg" />
                        </div>
                        <div class="nav">
                            {{-- <label for="img-6" class="prev">&#x2039;</label>
                            <label for="img-8" class="next">&#x203a;</label> --}}
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-8" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://bnballocharity.org/wp-content/uploads/2018/09/slider-4.jpg" />
                        </div>
                        <div class="nav">
                            {{-- <label for="img-7" class="prev">&#x2039;</label>
                            <label for="img-1" class="next">&#x203a;</label> --}}
                        </div>
                    </li>


                </ul>
              </div>
            </div>
            <!-- End Slide -->
        </div>
        <div class="row" style="background: url('{{asset('img/phone-bg.png')}}'); background-size: contain;height: 500px;">
        	<div  class="col-md-2"></div>
        	<div class="col-md-3">
        		<img src="{{asset('img/phone.png')}}" height="500px">
        	</div>
        	<div>
        		<h5 style="font-size: 26px;padding-top: 100px;">Get Dr. Cloud Mobile App <span style="color: red">for free</span></h5><br>
        		<h6 style="font-size: 23px; line-height: 31px;margin-top: -5px;">Live chat with your doctor<br>Request for emergency</h6>
        		<img src="{{asset('img/play.png')}}" style="margin: 120px 0px 0px 272px; height: 90px;">

        	</div>
        </div>
        <div class="row" style="background-color:#fafafa; background-size: contain;height: 494px;">
        	<div class="col-md-4">
        		<img src="{{asset('img/doctor.jpg')}}" style="height: 494px; width: 477px">
        	</div>
        	<div class="col-md-7" style="margin-top: 106px; ">
        		<span style="font-size: 32px;">Live <i style="color: red">service center </i> to <br> response and take care of all your <br> health emergency needs for free.</span><br>
        		<div class="col-md-3" style="margin-top: 40px;">Available 24/7</div>
        		<div class="col-md-3" style="margin-top: 40px;">Free Call In</div>
        		<div class="col-md-3" style="margin-top: 40px;">Access to para-medics</div>
        	</div>
        </div>
        <div class="row" style="background-color: #ffffff; background-size: contain;height: 100%;">
        	<div class="col-md-2"></div>
        	<div>
        		<h3 style="margin-left: 157px;margin-bottom: 97px;margin-top: 100px;">
        			We've Covered<br>
        		</h3>
        	</div>
        	<div class="col-md-3"></div>
        	<img src="{{asset('img/map.png')}}" style="width: 62%"; height="116%">
        </div>
        <div class="row" style="background-color:#E5E5E5; background-size: contain;height: 494px;">
        	<div class="col-md-6">
        		<h2 style="margin-top: 100px; margin-left: 100px;">Your donation is a powerful catalyst</h2>
        		<h6 style="margin-top: 100px; margin-left: 100px;line-height: 20px;">
        			Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        			Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        			when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        			It has survived not only five centuries, but also the leap into electronic typesetting,
        			remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
        			sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        			Aldus PageMaker including versions of Lorem Ipsum
        		</h6>.
        	</div>
        	<div class=""></div>
        </div>
        <div class="row" style="background-color:#E40613; height: 100px;">
        	<div class="col-md-2"></div>
        	<div class="col-md-5"><h4 style="color: white;padding-top: 31px;">Yes we can do even more you can save even more lives</h4></div>
        	<div><h4 style="color: white;padding-top: 31px;">Donate</h4></div>
        </div>
        <div class="row" style="background: url('{{asset('img/lovvvv.png')}}'); height: 494px;background-size: 100% 100%;">


        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
