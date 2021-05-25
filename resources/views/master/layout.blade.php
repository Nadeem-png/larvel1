<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9ddc0bba90.js" crossorigin="anonymous"></script>
    <style>
        body{
            /*background-image: linear-gradient(to right,rgba(247, 252, 249,0.1),rgba(75, 79, 77,1));*/
            background-color: #31375D;
            font-family: Droid Sans Mono;

        }
        .header{
            background-image: url({{asset("img/bg.jpg")}});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 630px;
        }
        li:hover{
            border-bottom:2px solid brown;
        }
        .btn:hover{
            background:lightskyblue;
            text-decoration: none;
        }
    </style>
</head>
<body style="">
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-white  p-3">
        <a class="navbar-brand ml-5 text-dark
         font-weight-bold" href="#"><img class="img-fluid rounded-circle" style="width: 100px;height: 100px" src={{asset('img/nadeem.jpeg')}}></a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-5"  style=";font-size: 19px">
                <li class="nav-item active">
                    <a class="nav-link mr-3 text-white" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3 text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3 text-white" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="#">Contact</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="d-flex justify-content-between flex-column align-items-end text-white container  mt-5" style="font-family: 'Droid Sans Mono'">
         <h2>Hey there!</h2>
        <h2>I'm Nadeem Khan</h2>
        <h2>Full Stack web Developer</h2>
        <h2> And Independent <span class="text-info">Frelencer</span></h2>
        <button class="btn btn-primary mt-4 " style="padding: 10px 30px;border-radius: 6px "><a href="" class="text-white" >Resume</a></button>
    </div>
</header>

@yield('content')
</body>
</html>
