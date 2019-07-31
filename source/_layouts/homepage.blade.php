<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>
    <script src="https://kit.fontawesome.com/27def0ec8f.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/nav.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
<header>	
<div class="container">
			<nav class="mnu">
                        <div class="logo" id="logo">
                            <h1> <a href="index.html"><img src="images/logo_mulanbook.png" alt="MulanBook Logo" /></a>
                            </h1>
                        </div>

                        <label for="drop" class="toggle"><i class="fa fa-bars"></i></label>
                        <input type="checkbox" id="drop">
                        <ul class="menu mt-1">
                            <li class="mr-lg-4 mr-3 active"><a href="index.html">Home</a></li>
                            <li class="mr-lg-4 mr-3"><a href="about.html" class="scroll">About</a></li>
                        </ul>
                    </nav>

</div>
</header>

    <article>
        <section>
            @yield('content')
        </section>
    </article>

    <footer>
        <small>
            This project is maintained by <a href="https://raniesantos.netlify.com">Ranie Santos</a>.
            View the <a href="https://github.com/raniesantos/artisan-static">GitHub repo</a>.
        </small>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
