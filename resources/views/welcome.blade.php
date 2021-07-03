@extends('master/layout')
@section('content')
 <style>

.contactbg{
    background-color:#2f3640;
}
footer{
    background-color:#191a1c;
}

section.pricing {
background-color:#2f3640;
    width:100%;
    height:auto;
  }

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}
.portfolio{
    background-color:#2f3640;
    width:100%;
    height:auto;
}
.card1{
    border-radius:10px;
}
header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}


 </style>
 
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="img/seo.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
<div data-aos="fade-up"
     data-aos-duration="3000">
      <div class="w-100 text-white">
        <h1 class="display-5 mb-2">Nadeem khan WordPress & Web App Development</h1>
        <p class="lead mb-3">Specializing in custom development, forntend & backend.If you are business seeking website presence or are looking to hire , Contact me.</p>
     <a href="https://www.linkedin.com/in/nadeem-khan-3b1924207" class="btn btn-warning rounded-pill px-5 py-2">LinkedIn</a>
  
 </div>
</div>
    </div>
  </div>
</header>
<section id="about">
 <div class="container container-sm mt-5">
 <u ><h3 class="text-center mb-5" >About</h3></u>
<div data-aos="fade-up"
     data-aos-duration="3000">
 <div class="row ">
 <div class="col-12 col-lg-3 col-md-6 text-center">
 <a href=""><i class="fas fa-tachometer-alt fa-4x text-dark"></i></a>
 <h4>Fast</h4>
 <p>Fast load time and lag free interaction, my highest priority</p>
</div>

 <div class="col-12 col-lg-3 col-md-6 text-center">
 <a href=""><i class="fas fa-tablet-alt fa-4x text-dark"></i></i></a>
 
 <h4>Responsive</h4>
 <p>My layout will work on any device , large and small.</p>
 </div>

 <div class="col-12 col-lg-3 col-md-6 text-center">
 <a href=""><i class="fas fa-layer-group  fa-4x text-dark"></i></a>
 
 <h4>Intuitive</h4>
 <p>Strong preference for easy to use. Intuitive UX/Ui</p>
 
</div>

 <div class="col-12 col-lg-3 col-md-6 text-center">
 <a href=""><i class="fas fa-cogs fa-4x text-dark"></i></a>
 
 <h4>Dynamic</h4>
 <p>Website Don't have to be static. i love making pages come to life.</p>
 </div>
</div>
 </div>
 </div>
 <div class="container container-sm mt-5">
<div data-aos="fade-up"
     data-aos-duration="3000">
 <div class="row">
 <div class="col-12 col-lg-6 text-center mt-4">
 <img src="{{asset('img/nadeem.jpeg')}}" alt="" class="img-fluid rounded-circle" height="150px" width="150px">
 <h4 class="mt-3">Who's this guy?</h4>
 <p>Hi,I am Nadeem khan. I am Front-End and Back-end Developer.</p>
<p>Full stack Developer My role is to write and style the front-end components and back-end components that meet the requirements of our mocks and fulfill our user stories. I also monitor and process pull requests for production deployments.    </p>
 <p>I have Serious passion for UI effects. Animations and creating intuitive, dynamic user experiences</p>
 <p style="color:#079992">Let's Make something special</p>
 </div>
 <div class="col-12 col-lg-6 mt-4">
    <div class="progress mb-4">
    <div class="progress-bar " style="width:90%">html <span class="ml-auto">90%</span></div>
    </div>
    <div class="progress mb-4">
    <div class="progress-bar" style="width:90%">Css<span class="ml-auto">90%</span></div>
    </div>
    <div class="progress mb-4">
    <div class="progress-bar" style="width:70%">Jquery<span class="ml-auto">70%</span></div>
    </div>
    <div class="progress mb-4">
    <div class="progress-bar " style="width:90%">Bootstrap <span class="ml-auto">90%</span></div>
    </div>
    <div class="progress mb-4">
    <div class="progress-bar " style="width:80%">PHP <span class="ml-auto">80%</span></div>
    </div>
    <div class="progress mb-4">
    <div class="progress-bar " style="width:80%">Laravel <span class="ml-auto">80%</span></div>
    </div>
    <div class="progress mb-4">
    <div class="progress-bar " style="width:80%">MySQL <span class="ml-auto">80%</span></div>
    </div>
    <div class="progress mb-4">
    <div class="progress-bar " style="width:80%">React.js <span class="ml-auto">80%</span></div>
    </div>
    <div class="progress mb-4">
    <div class="progress-bar " style="width:80%">Material-UI <span class="ml-auto">80%</span></div>
    </div>
    <div class="progress mb-4">
    <div class="progress-bar " style="width:80%">Node.js <span class="ml-auto">80%</span></div>
    </div>
 </div>
 </div>
</div>
 </div>
</section>

<section id="education">
 <div class="container container-sm mt-5">
 <u><h3 class="text-center mb-5" >Education</h3></u>
<div class="row ">
 <div class="col-12 col-lg-6 col-md-6 text-center">
<img src="{{asset('img/education.jpg')}}" alt="img" class="img-fluid mb-3">
</div>
 <div class="col-12 col-lg-6 col-md-6 text-center">

</div>
</div>
</div>
</section>

<section id="portfolio">
 <div class="portfolio">
<div class="container container-sm">
<h3 class="text-center py-5 text-white">PORTFOLIO</h3>

<ul class="nav nav-pills  text-center d-flex justify-content-center align-items-center mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active px-3 rounded-pill" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link rounded-pill" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">php/Laravel</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link rounded-pill" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">React.js</a>
  </li>
<li class="nav-item" role="presentation">
    <a class="nav-link rounded-pill" id="pills-contact-tab" data-toggle="pill" href="#pills" role="tab" aria-controls="pills-contact" aria-selected="false">Landing pages</a>
  </li>
</ul>
<div class="tab-content text-center" id="pills-tabContent">
  <div class="tab-pane fade  text-white show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <img src="{{asset('img/shadow.1add9ee7.png')}}" alt="" class="img-fluid mb-3">
  <h4>Agyle Intelligence</h4>
  <p>A platform for automating data collection and reporting throughout team operation and supply chain.</p>
  <a href="" class="btn btn-outline-danger rounded-pill px-4">Visit site</a>
  </div>
  <div class="tab-pane fade text-white" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <img src="{{asset('img/shadow.1add9ee7.png')}}" alt="" class="img-fluid mb-3">
  <h4>Agyle Intelligence</h4>
  <p>A platform for automating data collection and reporting throughout team operation and supply chain.</p>
  <a href="" class="btn btn-outline-danger rounded-pill px-4">Visit site</a>
  </div>
  <div class="tab-pane fade  text-white" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <img src="{{asset('img/shadow.1add9ee7.png')}}" alt="" class="img-fluid mb-3">
  <h4>Agyle Intelligence</h4>
  <p>A platform for automating data collection and reporting throughout team operation and supply chain.</p>
  <a href="" class="btn btn-outline-danger rounded-pill px-4">Visit site</a>
  </div>
<div class="tab-pane fade  text-white" id="pills" role="tabpanel" aria-labelledby="pills-contact-tab">
<img src="{{asset('img/shadow.1add9ee7.png')}}" alt="" class="img-fluid mb-3">
  <h4>Agyle Intelligence</h4>
  <p>A platform for automating data collection and reporting throughout team operation and supply chain.</p>
  <a href="" class="btn btn-outline-danger rounded-pill px-4">Visit site</a>
</div>
</div>
</div>
</div>


</section>

<section class="pricing py-5" id="pricing">
  <div class="container">
<h3 class="text-center py-5 text-white">PRICING</h3>
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
<div data-aos="fade-up"
     data-aos-duration="3000">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">BASIC</h5>
            <h6 class="card-price text-center">$100<span class="period">/</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Website Auidit </li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Design</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Development</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Upload Content</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Backup</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Analytics</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Live Chat Support</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Search Engine Optimization</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
</div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
<div data-aos="fade-up"
     data-aos-duration="3000">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">STANDARD</h5>
            <h6 class="card-price text-center">$200<span class="period">/</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Website Auidit</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Design</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Development</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Content Upload</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Backup</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Search Engine Optimization</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Live Chat Support</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Analytics</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
        </div>
</div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
<div data-aos="fade-up"
     data-aos-duration="3000">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">PREMIUM</h5>
            <h6 class="card-price text-center">$400<span class="period">/</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Website Auidit</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Design</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Development</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Backup</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Analytics</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Live Chat Support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Search</strong> Engine Optimization</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Content Management System
</li>
            </ul>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
          </div>
</div>
        </div>
      </div>
    </div>
  </div>
</section>
 <section id="contact">
    <div class="contactbg">
        <div class="container container-sm mt-5">
<div data-aos="fade-up"
     data-aos-duration="3000">
            <div class="row mx-auto">
                <div class="col-lg-6 col-12 text-center ">
                  <u class="text-white"><h1 class="text-white mt-5 font-weight-bold">CONTACT</h1></u> 
                   <h6 class="mt-5 "style="color:#079992">Have a question or want to work togather?</h6>

                </div>
                <div class="col-lg-6 col-12 mt-5 text-white mb-5">
                   
                        <div class="col-12 mt-3">
                            <label style="font-weight: bold;" class="mb-2">Name</label>
                            <input type="text" placeholder="Enter name.." class="form-control border border-dark bg-dark @error('fname')is-invalid @enderror" name="fname" value="{{old('fname')}}">
                        </div>
                    
                        <div class="col-12 mt-3">
                            <label style="font-weight: bold;" class="mb-2">Email</label>
                            <input type="text" placeholder="Enter Email Address" class="form-control border border-dark bg-dark @error('email')is-invalid @enderror" name="email" value="{{old('email')}}">
                        </div>
                        <div class="col-12 mt-3">
                            <label style="font-weight: bold;" class="mb-2">Comment or Message </label>
                            <textarea class="form-control border border-dark bg-dark @error('remarks')is-invalid @enderror" placeholder="Type Message..." style="resize: none;" rows="5" name="remarks" >{{old('remarks')}}</textarea>
                        </div>
                        <button class="btn border border-white text-white px-4 mt-4 ml-4">Submit</button>
                        @csrf


                
                </div>

            </div>

                </div>
            </div>
</div>
        </div>
    </div>
</section>
    <footer class="footor">
    <div class="container container-sm">
    <div class="row">

    <div class="col-12 col-lg-7 mt-4 text-center">
    
    <a href="https://www.linkedin.com/in/nadeem-khan-3b1924207" class="ml-4 ">
            <i class="fab fa-linkedin-in text-white" style="font-size: 25px"></i>
        </a>
        <a href="https://www.facebook.com/profile.php?id=100012136065724" class="ml-4 ">
            <i class="fab fa-facebook-f text-white" style="font-size: 25px"></i>
        </a>
        
        <a href="https://www.instagram.com/invites/contact/?i=ntoc7orpkvy9&utm_content=1if40bc" class="ml-4 ">
            <i class="fab fa-instagram text-white" style="font-size: 25px"></i>
        </a>
<a href="https://github.com/Nadeem-png" class="ml-4 ">
            <i class="fab fa-github text-white" style="font-size: 25px"></i>
        </a>
    
</div>
    <div class="col-12 col-lg-5 text-center mt-4 mb-3">

    <h6 class="text-white">NADEEM KHAN <span class="text-danger">&copy;2021</span></h6>
    </div>

    </div>
    
    </div>
    </footer>
@endsection

@section('title','Home')
@section('nava','active')
