
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="keywords" content="Edupls - Education & Online Course HTML Template">
	<meta name="description" content="Edupls - Education & Online Course HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/logo/fav-icon.svg">
	<title>Edupls - Education & Online Course HTML Template</title>
	<!-- Fontawesome Icon -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- Icomoon Icon -->
	<link rel="stylesheet" href="assets/fonts/style.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
	<!-- Aos Animation -->
	<link rel="stylesheet" href="assets/css/aos.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Swiper -->
	<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
	<!-- Animate Css -->
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<!-- Main Css File -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<section class="breadcum">
    <div class="container">
        <div class="breadcum-content">
            <h2 class="title">Log In</h2>
            <h4 class="para">
                <a href="{{ url('/') }}">Home</a> / Log In
            </h4>
        </div>
    </div>
</section>

<section class="login-section">
    <div class="signin">

        <div class="content">

            <h2 class="login-title">Log In</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-3" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="form">
                @csrf

                <!-- Email -->
                <div class="inputBox">
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Email"
                        required
                        autofocus
                        autocomplete="username">

                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Password -->
                <div class="inputBox">
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                        autocomplete="current-password">

                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-check mt-3 mb-3">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="remember"
                        id="remember_me">

                    <label class="form-check-label" for="remember_me">
                        Remember Me
                    </label>
                </div>

                <div class="links">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif

                    <a href="{{ route('register') }}">
                        Signup
                    </a>
                </div>

                <div class="all-btn v2 mt-3">
                    <button type="submit" class="btn-p btn-blue v1 rounded border-0">
                        Log In Now
                    </button>
                </div>

            </form>

        </div>

    </div>
</section>
<!-- Jquery -->
<script src="assets/js/jquery.min.js"></script>

<!-- bootstrap -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Anime Js -->
<script src="assets/js/anime.min.js"></script>
<!-- Swiper Js -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- Gsap -->
<script src="assets/js/gsap.min.js"></script>
<!-- ScrollTrigger -->
<script src="assets/js/ScrollTrigger.min.js"></script>
<!-- Counter Up -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<!-- Magnific Popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Countdown -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- Aos -->
<script src="assets/js/aos.js"></script>
<!-- Main Js File -->
<script src="assets/js/index.js"></script>


