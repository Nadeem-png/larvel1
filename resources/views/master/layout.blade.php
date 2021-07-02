<!DOCTYPE html>
<html>

<head>
    <!doctype html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <style>
        .a1{
                color: white;
            }

            .a1:hover{
                color: lightcyan;
            }
             .navbar-nav{
            
            z-index:1000;
            background-color:#2f3640;
            }
           .navbar-collapse{
            
            z-index:1000;
        
            }
            
    </style>
</head>
<body style="">
<nav class="navbar nav1   navbar-expand-lg"style="height: 70px;background-color:#2f3640 ">
<div class="w-25">
        <a href="/" class="navbar-brand">
            <img src="{{asset('img/nadeem.jpeg')}}" class="img-fluid rounded-circle w-25 h-25" style="margin-left:60px">
        </a>
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars text-white"></i></button>
    
    <div class="navbar-collapse   collapse" id="mynav">
        <ul class="navbar-nav mt-4 ">
        <li class="nav-item" @yield('nava')>
                    <a href="/" class="nav-link a1  ml-5 font-weight-bold">Home</a>
                </li>
            <li class="nav-item" @yield('nava')>
                <a href="/about" class="nav-link a1 ml-5 font-weight-bold">About</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="/blog" class="nav-link a1 ml-5 font-weight-bold">Portfolio</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="/event" class="nav-link a1 ml-5 font-weight-bold">Pricing</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="/contact" class="nav-link a1 ml-5 font-weight-bold">contact</a>
            </li>

            <li class="nav-item" @yield('nava')>
                <a href="/faq" class="nav-link a1 ml-5 font-weight-bold">FAQ</a>
            </li>

            


        </ul>
    </div>
</nav>
  <!--   <div class="d-flex justify-content-between flex-column align-items-end text-white container  mt-5" style="font-family: 'Droid Sans Mono'">
         <h2>Hey there!</h2>
        <h2>I'm Nadeem Khan</h2>
        <h2>Full Stack web Developer</h2>
        <h2> And Independent <span class="text-info">Frelencer</span></h2>
        <button class="btn btn-primary mt-4 " style="padding: 10px 30px;border-radius: 6px "><a href="" class="text-white" >Resume</a></button>
    </div> -->

@yield('content')
<script>
  AOS.init();
</script>
</body>
</html>
