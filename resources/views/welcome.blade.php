@extends('master/layout')
@section('content')
 <style>
   


 </style>
 
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
