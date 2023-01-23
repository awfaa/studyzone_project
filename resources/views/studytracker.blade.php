<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169261747-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "UA-169261747-1");
		</script>
		<meta charset="utf-8" />
		<meta property="og:title" content="PomodoroTimers" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.pomodorotimers.com" />
		<meta property="og:image" content="https://www.pomodorotimers.com/assets/img/logo.png" />
		<meta
			name="description"
			content="PomodoroTimers is a simple and configurable Pomodoro timer. It aims to provide a visually-pleasing and reliable way to track productivity using the Pomodoro Technique."
		/>
		<meta
			name="keywords"
			content="pomodoro technique, tomato timer, pomodoro timer, online pomodoro timer, software timer, pomodoro software timer, productivity tools, gtd, getting things done, productivity, digital timer, concentration techniques, pomodoro resources, pomodoro software, to-do list"
		/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>PomodoroTimers</title>

		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
		<script
			src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"
		></script>
		<link rel="stylesheet" href="css/styles.css" type="text/css" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
		<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet" />
	</head>

	<body>
		<!-- Scroll Indicator -->
		<div class="line" id="scrollIndicator"></div>

		<!-- Main Content -->
		<div class="border-bottom" id="mainPage">
			<!-- Alert -->
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<span id="alertMessage"></span>
				<button type="button" class="close" onclick="dismissAlert()" aria-label="Close">
					<span aria-hidden="true"><i class="fas fa-times fa-lg mt-1"></i></span>
				</button>
			</div>
			<!-- Brand Name -->
			<div class="d-flex justify-content-center navbar navbar-light bg-light border-bottom">
				<nav class="navbar navbar-light bg-light py-0 justify-content-center" id="brand">
					<a class="navbar-brand" href="/">
						<img src="assets/img/logo.png" width="50" height="50" class="align-top" alt="PomodoroTimers Logo" />
						<span id="brandName">PomodoroTimers</span>
					</a>
					<!-- Only Visible when small -->
					<ul class="nav nav-pills justify-content-end">
						<li class="nav-item">
							<a class="nav-link px-2 d-md-none button-pressed-no-shadow" data-toggle="modal" data-target="#toDoModal" href="#"
								><i class="fas fa-tasks fa-lg"></i
							></a>
						</li>
						<li class="nav-item pl-2 pr-0">
							<a class="nav-link px-2 mx-1 d-md-none button-pressed-no-shadow" data-toggle="modal" data-target="#loggingModal" href="#"
								><i class="fas fa-chart-bar fa-lg"></i
							></a>
						</li>
						<li class="nav-item">
							<a class="nav-link pl-2 pr-0 ml-2 d-md-none button-pressed-no-shadow" data-toggle="modal" data-target="#settingsModal" href="#"
								><i class="fas fa-cog fa-lg"></i
							></a>
						</li>
					</ul>
				</nav>
			</div>
			<!-- NAVBAR -->
			<div class="container mt-3">
				<div class="row justify-content-end">
					<div class="col-6 px-0">
						<ul class="nav nav-pills">
							<div class="col-lg-4 px-0">
								<a class="nav-link active pt-2 nav-underline" id="pomodoros" data-toggle="tab" role="tab" aria-selected="false" href="/">Focus</a>
							</div>
							<div class="col-lg-4 px-0">
								<a class="nav-link pt-2 nav-underline" id="shortBreak" data-toggle="tab" role="tab" aria-selected="false" href="/">Short Break</a>
							</div>
							<div class="col-lg-4 px-0">
								<a class="nav-link pt-2 nav-underline" id="longBreak" data-toggle="tab" role="tab" aria-selected="false" href="/">Long Break</a>
							</div>
						</ul>
					</div>
					<div class="col-3">
						<ul class="nav nav-pills justify-content-end">
							<li class="nav-item">
								<a class="nav-link px-2 d-none d-md-block button-pressed-no-shadow" data-toggle="modal" data-target="#toDoModal" href="#"
									><i class="fas fa-tasks fa-lg"></i
								></a>
							</li>
							<li class="nav-item pl-2 pr-0">
								<a class="nav-link px-2 mx-1 d-none d-md-block button-pressed-no-shadow" data-toggle="modal" data-target="#loggingModal" href="#"
									><i class="fas fa-chart-bar fa-lg"></i
								></a>
							</li>
							<li class="nav-item">
								<a
									class="nav-link pl-2 pr-0 ml-2 d-none d-md-block button-pressed-no-shadow"
									data-toggle="modal"
									data-target="#settingsModal"
									href="#"
									><i class="fas fa-cog fa-lg"></i
								></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Timer and Buttons -->
			<div class="container-fluid">
				<div class="row">
					<!-- Time Left and Progress Bar -->
					<div class="col-12 pt-0 d-flex justify-content-center">
						<div class="radial-progress-bar progress-value">
							<div class="overlay">
								<h1 id="timeLeft"></h1>
							</div>
						</div>
					</div>
					<!-- Start, Stop, Reset Buttons -->
					<div class="col-12">
						<div class="container d-flex justify-content-around">
							<div class="row">
								<div class="col-md-4">
									<button type="button" class="button-pressed-effect btn btn-lg btn-success w-100 mb-3" id="startButton">Start</button>
								</div>
								<div class="col-md-4">
									<button type="button" class="button-pressed-effect btn btn-danger btn-lg w-100 mb-3" id="stopButton">Stop</button>
								</div>
								<div class="col-md-4">
									<button type="button" class="button-pressed-effect btn btn-secondary btn-lg w-100 mb-3" id="resetButton">Reset</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Description of PomodoroTimers -->
		<div class="site-description container-fluid">
			<div class="description-section row justify-content-center">
				<div class="col-10 col-lg-7 mb-4">
					<h1 class="section-title text-center pb-3">What is PomodoroTimers?</h1>
					<div class="section-title-border"></div>
					<div class="section-content">
						<p>
							<strong>PomodoroTimers</strong>&nbspis a simple and configurable Pomodoro timer. It aims to provide a visually-pleasing and reliable way
							to track productivity using the
							<a class="red-underline red-link" href="https://francescocirillo.com/pages/pomodoro-technique" target="_blank"
								>&nbspPomodoro Technique</a
							>. It is customizable and works on both desktop and mobile. The app aims to help you focus on any task you are working on be it study,
							writing, or coding. This app is inspired by the Pomodoro Technique which is a time management method developed by Francesco Cirillo
						</p>
						<p>
							PomodoroTimers is still in its early stages of development so feedbacks and contributions are definitely welcomed.
							<a class="blue-underline blue-link" href="https://github.com/yeohyuyong/pomodoro" target="_blank">&nbspHere&nbsp</a>
							is the link to the source code. Should you have any feedbacks on how I can improve the website, you can drop me an email at&nbsp
							<a class="blue-underline blue-link" href="mailto: yeoh.yuyong@gmail.com">yeoh.yuyong@gmail.com</a>
						</p>
					</div>
				</div>
			</div>

			<div class="description-section row justify-content-center">
				<div class="col-10 col-lg-7 mb-4">
					<h1 class="section-title text-center pb-3">About Pomodoro Technique</h1>
					<div class="section-title-border"></div>
					<div class="section-content">
						<p>
							The <strong>Pomodoro Technique</strong> is a time management method developed by
							<a class="red-underline red-link" href="https://francescocirillo.com" target="_blank">Francesco Cirillo&nbsp</a>
							in the late 1980s. The technique uses a timer to break down work into intervals, traditionally 25 minutes in length, separated by short
							breaks. Each interval is known as a pomodoro, from the Italian word for 'tomato', after the tomato-shaped kitchen timer that Cirillo
							used as a university student.
						</p>
						<footer class="blockquote-footer">
							<cite title="Source Title"
								><a class="red-underline red-link" href="https://en.wikipedia.org/wiki/Pomodoro_Technique" target="_blank">Wikipedia</a></cite
							>
						</footer>
					</div>
				</div>
			</div>

			<div class="description-section row justify-content-center">
				<div class="col-10 col-lg-7 mb-4">
					<h1 class="section-title text-center pb-3">How to use PomodoroTimers?</h1>
					<div class="section-title-border"></div>
					<div class="section-content">
						<dl class="row">
							<dt class="col-sm-2">Step 1</dt>
							<dd class="col-sm-10">Decide on the task to be done</dd>
							<dt class="col-sm-2">Step 2</dt>
							<dd class="col-sm-10">Start working on your task for 25 minutes</dd>
							<dt class="col-sm-2">Step 3</dt>
							<dd class="col-sm-10">Take a 5 minute break after 25 minutes is up</dd>
							<dt class="col-sm-2">Step 4</dt>
							<dd class="col-sm-10">Repeat steps 1 to 3 until you have complete 4 sessions. Take a longer 20 minute break</dd>
							<dt class="col-sm-2">Step 5</dt>
							<dd class="col-sm-10">Go back to step 1 and repeat the process until task is complete</dd>
						</dl>
					</div>
				</div>
			</div>

			<div class="description-section row justify-content-center pb-5">
				<div class="col-10 col-lg-7">
					<h1 class="section-title text-center pb-3">Why use PomodoroTimers?</h1>
					<div class="section-title-border"></div>
					<div class="section-content">
						<dl class="row">
							<dt class="col-sm-1">
								<i class="far fa-hand-point-right fa-2x"></i>
							</dt>
							<dd class="col-sm-11 pb-3">Customize times for Focus, Short Breaks and Long Breaks</dd>
							<dt class="col-sm-1">
								<i class="far fa-hand-point-right fa-2x"></i>
							</dt>
							<dd class="col-sm-11 pb-3">Charming timer alert sounds</dd>
							<dt class="col-sm-1">
								<i class="far fa-hand-point-right fa-2x"></i>
							</dt>
							<dd class="col-sm-11 pb-3">Logging system to keep track of Focus sessions and breaks</dd>
							<dt class="col-sm-1">
								<i class="far fa-hand-point-right fa-2x"></i>
							</dt>
							<dd class="col-sm-11 pb-3">Timer ticking sounds (optional)</dd>
							<dt class="col-sm-1">
								<i class="far fa-hand-point-right fa-2x"></i>
							</dt>
							<dd class="col-sm-11 pb-3">Long break intervals (optional)</dd>
							<dt class="col-sm-1">
								<i class="far fa-hand-point-right fa-2x"></i>
							</dt>
							<dd class="col-sm-11 pb-3">Multiple background music (optional)</dd>
							<dt class="col-sm-1">
								<i class="far fa-hand-point-right fa-2x"></i>
							</dt>
							<dd class="col-sm-11 pb-3">Timer ending notification (optional)</dd>
							<dt class="col-sm-1">
								<i class="far fa-hand-point-right fa-2x"></i>
							</dt>
							<dd class="col-sm-11 pb-3">Dark Mode (optional)</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>

		<!-- Back to top button -->
		<div class="scrolltop-wrap row">
			<div class="col-12 d-flex justify-content-center">
				<!-- <a href="/" role="button" aria-label="Scroll to top"> -->
				<i class="back-to-top-button fas fa-arrow-circle-up fa-4x button-pressed-no-shadow"></i>
				<!-- </a> -->
			</div>
		</div>

		<!-- Footer -->
		<div id="siteFooter" class="row mx-0 pt-4 border-top">
			<div class="col-12 d-flex justify-content-center">
				<p>
					<i class="fas fa-code"></i>&nbspwith&nbsp<i class="fas fa-heart"></i>&nbspby&nbsp<a
						class="blue-underline"
						href="https://yeohyuyong.github.io"
						target="_blank"
						>Yeoh Yu Yong</a
					>
				</p>
			</div>
			<div class="col-12 d-flex justify-content-center button-pressed-no-shadow">
				<style>
					.bmc-button img {
						height: 34px !important;
						width: 35px !important;
						margin-bottom: 1px !important;
						box-shadow: none !important;
						border: none !important;
						vertical-align: middle !important;
					}

					.bmc-button {
						padding: 7px 15px 7px 10px !important;
						line-height: 35px !important;
						height: 51px !important;
						text-decoration: none !important;
						display: inline-flex !important;
						color: #ffffff !important;
						background-color: #ff813f !important;
						border-radius: 5px !important;
						border: 1px solid transparent !important;
						padding: 7px 15px 7px 10px !important;
						font-size: 28px !important;
						letter-spacing: 0.6px !important;
						box-shadow: 0px 1px 2px rgba(190, 190, 190, 0.5) !important;
						-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;
						margin: 0 auto !important;
						font-family: "Cookie", cursive !important;
						-webkit-box-sizing: border-box !important;
						box-sizing: border-box !important;
					}

					.bmc-button:hover,
					.bmc-button:active,
					.bmc-button:focus {
						-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;
						text-decoration: none !important;
						box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;
						opacity: 0.85 !important;
						color: #ffffff !important;
					}
				</style>
				<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" /><a
					class="bmc-button"
					target="_blank"
					href="https://www.buymeacoffee.com/yeohyuyong"
					><img src="https://cdn.buymeacoffee.com/buttons/bmc-new-btn-logo.svg" alt="Buy me a coffee" /><span
						style="margin-left: 5px; font-size: 28px !important"
						>Buy me a coffee</span
					></a
				>
			</div>
			<div class="col-12 d-flex justify-content-center my-3">
				<a href="https://github.com/yeohyuyong/pomodoro" target="_blank"><i class="fab fa-github fa-2x px-2 social-icon"></i></a>
				<a href="https://stackexchange.com/users/14223160/yeoh-yu-yong" target="_blank"
					><i class="fab fa-stack-overflow fa-2x px-2 social-icon"></i
				></a>
				<a href="https://yeohyuyong.github.io" target="_blank"><i class="fas fa-user-circle fa-2x px-2 social-icon"></i></a>
			</div>
		</div>

		<!-- Modals -->
		<!-- Settings Modal -->
		<div
			class="modal fade"
			data-keyboard="true"
			id="settingsModal"
			tabindex="-1"
			role="dialog"
			aria-labelledby="settingsModalLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title ml-3">Settings</h3>
						<button type="button" class="close button-pressed-no-shadow" data-dismiss="modal" aria-label="Close">
							<span class="modal-close-button mt-2" aria-hidden="true"><i class="fas fa-times fa-lg mt-2 mr-2"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<!-- Selecting Timings -->
						<div class="row ml-1">
							<div class="col-12">
								<p class="h6 text-muted">Time (Minutes)</p>
							</div>
							<div class="col-lg-4">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Focus</span>
									</div>
									<input id="pomodoroInput" type="number" min="1" step="1" class="form-control" />
								</div>
							</div>
							<div class="col-lg-4">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Short Break</span>
									</div>
									<input id="shortBreakInput" type="number" min="1" step="1" class="form-control" />
								</div>
							</div>
							<div class="col-lg-4">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="inputGroup-sizing-default">Long Break</span>
									</div>
									<input id="longBreakInput" type="number" min="1" step="1" class="form-control" />
								</div>
							</div>
						</div>

						<hr />
						<!-- Auto Start Next Round -->
						<div class="row ml-1">
							<div class="col">
								<p class="h6 text-muted mt-2">Auto Start Rounds</p>
							</div>
							<div class="col">
								<label class="switch">
									<input id="autoStartRoundsInput" type="checkbox" />
									<span class="slider round"></span>
								</label>
							</div>
						</div>

						<hr />
						<!-- Long Break Interval -->
						<div class="row ml-1">
							<div class="col">
								<p class="h6 text-muted mt-2">Long Break Interval</p>
							</div>
							<div class="col">
								<form>
									<div class="row">
										<div class="col">
											<input type="range" class="custom-range" min="1" max="12" id="longBreakIntervalInput" />
										</div>
										<div class="col">
											<p class="font-weight-bold" id="sliderValue"></p>
										</div>
									</div>
								</form>
							</div>
						</div>

						<hr />
						<!-- Tick Sounds -->
						<div class="row ml-1">
							<div class="col">
								<p class="h6 text-muted mt-2">Tick Sounds</p>
							</div>
							<div class="col">
								<label class="switch">
									<input id="tickSoundInput" type="checkbox" />
									<span class="slider round"></span>
								</label>
							</div>
						</div>

						<hr />
						<!-- Ending Notification Sound -->
						<div class="row ml-1">
							<div class="col-sm-6">
								<p class="h6 text-muted mt-2">Timer Ending Notification</p>
							</div>
							<div class="col-sm-6">
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text notification-text">Last</span>
									</div>
									<input id="notificationTextInput" type="number" min="0" step="1" class="form-control col-sm-3" />
									<div class="input-group-prepend">
										<span class="input-group-text notification-text">&nbsp&nbspMinutes</span>
									</div>
								</div>
							</div>
						</div>

						<hr />
						<!-- Background Music -->
						<div class="row ml-1">
							<div class="col">
								<p class="h6 text-muted mt-2">Background Music</p>
							</div>
							<div class="col">
								<select class="form-control custom-select" id="backgroundMusicOptions" style="width: 10rem">
									<option>None</option>
									<option>Rain</option>
									<option>Ocean</option>
									<option>Forest</option>
									<option>Campfire</option>
									<option>Windy Desert</option>
								</select>
							</div>
						</div>

						<hr />
						<!-- Dark Mode -->
						<div class="row ml-1">
							<div class="col">
								<p class="h6 text-muted mt-2">Dark Mode</p>
							</div>
							<div class="col">
								<label class="switch mb-0">
									<input id="darkModeToggle" type="checkbox" />
									<span class="slider round"></span>
								</label>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="container d-flex justify-content-center my-1">
							<button type="button" class="btn btn-primary button-pressed-no-shadow shadow-none" data-dismiss="modal" id="saveButton">
								Save Changes
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Logging Modal -->
		<div class="modal fade" data-keyboard="true" id="loggingModal" tabindex="-1" role="dialog" aria-labelledby="loggingModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title ml-3">Log</h3>
						<button type="button" class="close button-pressed-no-shadow" data-dismiss="modal" aria-label="Close">
							<span class="modal-close-button" aria-hidden="true"><i class="fas fa-times fa-lg mt-2 mr-2"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="log-modal-content">
							<table class="table table-striped table-responsive-md" id="logDataTable">
								<thead>
									<tr>
										<th scope="col">Session</th>
										<th scope="col">Date</th>
										<th scope="col">Start Time</th>
										<th scope="col">End Time</th>
										<th scope="col">Time</th>
										<th scope="col">Description</th>
										<th scope="col"></th>
									</tr>
								</thead>
								<tbody id="locationUpdateLog"></tbody>
							</table>
							<div class="container d-flex justify-content-center">
								<span id="NoDataLoggedText">No data logged yet</span>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="container d-flex justify-content-center">
							<button type="button" class="btn btn-primary button-pressed-no-shadow shadow-none" id="clearButton">Clear Log</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- To Do Modal -->
		<div class="modal fade" data-keyboard="true" id="toDoModal" tabindex="-1" role="dialog" aria-labelledby="toDoModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title ml-3">Todo</h3>
						<button type="button" class="close button-pressed-no-shadow" data-dismiss="modal" aria-label="Close">
							<span class="modal-close-button" aria-hidden="true"><i class="fas fa-times fa-lg mt-2 mr-2"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="container todo-main-content">
							<!-- Task Input  -->
							<div class="input-group mb-3">
								<input
									id="taskInput"
									type="text"
									class="form-control"
									placeholder="Task Description"
									aria-label="Task name"
									aria-describedby="addTaskButton"
								/>
								<div class="input-group-append">
									<button class="btn btn-outline-secondary button-pressed-no-shadow" id="addTaskButton" onclick="submitTask()" type="button">
										Add
									</button>
								</div>
							</div>
							<div class="container d-flex justify-content-center">
								<span id="NoTaskTodayText">No tasks for today</span>
							</div>
							<!-- Task items -->
							<ul class="list-group" id="listOfTasks"></ul>
						</div>
					</div>
					<div class="modal-footer">
						<div class="container d-flex justify-content-center">
							<button type="button" class="btn btn-primary button-pressed-no-shadow shadow-none" id="clearTasksButton">Clear Tasks</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.0/howler.js"></script>
		<script src="js/app.js"></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"
		></script>
	</body>
</html>
