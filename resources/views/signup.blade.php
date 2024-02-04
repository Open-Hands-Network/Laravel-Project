@extends('layout.layout')

@section('content')

<div class="container bg-light rounded-4 ">
<h1 class="text-center m-5 "  >Sign Up</h1>
    <div class="row">

<div class="col">

<div class="mb-3">
  <label  class="form-label">First name</label>
  <input type="text" class="form-control" name="user_first_name"  placeholder="input First name" >
</div>

</div>

<div class="col">

  <label for="exampleFormControlInput1" class="form-label">last name</label>
  <input type="text" class="form-control" name="user_last_name"  placeholder="input last name" >
</div>


</div>






<div class="row">
    <div class="col">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="user_email"  placeholder="@example.com">
</div>
    </div>
</div>


<div class="row">
    <div class="col">
    <div class="mb-3">
  <label class="form-label">National ID</label>
  <input type="number" class="form-control" name="national_id" placeholder="+14Number">
</div>
    </div>
</div>




<div class="row">

<div class="col">

<div class="mb-3">
  <label  class="form-label">Gender</label>
  <select class="form-select"  aria-label="Default select example">
  <option selected>Select</option>
  <option value="1">male</option>
  <option value="2">female</option>
</select>
</div>

</div>

<div class="col">

  <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
  <input type="number" class="form-control" name="user_phone"  placeholder="Your phone number" >
</div>


</div>




<div class="row">
    <div class="col">
    <div class="mb-3">
  <label  class="form-label">Password</label>
  <input type="password" class="form-control" name="user_password"  placeholder="Enter at least 8+ characters">
</div>
    </div>
</div>





<div class="form-check m-5 ">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    By signing up, I agree with the  <a href="">Terms of Use</a>    & <a href="">Privacy policy</a>
  </label>
</div>

<div class="row">
    <div class="col text-center ">
    <button class="btn btn-primary w-75  "  >Sign up</button>
    </div>
</div>
<p class="text-center" >Already have an account? <a href="">Log in</a>  </p>
 </div>




 @endsection

 @section('title', 'signup')
