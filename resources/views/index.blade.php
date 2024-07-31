<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>

<body>
    <video autoplay muted loop id="background-video">
        <source src="{{ asset('style/background/video.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="login-area d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-center mb-4 heading">Welcome to <span class="text-warning">One Bank</span></h1>
        <div class="login-form-area">
            <h4 class="text-center pb-3 login-text">Login</h4>
            <form action="{{ route('log-in') }}" method="post">
                @csrf
                <input type="text" name="username" placeholder="Username" class="form-control mb-3">
                <input type="password" name="Password" placeholder="Password" class="form-control mb-3">
                <button class="btn btn-primary w-100">login</button>
            </form>
            <p class=" text-white ">Don't have an account? <span><a href="{{ route('signup') }}"
                        class=" text-warning">create account</a></span></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- video slow motion add -->
    <script>
        // Set the playback rate to slow motion
        var bgVideo = document.getElementById('background-video');
        bgVideo.playbackRate = 0.45;
        bgVideo.controlsList = "nodownload";
    </script>
</body>

</html>
