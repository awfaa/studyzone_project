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

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3><span style="color:rgb(28, 124, 20)">Why Study Zone?</span></h3>
          <p>Study Zone is a place you can organized all of your work and make sure everything is on track.</p>
        </header>

        <div class="row g-5">

          {{-- <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Schedule</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div> --}}
          <div class="col-md-6 col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="/notes">Notes</a></h4>
              <p class="description">Create and save your notes with Study Zone. Say no more to papers and ring binders and organize your notes like a pro!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="#studyTracker">Study Tracker</a></h4>
              <p class="description">Track your study time and make your study time more efficient with our Study Tracker!</p>
            </div>
          </div>
          {{-- <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div> --}}

          <div class="col-md-6 col-lg-6" data-aos="zoom-in" data-aos-delay="200">
        <div class=" box">
            <div class="icon" style="background: #e1eeff;"><i class="bi bi-brightness-high" style="color: #2282ff;"></i></div>
            <h4 class="title"><a href="/flashcard">Flashcards</a></h4>
            <p class="description">Make your study method more fun with our flashcard feature! Increase your memorization skills.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="box">
            <div class="icon" style="background: #ecebff;"><i class="bi bi-calendar4-week" style="color: #8660fe;"></i></div>
            <h4 class="title" ><a href="/sched">Schedule</a></h4>
            <p class="description">Showcase an overview of your weekly classes to keep on track.</p>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3><span style="color:rgb(28, 124, 20)">Testimonials</span></h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper" style="color:rgb(28, 124, 20)">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Content Creator &amp; Student</h4>
                    <p>
                      People always asked me how do I manage my time and works as a content creator and a student. The answer is Study Zone! I can schedule my works and do notes!!
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                      It is a great interactive website with user-friendly design.
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-3.JPG" class="testimonial-img" alt="">
                    <h3>Mimi Lana</h3>
                    <h4>Student</h4>
                    <p>
                      Study Zone is my everyday website. It helps me a lot in organizing my daily works since I was a freshman.
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-4.JPG" class="testimonial-img" alt="">
                    <h3>Syed Saddiq</h3>
                    <h4>Ex-Student</h4>
                    <p>
                      This is the best website I've ever used! Even though I've finished my study, I still use Study Zone to keep track with my daily tasks.
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg" style="background-color: rgb(211, 243, 211)">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3><span style="color:rgb(28, 124, 20)">Our Team</span></h3>
          <p>INFO 3305 Web Application Development 2022/2023<br>Section 2 | Group 2</p>

        </div>

        <div class="row">

          <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/amanina.JPG" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nur Amanina</h4>
                  <span>2011402</span>
                  {{-- <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/awfa.PNG" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Awfa</h4>
                  <span>2026420</span>
                  {{-- <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/thirah.JPG" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nur Athirah</h4>
                  <span>2011156</span>
                  {{-- <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/izzaty.JPG" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nurul Izzaty</h4>
                  <span>2022876</span>
                  {{-- <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="member">
              <img src="assets/img/maiza.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Wan Maizatul Akmal</h4>
                  <span>2014260</span>
                  {{-- <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
 @endsection
