<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Analygram For Adminstrators</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="https://analygram-6d0a5.web.app/hadderlogo.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Analygram For Adminstrators</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="https://analygram-6d0a5.web.app/">Go to Main
                            Website</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
                        </li>
                    @endauth
                </ul>
                @auth
                    <div class="ms-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link active dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="ms-auto">
                        <a href="/login" class="btn btn-light" type="submit">Admin Login</a>
                    </div>
                @endauth

            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 text-body-secondary">
                <h1>Unlock the power
                    <span>of data with</span> <span class="text-success">AnalyGram</span>
                </h1>
                <p>
                    Your go-to Instagram analytics tool for powerful insights. AnalyGram helps you understand your
                    audience, optimize content, and boost engagement for a standout online presence.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="https://img.freepik.com/vecteurs-libre/illustration-concept-analyse-ludique_114360-7045.jpg?t=st=1706050301~exp=1706050901~hmac=41f83ab8b9da339e03745c32dea87af2dc6fab1a37af39de40e45289c5e6a981"
                    alt="banner" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Your existing HTML code -->

    <div class="container mt-5">
        <h2 class="text-success text-center mb-5" style="margin: 8rem auto">Features</h2>
        <div class="row align-items-center justify-items-between mb-5">
            <div class="col-lg-6 mb-4">
                <img src="https://analygram-6d0a5.web.app/static/media/hero-screenshot-2.050139480ff5b49b4fba.png"
                    class="img-fluid" alt="">
            </div>
            <div class="col-md-6 mb-4">
                <h3>Real-Time Analytics</h3>
                <p>Get instant access to real-time analytics and insights for your Instagram account.</p>
            </div>
        </div>

        <div class="row align-items-center justify-items-between mb-5">
            <div class="col-md-6 mb-4">
                <h3>Engagement Metrics</h3>
                <p>Track engagement metrics such as likes, comments, shares, and more to understand your audience
                    better.</p>
            </div>
            <div class="col-lg-6 mb-4">
                <img src="https://analygram-6d0a5.web.app/static/media/afordable.acf6adf8f08567e4c1537edb71b75dd2.svg"
                    class="img-fluid" alt="">
            </div>
        </div>
        <div class="row align-items-center justify-items-between mb-5">
            <div class="col-lg-6 mb-4">
                <img src="https://analygram-6d0a5.web.app/static/media/8582996.5eec9d435ce8f34dc72f.jpg"
                    class="img-fluid" alt="">
            </div>
            <div class="col-md-6 mb-4">
                <h3>Content Optimization</h3>
                <p>Optimize your content strategy based on data-driven insights to improve engagement and reach.</p>
            </div>
        </div>

    </div>

    <div class="container">
        <h2 class="text-success mb-4 text-center" style="margin: 8rem auto">How It Works</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-img-header">
                        <img src="https://analygram-6d0a5.web.app/static/media/10197785.1b4f71d29a46003bf5de.jpg"
                            class="img-fluid" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Create an Account</h3>
                        <p class="card-text">Sign up for AnalyGram and connect your Instagram account to get started.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-img-header">
                        <img src="https://analygram-6d0a5.web.app/static/media/afordable.acf6adf8f08567e4c1537edb71b75dd2.svg"
                            class="img-fluid" alt="">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Explore Insights</h3>
                        <p class="card-text">Access detailed analytics and insights to understand your audience and
                            content performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 mb-0 p-5 bg-success-subtle">
        <p class="text-center">
            Copyright &copy; 2024, AnalyGram Inc.
        </p>
    </div>

    <!-- Your existing HTML code continues... -->


</body>

</html>
