{{-- slide --}} {{--
<div class="row" style="background: url('{{asset('img/vol.jpg')}}')">

</div> --}}
@include('partial.header')


<div class="row slide-section">
   <div class="icon-slider" id="overlay">
       <ul class="slides-c">
           <li class="nav-dots">
               <label for="img-1" class="nav-dot" id="img-dot-1"><img src="{{ asset('img/volunteer.png')}}" width="50px" height="50px"><p>Volunteer</p></label>
               <label for="img-2" class="nav-dot" id="img-dot-2"><img src="{{ asset('img/doctor.png')}}" width="50px" height="50px"><p>Doctors</p></label>
               <label for="img-3" class="nav-dot" id="img-dot-3"><img src="{{ asset('img/law-agencies.png')}}" width="50px" height="50px"><p>Law Agencies</p></label>
               <label for="img-4" class="nav-dot" id="img-dot-4"><img src="{{ asset('img/samaritan.png')}}" width="50px" height="50px"><p>Samaritan</p></label>
               <label for="img-5" class="nav-dot" id="img-dot-5"><img src="{{ asset('img/donate.png')}}" width="50px" height="50px"><p>Donate</p></label>
               <label for="img-6" class="nav-dot" id="img-dot-6"><img src="{{ asset('img/community-persons.png')}}" width="50px" height="50px"><p>Community Personnel</p></label>
               <label for="img-7" class="nav-dot" id="img-dot-7"><img src="{{ asset('img/reach-support.png')}}" width="50px" height="50px"><p>Reach Support</p></label>
               <label for="img-8" class="nav-dot" id="img-dot-8"><img src="{{ asset('img/love.png')}}" width="50px" height="50px"><p>Hospitals</p></label>

           </li>
       </ul>
       <div class="row responser" id="text-1">
           <p class="responser-text"> First Responder</p>
           <hr class="responser-hr">
           <p class="responser-sub"> Support <b><i>Dr.Cloud</i></b> Emergency<br/> Response team</p>
           <hr class="responser-hr">
           <button class="btn btn-vol">BECOME A VOLUNTEER</button>
           <button class="btn btn-donate"><span>DONATE</span> <img class="donate-ico" src="{{ asset('img/donate.png') }}"></button>
       </div>
       <div class="row responser" id="text-2">
           <p class="responser-text"> Second Responder</p>
           <hr class="responser-hr">
           <p class="responser-sub"> Support <b><i>Dr.Cloud</i></b> Emergency<br/> Response team</p>
           <hr class="responser-hr">
           <button class="btn btn-vol">BECOME A VOLUNTEER</button>
           <button class="btn btn-donate"><span>DONATE</span> <img class="donate-ico" src="{{ asset('img/donate.png') }}"></button>
       </div>
       <div class="row responser" id="text-3">
           <p class="responser-text"> Third Responder</p>
           <hr class="responser-hr">
           <p class="responser-sub"> Support <b><i>Dr.Cloud</i></b> Emergency<br/> Response team</p>
           <hr class="responser-hr">
           <button class="btn btn-vol">BECOME A VOLUNTEER</button>
           <button class="btn btn-donate"><span>DONATE</span> <img class="donate-ico" src="{{ asset('img/donate.png') }}"></button>
       </div>
       <div class="row responser" id="text-4">
           <p class="responser-text"> Four Responder</p>
           <hr class="responser-hr">
           <p class="responser-sub"> Support <b><i>Dr.Cloud</i></b> Emergency<br/> Response team</p>
           <hr class="responser-hr">
           <button class="btn btn-vol">BECOME A VOLUNTEER</button>
           <button class="btn btn-donate"><span>DONATE</span> <img class="donate-ico" src="{{ asset('img/donate.png') }}"></button>
       </div>
       <div class="row responser" id="text-5">
           <p class="responser-text"> Five Responder</p>
           <hr class="responser-hr">
           <p class="responser-sub"> Support <b><i>Dr.Cloud</i></b> Emergency<br/> Response team</p>
           <hr class="responser-hr">
           <button class="btn btn-vol">BECOME A VOLUNTEER</button>
           <button class="btn btn-donate"><span>DONATE</span> <img class="donate-ico" src="{{ asset('img/donate.png') }}"></button>
       </div>
       <div class="row responser" id="text-6">
           <p class="responser-text"> Five Responder</p>
           <hr class="responser-hr">
           <p class="responser-sub"> Support <b><i>Dr.Cloud</i></b> Emergency<br/> Response team</p>
           <hr class="responser-hr">
           <button class="btn btn-vol">BECOME A VOLUNTEER</button>
           <button class="btn btn-donate"><span>DONATE</span> <img class="donate-ico" src="{{ asset('img/donate.png') }}"></button>
       </div>
       <div class="row responser" id="text-7">
           <p class="responser-text"> Five Responder</p>
           <hr class="responser-hr">
           <p class="responser-sub"> Support <b><i>Dr.Cloud</i></b> Emergency<br/> Response team</p>
           <hr class="responser-hr">
           <button class="btn btn-vol">BECOME A VOLUNTEER</button>
           <button class="btn btn-donate"><span>DONATE</span> <img class="donate-ico" src="{{ asset('img/donate.png') }}"></button>
       </div>
       <div class="row responser" id="text-8">
           <p class="responser-text"> Five Responder</p>
           <hr class="responser-hr">
           <p class="responser-sub"> Support <b><i>Dr.Cloud</i></b> Emergency<br/> Response team</p>
           <hr class="responser-hr">
           <button class="btn btn-vol">BECOME A VOLUNTEER</button>
           <button class="btn btn-donate"><span>DONATE</span> <img class="donate-ico" src="{{ asset('img/donate.png') }}"></button>
       </div>
   </div>
   <div id=""> </div>

   <div class="container-slider">
       <ul class="slides">
           <input type="radio" name="radio-btn" id="img-1" checked />
           <li class="slide-container">
               <div class="slide">
                   <img src="{{ asset('img/vol.jpg') }}" />
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
{{-- explain how hard it s for people to get help in infographics--}}
<div class="row">
   <div class="col-md-6" style="margin-right: 57px;">
       <div>
           <h3 class="hard">Meet Aisha</h3>
       </div>
       <h6 style="margin-top: 20px; margin-left: 100px;line-height: 20px;">
           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</br>
           </br>
           when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br/><br/></h6>
       <div style="margin-top: 20px; margin-left: 100px;line-height: 20px;">
           <hr class="responser-hard">
           <h5 style="color: #ff0000c4"><b><i>It was popularised in the 1960s with the release of Letraset
                     sheets containing Lorem Ipsum passages</i></b></h5>
           <hr class="responser-hard">
       </div>
       <h6 style="margin-top: 20px; margin-left: 100px;line-height: 20px;">
           It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
       </h6>
   </div>
   <div class="col-md-5">
       <div class="meet">
           <img src="{{ asset('img/waterorg.jpg')}}" style="width: 399px;height: 520px;">
           <img src="{{ asset('img/waterorg.jpg')}}" style="width: 399px;height: 520px;">
           <img src="{{ asset('img/waterorg.jpg')}}" style="width: 399px;height: 520px;">
           <img src="{{ asset('img/waterorg.jpg')}}" style="width: 399px;height: 520px;">
       </div>
   </div>
   <button class="btn btn-vol" style="color: red; margin-top: -20px; margin-left: 100px;line-height: 20px;"><h5>..learn more about our cause</h5></button>

</div>

{{-- section 3 --}}

<div class="row">
   <div class="section-activities">
       <div class="col-md-4 sub">
           <img class="display" src="{{ asset('img/youth.png')}}" style="width: 200px;height: 200px;">
       </div>

       <div class="col-md-8 sub">
           <div class="row">
               <div class="col-md-3 description">
                   <h3 class="">Swift Response</h3>
                   <h6 class="text-mute">
                       Dr.cloud connects first-aid responders to victims for fast emergency support and medical attention.
                   </h6>
               </div>
               <div class="col-md-3">
                   <img src="{{ asset('img/vr.png')}}" style="width: 160px;height: 160px;">
               </div>

               <div class="col-md-3 description">
                   <h3 class="">Medical Collaboration</h3>
                   <h6>
                       Network of medical professionals with topnotch experience in healthcare for quick collabortion.
                   </h6>
               </div>
               <div class="col-md-3">
                   <img src="{{ asset('img/doctor.jpg')}}" style="width:160px;height: 160px;">
               </div>
           </div>

           <div class="row">


               <div class="col-md-3">
                   <img src="{{ asset('img/room.png')}}" style="width: 160px;height: 160px;">
               </div>
               <div class="col-md-3 description">
                   <h3 class="">Health Awareness</h3>
                   <h6>
                       Safety and precautions can reduce health hazard.
                       <blockquote cite="http://">
                           "Jack Ma."
                       </blockquote>
                   </h6>
               </div>

               <div class="col-md-3">
                   <img src="{{ asset('img/together.png')}}" style="width: 160px;height: 160px;">
               </div>
               <div class="col-md-3 description">
                   <h3 class="">Health Awareness</h3>
                   <h6>
                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
                   </h6>
               </div>

           </div>

       </div>

   </div>
</div>

{{-- section technologies --}}

<div class="section-technologies">

   <div class="row">
       <div class="col-md-6" style="margin-right: 57px;">
           <h3 class="hard">Health Awareness</h3>
           <h6 style="margin-top: 20px; margin-left: 100px;line-height: 20px;">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
           </h6>
       </div>
       <div class="col-md-5">
           <img src="{{ asset('img/p-d.png')}}" style="width: 300px;height: 300px;">
       </div>
   </div>

   <div class="row">

       <div class="col-md-5" style="margin-left: 57px;">
           <img src="{{ asset('img/p-d.png')}}" style="width: 300px;height: 300px;">
       </div>

       <div class="col-md-6" style="margin-lefts: 57px;">
           <h3 class="hard" style="text-align:left;">Health Awareness</h3>
           <h6 style="margin-top: 20px; margin-left: 100px; line-height: 20px;">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
           </h6>
       </div>

   </div>

   <div class="row">
       <div class="col-md-6" style="margin-right: 57px;">
           <h3 class="hard">Health Awareness</h3>
           <h6 style="margin-top: 20px; margin-left: 100px;line-height: 20px;">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.
           </h6>
       </div>
       <div class="col-md-5">
           <img src="{{ asset('img/p-d.png')}}" style="width: 300px;height: 300px;">
       </div>
   </div>

</div>

{{-- section featured doctors --}}
<div class="row" style="background-color: ;">
   <div class="container">
       <h2>Featured Doctors</h2>
       <div class="slider center" id="featured_doctors">
           <div class="clip">
               <h3>
                   <div><img src="{{ asset('img/doctor.jpg')}}" style="width: 200px;height: 200px;"></div>
               </h3>
               <h4>Boda luku leke<br/>Abuja, Lagos<br>Physiotherapist
                   <h4>
           </div>
           <div class="clip">
               <h3>
                   <div><img src="{{ asset('img/p-d.png')}}" style="width: 200px;height: 200px;"></div>
               </h3>
               <h4>Boda luku leke<br/>Abuja, Lagos<br>Physiotherapist
                   <h4>
           </div>
           <div class="clip">
               <h3>
                   <div><img src="{{ asset('img/p-d.png')}}" style="width: 200px;height: 200px;"></div>
               </h3>
               <h4>Boda luku leke<br/>Abuja, Lagos<br>Physiotherapist
                   <h4>
           </div>
           <div class="clip">
               <h3>
                   <div><img src="{{ asset('img/p-d.png')}}" style="width: 200px;height: 200px;"></div>
               </h3>
               <h4>Boda luku leke<br/>Abuja, Lagos<br>Physiotherapist
                   <h4>
           </div>
           <div class="clip">
               <h3>
                   <div><img src="{{ asset('img/p-d.png')}}" style="width: 200px;height: 200px;"></div>
               </h3>
               <h4>Boda luku leke<br/>Abuja, Lagos<br>Physiotherapist
                   <h4>
           </div>
           {{--
           <div class="clip">
               <h3>
                   <div><img src="{{ asset('img/p-d.png')}}" style="width: 200px;height: 200px;"></div>
               </h3>
           </div> --}}
       </div>
   </div>
</div>
{{-- end section doctor --}} {{-- start --}}
<div class="row">
   <h2>News Around The World</h2>

   <div class="col-md-12">
       <div class="col-md-4 news">
           <h3>
               <div><img src="{{ asset('img/doctor.jpg')}}" style="width: 280px;height: 200px;"></div>
           </h3>
           <h4>Boda luku leke<br/>Abuja, Lagos<br>Physiotherapist
               <h4>
       </div>
       <div class="col-md-4 news">
           <h3>
               <div><img src="{{ asset('img/p-d.png')}}" style="width: 280px;height: 200px;"></div>
           </h3>
           <h4>Boda luku leke<br/>Abuja, Lagos<br>Physiotherapist
               <h4>
       </div>
       <div class="col-md-4 news">
           <h3>
               <div><img src="{{ asset('img/p-d.png')}}" style="width: 280px;height: 200px;"></div>
           </h3>
           <h4>Boda luku leke<br/>Abuja, Lagos<br>Physiotherapist
               <h4>
       </div>
       <div class="clip">
           <h3>
               <div><img src="{{ asset('img/p-d.png')}}" style="width: 200px;height: 200px;"></div>
           </h3>
       </div>
   </div>
</div>
{{-- end news --}} {{-- start partner --}}
<div class="row" style="margin-top: 40px; background-color: #000">
   <div class="col-md-2">
       <h5 style="color: white;padding-top: 64px;">Trusted By</h5>
   </div>
   <ul class="partner">
       <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>
       <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>
       <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>
       <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>

   </ul>
</div>
{{-- trusted by --}}
<div class="row" style="margin-top: 40px; background-color: #000">
   {{--
   <div class="col-md-2" style="background:#000;"> --}} {{--
       <h5 style="color: white">Partner With</h5> --}} {{-- </div> --}} {{--
   <div class="col-md-10"> --}}

       <div class="col-md-2">
           <h5 style="color: white;padding-top: 64px;">Partner With</h5>
       </div>

       <ul class="partnerss">
           {{--
           <li class="">
               <h5 style="color: white">Partner With</h5>
           </li> --}}
           <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>
           <li class=""><img src="{{ asset('img/doctor.png')}}" style="width: 100px;height: 100px;"></li>
           <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>
           <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>
           <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>
           <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>
           <li class=""><img src="{{ asset('img/p-d.png')}}" style="width: 100px;height: 100px;"></li>
       </ul>
       {{-- </div> --}}
</div>
{{-- end partner --}}
@include('partial.footer')
