@extends('layout.layout')

@section('content')



    <div class="container" id="cnt">

        <form action="{{route("add.post")}}" method="POST" enctype="multipart/form-data" class="form p-2 w-75 m-auto" style="border:1px lightgrey solid;border-radius:5px;">
            @csrf
            <h1 class="text-start">Write what's on your mind</h1>
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <textarea
                type="title"
                name="title"
                id="title"
                class="form-control"
                placeholder="write anything you want..."
                aria-describedby="helpId"
                rows="5"
            ></textarea>
            @error("title")
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input
                type="file"
                name="image"
                id="image"
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
            />
            @error("image")
                <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Add post">
        </div>
        
    
    </form>

    </div>

    <script src="{{ asset('assets/js/addposts.js') }}"></script>

    <script>
        let counter = 0
        let cnt = document.getElementById("cnt")
        let posts
        async function fetchData(x) {
            let res = await fetch(`http://localhost:8000/api/posts/@auth{{$user->id}}@endauth?page=${x}`)
            let data = await res.json()
            posts = data
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

@section('title', 'index')
