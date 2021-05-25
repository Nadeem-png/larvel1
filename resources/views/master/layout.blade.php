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
            box-sizing: content-box;

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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
    </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
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
