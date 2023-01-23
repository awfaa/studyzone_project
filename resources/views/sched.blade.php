@extends('layoutpage')
@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="clearfix" style="background-image: url(assets/img/intro-bg.JPG)">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-12 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2><span style="color:rgb(255, 255, 255)">Keep Your Work Organize<br>with </span> <span style="color:rgb(213, 248, 213)">Study Zone</span></h2>
          <div>
            <a href="/sched" class="btn-get-started scrollto" style="background-color: #2a642a;">My Schedule</a>
          </div>
        </div>

        {{-- <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div> --}}
      </div>

    </div>
  </section><!-- End Hero -->


<!-- ======= Schedule Section ======= -->
<section id="schedule" class="sched-bg" style="background-color: #daf7da;">
    <div class="overlay-mf"></div>

    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="sched" class="box">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      My Schedule
                    </h5>
                  </div>

                    <div>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Class Code</th>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                            <th scope="col">Class Name</th>
                            <th scope="col">Location</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedule as $sched)
                          <tr>
                            <td>{{ $sched->c_code }}</td>
                            <td>{{ $sched->c_day }}</td>
                            <td>{{ $sched->c_time }}</td>
                            <td>{{ $sched->class_name }}</td>
                            <td>{{ $sched->c_location }}</td>
                          </tr>
                          @endforeach
                          <div>
                            <a href="/add-schedule" class="btn-sched" style="background-color: #2a642a;">Add Class Schedule</a>
                          </div>
                        </tbody>
                      </table>
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