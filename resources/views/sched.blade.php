@extends('layoutpage')
@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="clearfix" style="background-image: url(assets/img/bg-sched.JPG)">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-12 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2><span style="color:rgb(255, 255, 255)">Keep Your Work Organize<br>with </span> <span style="color:rgb(213, 248, 213)">Study Zone</span></h2>
          {{-- <div>
            <a href="/sched" class="btn-get-started scrollto" style="background-color: #2a642a;">My Schedule</a>
          </div> --}}
        </div>


      </div>

    </div>
  </section><!-- End Hero -->


{{-- <!-- ======= Schedule Section ======= -->
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
  </section><!-- End Schedule Section --> --}}

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3><span style="color:rgb(28, 124, 20)">My Schedule</span></h3>
      </header>

      <div class="row g-5">

        {{-- <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
          <div class="box">
            <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
            <h4 class="title"><a href="">Schedule</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div> --}}
        <div class="col-md-6 col-lg-12" data-aos="zoom-in" data-aos-delay="200">
          <div class="box">

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
                    </tbody>
                  </table>
                  <div>
                    <a href="/add-schedule" class="btn-get-started scrollto" style="background-color: #2a642a; border-radius: 12px; padding: 15px 32px; text-align: center; color: white;">Add New Class</a>
                  </div>
                </div>

          </div>
        </div>
    </div>

</div>
</section><!-- End Services Section -->


@endsection
