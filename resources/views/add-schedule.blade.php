@extends('layoutpage')
@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="clearfix" style="background-image: url(assets/img/bg-sched.JPG)">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-12 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2><span style="color:rgb(255, 255, 255)">Keep Your Work Organize<br>with </span> <span style="color:rgb(213, 248, 213)">Study Zone</span></h2>
          <div>
            <a href="/sched" class="btn-get-started scrollto" style="background-color: #2a642a padding: 15px 32px; text-align: center; color: white;;">My Schedule</a>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Hero -->

<section id="add-schedule" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-box-2" style="padding: 25px 50px 75px 100px; ">
                    <h5 class="title-left" style="font-size:25px; font-weight: bold; padding: 25px 50px 75px 100px;">
                      Add Class Schedule
                    </h5>
                  </div>
                  <div>
                    <form action="addsched" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                  <input type="text" name="c_code" class="form-control" id="c_code" placeholder="Class Code" required>
                                </div>
                              </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="c_day" class="form-control" id="c_day" placeholder="Monday" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="c_time" class="form-control" id="c_time" placeholder="8:30 - 10:00" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="class_name" id="class_name" placeholder="Web App Dev" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="c_location" id="c_location" placeholder="LR 14" required>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                            <button type="submit" class="btn-get-started scrollto" style="background-color: #2a642a; border-radius: 12px; padding: 15px 32px; text-align: center; color: white;">Add</button>
                          </div>
                        </div>
                      </form>

                  </div>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Schedule Section -->

@endsection
