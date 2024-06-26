<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>One Health - Medical Center HTML5 Template</title>
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>
    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" style="visibility:visible;" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('home')}}">Back Home</a>
                        </li>
                        

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" style="text-decoration: underline;"
                                        href="{{ url('myappointment') }}">My Appointment</a>
                                </li>
                                <x-app-layout>
                                </x-app-layout>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div align="center" style="padding: 70px;">
        <table style="border: 1px solid black;">
            <tr style="background-color: rgb(164, 241, 234);">
                <th style="padding: 20px; font-size:20px; color:black">Doctor Name</th>
                <th style="padding: 20px; font-size:20px; color:black">Date</th>
                <th style="padding: 20px; font-size:20px; color:black">Message</th>
                <th style="padding: 20px; font-size:20px; color:black">Status</th>
                <th style="padding: 20px; font-size:20px; color:black">Cancel Appointment</th>
            </tr>
            @foreach ($appoint as $appoints)
                <tr>
                    <td style="padding: 20px; font-size:20px; color:black">{{ $appoints->doctor }}</td>
                    <td style="padding: 20px; font-size:20px; color:black">{{ $appoints->date }}</td>
                    <td style="padding: 20px; font-size:20px; color:black">{{ $appoints->message }}</td>
                    <td style="padding: 20px; font-size:20px; color:black">{{ $appoints->status }}</td>

                    <td align="center"><a href="{{ url('cancel_appoint', $appoints->id) }}"
                            onclick="return confirm('Are you sure to cancel?') " class="btn btn-danger">Cancel</a>
                    </td>

                </tr>
            @endforeach

        </table>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links with the class 'nav-link'
            $(".nav-link").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();
                    // Store hash
                    var hash = this.hash;
                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</body>

</html>
