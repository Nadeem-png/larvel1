@extends('master/layout')
@section('content')
 <style>
     .div1{
         background-image: linear-gradient(to right,rgba(255, 17, 0,0.8),rgba(245, 217, 10,0.5));
         width: 500px;
         border-radius: 10px;
         background-position: center;
     }
     .div3{
         border-radius: 6px;
         padding: 10px;
         box-shadow: white;
         margin-left: 30px;
         margin-right: 20px;
     }
     .div2{
         border-radius: 6px;
     }
hr{
    width: 20%;
    border-bottom: 2px solid red;
}
     .div5{
         background-color: #fcf9e1;
     }
.about{
    background-image: url({{asset("img/bg1.jpg")}});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    width: 100%;
    height:400px;
}
     .bg3{

         background-image: url({{asset("img/bg6.jpg")}});
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
         width: 100%;
         height:530px;
     }


 </style>
 <div class="about">
     <div class="container-lg container-fluid">
         <h2 class=" mb-2 py-4 font-weight-bold">About Me</h2>
         <h5>Hey there!I'm Nadeem Khan Full stack web<br><strong> Developer.</strong>
         My role is writting and style the<br>fornt-end components and back-end components<br>
             that meet the requirements of our mocks and<br> fulfill our user requirements. I also
             monitor and<br> process pull request for production deployments.

         </h5>
     </div>
 </div>
 <div class=" bg3">

     <div class="container d-flex justify-content-end align-items-end text-dark flex-column">
         <h1 class="mt-5 mb-4 " style="margin-right: 190px">I am specialized in</h1>
         <div class="row">
             <div class="col-2">
             </div>
             <div class="col-10">
<h3>Web UI Design</h3>
                 <p>I am professional UI designer with 1 year of experience.My main focus is on listening</p>
             </div>
         </div>
         <div class="row">
             <div class="col-2">
             </div>
             <div class="col-10">
                 <h3>Web UI Design</h3>
                 <p>I am professional UI designer with 1 year of experience.My main focus is on listening</p>
             </div>
         </div>
         <div class="row">
             <div class="col-2">
             </div>
             <div class="col-10">
                 <h3>Web UI Design</h3>
                 <p>I am professional UI designer with 1 year of experience.My main focus is on listening</p>
             </div>
         </div>
     </div>
 </div>
 
    <div class="container">
        <h2 class="text-white text-center mb-4">Experience</h2>
        <hr>
        <div class="row">
            <div class="col  mt-5">
                <div class="text-center div3 text-white " style="background-color: #3b3d40;width: 75%">
                    <h5 class="mt-2 mb-2">Web Development intern</h5>
                    <p>User experience (UX) design is the process design<br> teams use to create products.
                        User experience (UX) design is the process design teams use to create products.</p>
                </div>
            </div>


            <div class="col  mt-5">
                <div class="text-center div3 text-white" style="background-color: #3b3d40;width: 75%">
                    <h5 class="mt-2 mb-2">Web Development intern</h5>
                    <p>User experience (UX) design is the process design<br> teams use to create products.
                        User experience (UX) design is the process design teams use to create products.</p>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col  mt-5">
                <div class="text-center div3 text-white " style="background-color: #3b3d40;width: 75%">
                    <h5 class="mt-2 mb-2">Web Development intern</h5>
                    <p>User experience (UX) design is the process design<br> teams use to create products.
                        User experience (UX) design is the process design teams use to create products.</p>
                </div>
            </div>
            <div class="col  mt-5 ">
                <div class="text-center div3 text-white" style="background-color: #3b3d40;width: 75%">
                    <h5 class="mt-2 mb-2">Web Development intern</h5>
                    <p>User experience (UX) design is the process design<br> teams use to create products.
                        User experience (UX) design is the process design teams use to create products.</p>
                </div>
            </div>
        </div>
        </div>

    <div class="container mt-5">
        <h2 class="text-center h2 text-white">Projects</h2>
        <hr>
        <div class="row mt-5">
        <div class="col-lg col-md-4  col-xsm-12 mb-3 mx-sm-2 ">
            <div class="text-white div2 text-center bg-success p-3">
                <h5 class=" mb-2 my-2">Oxs Finder</h5>
                <p>User experience (UX) design is the process design<br> teams use to create products.
                    User experience (UX) design is the process design teams use to create products.</p>
                <button class="btn btn-info px-3 py-2 rounded-pill">Repo Link</button>
            </div>
        </div>
        <div class="col-lg  col-md-4  col-xsm-12 mb-3 mx-sm-2">
            <div class="text-white div2 text-center bg-info p-3">
                <h5 class=" mb-2 my-2">Oxs Finder</h5>
                <p>User experience (UX) design is the process design<br> teams use to create products.
                    User experience (UX) design is the process design teams use to create products.</p>
                <button class="btn btn-success px-3 py-2 rounded-pill">Repo Link</button>
            </div>
        </div>
        <div class="col-lg col-md-4 col-xsm-12 mx-sm-2 ">
            <div class="text-white div2 text-center bg-primary p-3">
                <h5 class=" mb-2 my-2">Oxs Finder</h5>
                <p>User experience (UX) design is the process design<br> teams use to create products.
                    User experience (UX) design is the process design teams use to create products.</p>
                <button class="btn btn-success px-3 py-2 rounded-pill">Repo Link</button>
            </div>
        </div>
    </div>
    </div>
    <div class="div5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 col-sm-8 col-md-6 ">
                    <div class=" mt-5">
                        <p class="text-primary">Get In Touch</p>
                        <h3>Talk Or Meet with Me</h3>
                        <div class="row mt-5">
                            <div class="col-2">
                                <i class="fa fa-phone-alt fa-2x "></i>
                            </div>
                            <div class="col">
                                <p class="text-primary">Call Me Now</p>
                                <h5>+923017334787</h5>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <i class="fa fa-phone-alt fa-2x "></i>
                            </div>
                            <div class="col">
                                <p class="text-primary">Call Me Now</p>
                                <h5>+923017334787</h5>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <i class="fa fa-phone-alt fa-2x "></i>
                            </div>
                            <div class="col">
                                <p class="text-primary">Call Me Now</p>
                                <h5>+923017334787</h5>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-6 col-md-6 ">
                    <div class=" mt-5">
                        <p class="text-primary">Contact us</p>
                        <h3>Let Me know Here Know Here</h3>
                        <div class="col-12 mt-3">
                            <label style="font-weight: bold;" class="mb-2">First Name</label>
                            <input type="text" placeholder="first name.." class="form-control @error('fname')is-invalid @enderror" name="fname" value="{{old('fname')}}">
                        </div>
                        <div class="col-12 mt-3">
                            <label style="font-weight: bold;" class="mb-2">Last Name</label>
                            <input type="text" placeholder="last name.." class="form-control @error('lname')is-invalid @enderror" name="lname" value="{{old('lname')}}">
                        </div>
                        <div class="col-12 mt-3">
                            <label style="font-weight: bold;" class="mb-2">Email</label>
                            <input type="text" placeholder="Enter Email Address" class="form-control @error('email')is-invalid @enderror" name="email" value="{{old('email')}}">
                        </div>
                        <div class="col-12 mt-3">
                            <label style="font-weight: bold;" class="mb-2">Comment or Message </label>
                            <textarea class="form-control @error('remarks')is-invalid @enderror" placeholder="Type Message..." style="resize: none;" rows="5" name="remarks" >{{old('remarks')}}</textarea>
                        </div>
                        <button class="btn btn-success mt-3 ml-4">Submit</button>
                        @csrf


                    </div>
                </div>

            </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('title','Home')
@section('nava','active')
