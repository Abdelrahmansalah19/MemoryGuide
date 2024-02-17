@extends('layout.app')
@section('content')
  <!--================= OUR DOCTORS  ====================-->

        <!-- TEAM -->
        <div class="head-line">
            <h1>Our Doctors</h1>
            <h5></h5>
        </div>
        <section id="feature" class="section-p1">

            <div class="fe-box">
                 <img src="{{asset('front')}}/assets/images/doctor-with-his-arms-crossed-white-background.jpg">
                 <h3>DR : Ahmed salah </h3>
                 <h5>Obstetrics and Gynecology</h5>

                     <textarea name="message" rows="3" class="form-control " id="message" placeholder="What can WE help you?"></textarea>
                 <button class="btn-send">Send Request</button>
                    </div>
            <div class="fe-box">
              <img src="{{asset('front')}}/assets/images/smiling-doctor-with-strethoscope-isolated-grey.jpg">
              <h3>DR : Ahmed salah </h3>
                 <h5>Obstetrics and Gynecology</h5>

                  <textarea name="message" rows="3" class="form-control " id="message" placeholder="What can WE help you?"></textarea>

              <button class="btn-send">Send Request</button>
         </div>
         <div class="fe-box">
          <img src="{{asset('front')}}/assets/images/doctor-with-his-arms-crossed-white-background.jpg">
          <h3>DR : Ahmed salah </h3>
          <h5>Obstetrics and Gynecology</h5>

              <textarea name="message" rows="3" class="form-control " id="message" placeholder="What can WE help you?"></textarea>
          <button class="btn-send">Send Request</button>
          </div>
          <div class="fe-box">
            <img src="{{asset('front')}}/assets/images/doctor-with-his-arms-crossed-white-background.jpg">
            <h3>DR : Ahmed salah </h3>
            <h5>Obstetrics and Gynecology</h5>

                <textarea name="message" rows="3" class="form-control " id="message1" placeholder="What can WE help you?"></textarea>
            <button class="btn-send">Send Request</button>

               </div>

          </section>
@endsection
