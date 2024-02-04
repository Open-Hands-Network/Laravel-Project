@extends('layout.layout')

@section('content')
<div class="container edit">

   <div class="row">
        <div class="col-2">
        <h4>Edit Profile</h4>
        <h6 class="">Profile Photo</h6>
        <img src="{{asset('assets/images/Avatar.png')}}" alt="">
        </div>
    
       <div class="col div2">
        <span>Uplaod your photo</span>
        <span><p>Your photo should be in PNG or JPG format</p></span>
        <input type="file" class="form-control w-25">
        <button class="btn btn-light mt-1">Remove</button>
       </div>
   </div>

   <div class="form mt-3">
    <form action="" class="form">
        <div class="form-group">
            <label for=""><h6>Full Name</h6></label>
            <input type="text" class="form-control" placeholder="Your full name">
        </div>

        <div class="form-group mt-3">
            <label for=""><h6>Email</h6></label>
            <input type="email" class="form-control" placeholder="Your email">
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group mt-3">
                    <label for=""><h6>Job</h6></label>
                    <input type="text" class="form-control" placeholder="Your job">
                </div>
            </div>

                <div class="col-6">
                    <div class="form-group mt-3">
                        <label for=""><h6>Phone Number</h6></label>
                        <input type="number" class="form-control" placeholder="Your phone number">
                    </div>
            </div>
        </div>

     <div class="select mt-4 mb-3">
        <select class="form-select">
            <option value="1">Male</option>
            <option value="2">Female</option>
        </select>
     </div>

        <div class="form-group mb-3">
            <label for=""><h6>Bio</h6></label>
            <textarea class="form-control" placeholder="Tell Something about yourself"></textarea>
        </div>
        
        <div class="buttons d-flex justify-content-end">
            <button class="btn btn-light">Cancel</button>
            <button class="btn btn-primary">Save Changes</button>
        </div>
    </form>
   </div>
   
</div>
@endsection

@section("title", "Edit")