@extends('layout.layout')

@section('title', 'About Us')



@section('content')
    <div class="container mt-5">
        <div class="row bg-light align-items-center">
            <div class="col-5 p-5">
                <h1 class="text-dark fw-bolder">Our Team</h1>
                <p class="lead mt-3">We're a passionate team driven by giving back. That's why we created a website that gathers countless charities in one place. Our goal? To make donating and volunteering simpler and more impactful for everyone.</p>
            </div>
            <div class="col-7" style="background-image: url('{{asset('assets/images/about.jpeg')}}');background-size:contain;">
                <img class="img-fluid" src="{{asset('assets/images/about.jpeg')}}" style="visibility: hidden;" />
            </div>
        </div>
        <div class="row" style="margin-top: 50px">
            <div class="col-3">
                <div class="card">
                    <img class="img-fluid" style="aspect-ratio: 4/3;object-fit:cover;" src="{{asset('assets/images/nouran_img.jpeg')}}">
                    <div class="card-body m-auto text-center">
                        <div class="card-title fs-6 fw-bolder" style="margin-bottom: 0px !important;padding-bottom:0px !important;">Nouran Abdelgwad</div>
                        <span class="fw-light" style="color:darkorchid">Team Leader</span>
                        <p class="mt-2">Dynamic Maverick: Empowering, Energizing, and Elevating Our Team to Triumph!</p>
                        <a href="https://www.linkedin.com/in/nouran-abdelgwad-970a89247/" style="text-decoration: none;" target="_blank">
                            <i class="bi bi-linkedin fs-4 text-primary"></i>
                        </a>
                        <a href="https://github.com/NouranAbdelgwad" style="text-decoration: none;" target="_blank">
                            <i class="bi bi-github fs-4 text-dark ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="img-fluid" style="aspect-ratio: 4/3;object-fit:cover;" src="{{asset('assets/images/obaida_img.jpeg')}}">
                    <div class="card-body m-auto text-center">
                        <div class="card-title fs-6 fw-bolder" style="margin-bottom: 0px !important;padding-bottom:0px !important;">Abdallah Wael</div>
                        <span class="fw-light" style="color:darkorchid">Web Designer</span>
                        <p class="mt-2">Meet the person behind the pixels. he's here to turn your web dreams into reality!</p>
                        <a href="https://www.facebook.com/abdallah.albasha.127" style="text-decoration: none;" target="_blank">
                            <i class="bi bi-facebook fs-4 text-primary"></i>
                        </a>
                        <a href="https://github.com/AboObaida22" style="text-decoration: none;" target="_blank">
                            <i class="bi bi-github fs-4 text-dark ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="img-fluid" style="aspect-ratio: 4/3;object-fit:cover;" src="{{asset('assets/images/samir_img.jpeg')}}">
                    <div class="card-body m-auto text-center">
                        <div class="card-title fs-6 fw-bolder" style="margin-bottom: 0px !important;padding-bottom:0px !important;">Omar Samir</div>
                        <span class="fw-light" style="color:darkorchid">Back-End Developer</span>
                        <p class="mt-2">Behind the scenes magician, crafting digital marvels. Where innovation meets precision!</p>
                        <a href="https://www.facebook.com/ahlawy.ana.71653" style="text-decoration: none;" target="_blank">
                            <i class="bi bi-facebook fs-4 text-primary"></i>
                        </a>
                        <a href="https://github.com/omarsamir22" style="text-decoration: none;" target="_blank">
                            <i class="bi bi-github fs-4 text-dark ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="img-fluid" style="aspect-ratio: 4/3;object-fit:cover;" src="{{asset('assets/images/micheal_img.jpg')}}">
                    <div class="card-body m-auto text-center">
                        <div class="card-title fs-6 fw-bolder" style="margin-bottom: 0px !important;padding-bottom:0px !important;">Micheal Moris</div>
                        <span class="fw-light" style="color:darkorchid">Full-Stack Developer</span>
                        <p class="mt-2">From pixels to databases, I build the bridges that bring digital dreams to life as a full-stack developer!</p>
                        <a href="https://www.linkedin.com/in/michealmoris1/" style="text-decoration: none;" target="_blank">
                            <i class="bi bi-linkedin fs-4 text-primary"></i>
                        </a>
                        <a href="https://github.com/MichealMoris" style="text-decoration: none;" target="_blank">
                            <i class="bi bi-github fs-4 text-dark ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
