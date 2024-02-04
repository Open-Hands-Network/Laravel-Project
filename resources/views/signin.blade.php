@extends('layout.layout')

@section('content')
    <div class="container">

        <div class="row align-items-center  gap-5 ">

            <div class="col  m-5 ">

                <div class="row mt-5 ">

                    <h1 class="text-center"> sign in</h1>

                </div>

                <div class="row">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="user_email"
                        placeholder="@example.com">
                </div>



                <div class="row">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="user_password"
                        placeholder="Enter at least 8+ characters">
                </div>



                <div class="form-check m-2 d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Remember Me?</label>
                    <a href="" class="ms-auto">Forget Password?</a>
                </div>


                <div class="row">
                    <button class="btn btn-primary w-100  ">Sign up</button>
                </div>
                <p class="text-center">Already have an account? <a href="">Log in</a> </p>
            </div>




            <div class="col m-5 ">
                <img src="{{asset('assets/images/signin.png')}}" alt="">
            </div>



        </div>

    </div>
@endsection

@section('title', 'index')
