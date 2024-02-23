@extends('layout.layout')

@section('title', 'Contact Us')



@section('content')
    <div class="container p-5">
        <div class="row align-items-center p-3" style="background-color: color(srgb 0.98 0.98 0.98);border-radius:20px;">
            <div class="col-6">
                <h1 style="color:#353535 !important">Contact us</h1>
                <form action="{{ route('send_mail') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                    <label for="name" class="form-label mt-3">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="e.g. John Doe">
                    <label for="email" class="form-label mt-3">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="youremail@example.com">
                    <label for="message" class="form-label mt-3">Message</label>
                    <textarea name="message" name="message" id="message" class="form-control" rows="7" placeholder="Message..."></textarea>
                    <input class="btn btn-primary mt-3" style="background: var(--blue-6) !important;border-color: var(--blue-6) !important;width:200px" value="Send" type="submit"/>
                </form>
            </div>
            <div class="col-6">
                <img class="img-fluid" src="{{asset('assets/images/contact_us_img.jpeg')}}">
            </div>
        </div>
    </div>
@endsection