@extends('layout.layout')

@section('title', 'Profile')



@section('content')
    @if (Auth::user()->id == $user->id)
    <form class="container d-flex flex-row-reverse" action="{{route("user.logout")}}" method="post">
        @csrf
        <input type="submit" class="btn btn-danger" value="Logout">
    </form>
    @endif
    <div class="container mt-3" id="cnt">
        <div class="banner position-relative">
            <a href="{{route("user.edit")}}" class="fad fa-pencil-alt position-absolute text-decoration-none" style="--fa-primary-color: #1a1a1a; --fa-secondary-color: #1a1a1a;right:20px;top:20px;font-size:20px;background-color:white;padding:7px;border-radius:25px"></a>
            <div class="w-100" style="height:150px">
                <img src="{{ asset('assets/images/banner.png') }}" class="w-100 h-100" style="z-index:-1;">
            </div>
            <div class="d-flex w-100 justify-content-between align-items-center">
                <div></div>
                <div class="d-flex position-absolute align-items-center" style="left:15px">
                    <div class="me-2">
                        <img class="img-fluid rounded-circle" style="width:100px;height:100px"
                            src="{{ $user["image"]? asset("assets/images/Profilepictures/$user[image]") : asset("assets/images/defaultPFP.png") }}" alt="">
                    </div>
                    <div class="text p-2" style="border-radius: 5px;background-color:var(--blue-1);">
                        <span style="font-weight:600">{{$user["first_name"]." ".$user["last_name"]}}</span><br>
                        <div style="color:grey">{{$user["job"]}}</div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3 me-3">Chat<i class="fa-regular fa-comment-dots ms-2"></i></button>
            </div>
        </div>

        <script src="{{ asset('assets/js/addposts.js') }}"></script>

    <script>
        let counter = 0
        let cnt = document.getElementById("cnt")
        async function fetchData(x) {
            let res = await fetch(`http://localhost:8000/api/posts/profile/{{$user->id}}?page=${x}`)
            let data = await res.json()
            return await data
        }

        window.onload = async function() {
            let posts
            counter++
            posts = await fetchData(counter)
            addposts(posts, "{{ asset('assets/images/Posts') }}", "{{ asset('assets/images/Profilepictures') }}",
            {
                "id": @if (Auth::check())
                "{{$user->id}}"
                @else
                null
                @endif,
                "image" :
                @if (Auth::check())
                "{{$user->image}}"
                @else
                null
                @endif,
                "name" :
                @if (Auth::check())
                "{{$user->first_name}} {{$user->last_name}}"
                @else
                null
                @endif,
                "token" : 
                @if (Auth::check())
                "{{$user->token}}"
                @else
                null
                @endif}
                )
        }

        function getElementHeight(element) {
            const rect = element.getBoundingClientRect();
            return rect.height;
        }


        window.addEventListener('scroll', async function() {
            let posts
            let scrollToPosts = document.getElementsByClassName("card")
            if (window.scrollY + window.innerHeight >= document.documentElement.scrollHeight) {
                counter++
                posts = await fetchData(counter)
                scrollToPosts[scrollToPosts.length - 1].scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                })
                addposts(posts, "{{ asset('assets/images/Posts') }}",
                    "{{ asset('assets/images/Profilepictures') }}",{
                "id": @if (Auth::check())
                "{{$user->id}}"
                @else
                null
                @endif,
                "image" :
                @if (Auth::check())
                "{{$user->image}}"
                @else
                null
                @endif,
                "name" :
                @if (Auth::check())
                "{{$user->first_name}} {{$user->last_name}}"
                @else
                null
                @endif,
                "token" : 
                @if (Auth::check())
                "{{$user->token}}"
                @else
                null
                @endif} )

        }
        });
    </script>
@endsection
