@extends('layout.layout')

@section('content')
    <div class="container bg-light rounded-4 ">
        <form action="{{ route('user.add') }}" method="post">
            @csrf
            <h1 class="text-center m-5 ">Sign Up</h1>
            <div class="row">

                <div class="col">

                    <div class="mb-3">
                        <label class="form-label">First name</label>
                        <input type="text" class="form-control" value="{{ old('first_name') }}" name="first_name"
                            placeholder="input First name">
                        @error('first_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">last name</label>
                    <input type="text" class="form-control" value="{{ old('last_name') }}" name="last_name"
                        placeholder="input last name">
                    @error('last_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


            </div>






            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" value="{{ old('email') }}" id="exampleFormControlInput1"
                            name="email" placeholder="@example.com">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">National ID</label>
                        <input type="number" class="form-control" value="{{ old('nationalID') }}" name="nationalID"
                            placeholder="+14Number">
                        @error('nationalID')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="job" class="form-label">Job</label>
                    <input type="text" class="form-control" name="job" value="{{ old('job') }}" id="job"
                        placeholder="Your job">
                    @error('job')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea name="bio" id="bio" class="form-control" rows="4"
                        placeholder="Write something about yourself...">{{ old('bio') }}</textarea>
                    @error('bio')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="row">

                <div class="col">

                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">male</option>
                            <option value="2">female</option>
                        </select>
                        @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="col">

                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" value="{{ old('phone') }}" name="phone"
                        placeholder="Your phone number">
                    @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


            </div>




            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password"
                            placeholder=
                            "8-16 characters including atleast one Uppercase letter, Lowercase letter, Number and a Special character">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>




            <div class="row justify-content-around my-4">

                <div class="form-check col ms-3">
                    <input class="form-check-input" type="checkbox" name="terms" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        By signing up, I agree with the <a href="">Terms of Use</a> & <a href="">Privacy
                            policy</a>
                        @error('terms')
                            <br>
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col text-center ">
                    <button class="btn btn-primary w-75  ">Sign up</button>
                </div>
            </div>
        </form>
        <p class="text-center">Already have an account? <a href="{{route("user.signIn")}}">Log in</a> </p>
    </div>
@endsection

@section('title', 'signup')
