@extends('pub_layouts.public_main')

@section('title')
@endsection


@section('content')

      <!-- Header -->
      <div class="page-main">
         <!-- Bradcrumb -->
         <section class="bradcrumb-area page-background">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="bradcrumb-box text-center">
                        <h1>Contact Us</h1>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Bradcrumb -->
         <!-- Contact -->
         <section class="contact-area page-paddings">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                     <div class="contact-box text-center">
                        <div class="contact-box-ico">
                           <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="theme-title">Phone</h3>
                        <p class="theme-description">0770305280</p>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                     <div class="contact-box text-center">
                        <div class="contact-box-ico">
                           <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="theme-title">Email</h3>
                        <p class="theme-description">kabe.pets@gmail.com</a></p>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                     <div class="contact-box text-center">
                        <div class="contact-box-ico">
                           <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="theme-title">Address</h3>
                        <p class="theme-description">Jordan-Amman</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Contact -->
         <!-- Contact Form -->
         <section class="contact-form-area page-paddings">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="page-title text-center">
                        <h2>Leave A Message</h2>
                        <p>If you have any kind of suggestion, leave us a message here and we will keep in touch with you as soon as possible.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                     <div class="contact-box-form">
                        <form method="post" action="/contact" id="send-mail" >

                           @csrf
                           <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                 <div class="theme-input-box">
                                    <input type="text" name="name" class="form-control" placeholder="First Name" required="">
                                    <i class="fas fa-user"></i>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                 <div class="theme-input-box">
                                    <input type="text" name="last_name" class="form-control" id="lname" placeholder="Last Name" required="">
                                    <i class="fas fa-user"></i>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                 <div class="theme-input-box">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required="">
                                    <i class="fas fa-envelope"></i>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                 <div class="theme-input-box">
                                    <input type="text" name="phone" class="form-control" id="mobile" placeholder="Phone Number" required="">
                                    <i class="fas fa-phone-alt"></i>
                                 </div>
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="theme-input-box">
                                    <textarea rows="6" class="form-control" name="msg"></textarea>
                                 </div>
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                 <button id="payment-button" style="background-color: orange !important" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Send Message</span>
                                </button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                     <div class="contact-map-area">
                        <div class="contact-map-box">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810784922!2d-0.24168043751141846!3d51.52877184053823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1593165927597!5m2!1sen!2sin" height="355" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Contact Form -->
      </div>
      <!-- Footer -->
      @endsection
