<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4dad1e0fea.js" crossorigin="anonymous"></script>
    @yield('css')
    <link rel="stylesheet" href="{{url('css/main.css')}}" />
    <title>SITE-POOL</title>
</head>
<body>
    {{-- header --}}
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="/" class="logo"><span>SITE</span>-POOL</a>

        <nav class="navbar">
            <a href="/">Home</a>
            <a href="/aboutUs">About Us</a>
            @if (Auth::check())
            <a href="/history">History</a>
            @endif
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            @if (Auth::check())
            <a href="/profile"><i class="fas fa-user" id="profile-btn"></i></a>
            @else
            <a class="btn2" href="/login">Login</a>
            @endif
        </div>

        <form action="/searchBilliard" method="POST" class="search-bar-container">
            @csrf
            <input type="search" id="search-bar" placeholder="search here..." name="search">
            <button style="background-color: transparent;"><label for="search-bar"><i class="fas fa-search" id="search-btn"></i></label></button>
        </form>
    </header>

    {{-- body --}}
    @yield('content')

    {{-- footer --}}

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>About Us</h3>
                <p>The first billiard table booking application in Indonesia for the Batam area. Easy, convenient, and fast, book your billiard table now!</p>
            </div>

            <div class="box">
                <h3>Branch locations</h3>
                <a href="#">Batam</a>
               
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://www.instagram.com/sitepool.id_?igsh=MTFhM2Q3YTU4NmpkNA==">Instagram</a>
                <a href="https://www.tiktok.com/@sitepool.id?_t=8kHQjzWPuks&_r=1">TikTok</a>
                <a href="#">WhatsApp</a>
            </div>
        </div>

        <h1 class="credit"> created by <span> SITEPOOL </span> | all rights reserved! </h1>
    </section>

    <script src="{{url('js/home.js')}}"></script>
</body>
</html>
