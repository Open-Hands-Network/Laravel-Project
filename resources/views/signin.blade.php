@extends('layout.layout')

@section('content')
    <div class="container">
        <form action="{{route("user.login")}}" id="form" method="post">
            @csrf
            <div class="row align-items-center  gap-5 ">

                <div class="col  m-5 ">

                    <div class="row mt-5 ">

                        <h1 class="text-center"> sign in</h1>

                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlInput1" for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old("email")}}"
                            placeholder="@example.com">
                        @error("email")
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>



                    <div class="row mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>



                    <div class="form-check d-flex justify-content-between mb-3">
                        <div class="div">
                            <input class="form-check-input me-1" type="checkbox" name="remember" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Remember Me?</label>
                        </div>
                        <a href="" class="ms-auto">Forget Password?</a>
                    </div>


                    <div class="row">
                        <button class="btn btn-primary w-100  ">Sign in</button>
                    </div>
                    <p class="text-center mt-3">New here? <a href="{{route("user.signUp")}}">Sign up</a>! </p>
                </div>




                <div class="col m-5 ">
                    <img src="{{ asset('assets/images/signin.png') }}" alt="">
                </div>



            </div>

        </form>
    </div>

<script>
    let form = document.getElementById("form")
    form.addEventListener('submit',async function(e){
        e.preventDefault()
        let res = await fetch("http://localhost:8000/api/login",{
            headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
            },
            method : 'POST',
            body: JSON.stringify({
            email: document.getElementById("email").value,
            password: document.getElementById("password").value
        })
        })
        form.submit()
    })
</script>

@endsection

@section('title', 'index')
