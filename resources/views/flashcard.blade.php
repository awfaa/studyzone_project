@extends('layoutpage')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix" style="background-image: url(assets/img/bg-flashcard.JPG)">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-12 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2><span style="color:rgb(255, 255, 255)">Lets Learn with the <br>Flashcard</span> <span style="color:rgb(213, 248, 213)">Study Zone</span></h2>
          <div>
            <a href="/sched" class="btn-get-started scrollto" style="background-color: #2a642a padding: 15px 32px; text-align: center; color: white;;">My Schedule</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <section id="style">
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
  </section>

  <body>
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
  </body>
  @endsection

