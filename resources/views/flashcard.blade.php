@extends('layoutpage')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix" style="background-image: url(assets/img/bg-flashcard.JPG)">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-12 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2><span style="color:rgb(255, 255, 255)">Lets Learn with the <br>Flashcard</span> <span style="color:rgb(213, 248, 213)">Study Zone</span></h2>
        </div>
      </div>
    </div>
</section><!-- End Hero -->

<head>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/flashcardstyle.css"/>
</head>

    <!-- ======= Flashcard Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h3><span style="color:rgb(28, 124, 20)">Flashcards</span></h3>
          </header>

          {{-- <div class="col-md-6 col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="bi bi-card-checklist" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="/notes">Notes</a></h4>
              <p class="description">Create and save your notes with Study Zone. Say no more to papers and ring binders and organize your notes like a pro!</p>
            </div>
          </div> --}}

          <div class="row g-5">
            <div class="col-md-6 col-lg-12" data-aos="zoom-in" data-aos-delay="200">
                <div class="box">
                    <h4 class="title">List Of Flashcards</a></h4>
                </div>
                <div>
                    <div class="container">
                        <div class="add-flashcard-con">
                            <button id="add-flashcard">Add Flashcard</button>
                        </div>

                        <!-- Display Card of Question And Answers Here -->
                        <div id="card-con">
                            <div class="card-list-container"></div>
                        </div>
                    </div>

                        <!-- Input form for users to fill question and answer -->
                        <div class="question-container hide" id="add-question-card">
                            <h2>Add Flashcard</h2>
                            <div class="wrapper">
                            <!-- Error message -->
                            <div class="error-con">
                                <span class="hide" id="error">Input fields cannot be empty!</span>
                            </div>
                            <!-- Close Button -->
                            <i class="fa-solid fa-xmark" id="close-btn"></i>
                            </div>

                            <label for="question">Question:</label>
                            <textarea
                            class="input"
                            id="question"
                            placeholder="Type the question here..."
                            rows="2"
                            ></textarea>
                            <label for="answer">Answer:</label>
                            <textarea
                            class="input"
                            id="answer"
                            rows="4"
                            placeholder="Type the answer here..."
                            ></textarea>
                            <button id="save-btn">Save</button>
                        </div>

                        <!-- Script -->
                        <script src="assets/js/flashcard.js"></script>
                </div>
            </div>
          </div>
        </div>
    </section><!-- End Flashcrad Section -->

  @endsection

