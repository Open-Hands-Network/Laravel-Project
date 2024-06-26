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
                    <div class="text p-2" style="border-radius: 5px;">
                        <span style="font-weight:600">{{$user["first_name"]." ".$user["last_name"]}}</span><br>
                        <div style="color:grey">{{$user["job"]}}</div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3 me-3">Chat<i class="fa-regular fa-comment-dots ms-2"></i></button>
            </div>
        </div>

        <div class="card w-75 m-auto mt-5">
            <div class="d-flex card-header justify-content-between">
                <div class="d-flex profile-section justify-content-between align-items-center">
                    <div  class="me-2">
                        <img  class="img-fluid rounded-circle" style="width:40px;height:40px" src="{{asset("assets/images/Avatar.png")}}" alt="">
                    </div>
                    <div class="text">
                        <span style="font-weight:600">Firoz</span> is in <span style="font-weight:600">57357</span><br>
                        <div style="color:grey">Mar 25,2022</div>
                    </div>
                </div>



                <button class="fa-solid fa-ellipsis-vertical" style="border:none;background:none;padding:5px;font-size:24px"></button>
            </div>
            <div class="card-body">
                <div class="w-100
                @if (preg_match("/^[\x{0600}-\x{06FF}\x{0750}-\x{077f}]+/u","تجربه جديده و ممتعه في المشاركه في فعاليات عيد الام") )
                    text-end
                @else
                    text-start
                @endif
                mb-4">
                    تجربه جديده و ممتعه في المشاركه في فعاليات عيد الام
                </div>
                <div class="m-auto d-flex justify-content-center">
                    <img class="img-fluid" src="{{asset("assets/images/post1.png")}}">
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">

                <div class="d-flex">
                    <div class="d-flex pe-4">
                        <a class="p-0 pe-lg-2" href="#" style="text-decoration: none;font-size:24px;color:var(--blue-6)"><i class="fa-regular fa-thumbs-up"></i></a>
                        <div style="color:var(--blue-6);font-size:24px">17</div>
                    </div>
                    <div class="d-flex">
                        <button class="p-0 pe-lg-2" data-bs-toggle="modal" data-bs-target="#modal1" href="#" style="border: none;background:none;font-size:24px;color:var(--blue-6)"><i class="fa-regular fa-comments"></i></button>
                        <div style="color:var(--blue-6);font-size:24px">3</div>
                    </div>
                </div>
                <div class="modal" tabindex="-1" id="modal1">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-between">
                                <div style="font-weight:600">3 Comments</div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                @for ($i = 0 ; $i < 3 ; $i++)

                                <div class="d-flex mb-3">
                                    <div style="width:40px;" class="me-2">
                                        <img  class="img-fluid rounded-circle" src="{{asset("assets/images/Avatar.png")}}" alt="">
                                    </div>
                                    <div style="background-color:var(--blue-1);border-radius:4px;padding:5px">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi beatae rem hic quos accusantium voluptatem!
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <div class="modal-footer d-flex justify-content-evenly">
                                <input class="form-control" style="width:80%" type="text" name="comment" id="comment" placeholder="Add a comment...">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <a class="p-0 pe-lg-2" href="#" style="text-decoration: none;font-size:24px;color:var(--blue-6)"><i class="fa-solid fa-share-nodes"></i></a>
                        <div style="color:var(--blue-6);font-size:24px">17</div>
                </div>
            </div>
        </div>
        <div class="card w-75 m-auto mt-5">
            <div class="d-flex card-header justify-content-between">
                <div class="d-flex profile-section justify-content-between align-items-center">
                    <div class="me-2">
                        <img class="rounded-circle" style="width:40px;height:40px;" src="{{asset("assets/images/Avatar.png")}}" alt="">
                    </div>
                    <div class="text">
                        <span style="font-weight:600">Firoz</span> is in <span style="font-weight:600">جمعيه رساله</span><br>
                        <div style="color:grey">Mar 25,2022</div>
                    </div>
                </div>
                <button class="fa-solid fa-ellipsis-vertical" style="border:none;background:none;padding:5px;font-size:24px"></button>
            </div>
            <div class="card-body">
                <div class="w-100
                @if (preg_match("/^[\x{0600}-\x{06FF}\x{0750}-\x{077f}]+/u","يوم جميل فيه اتعلمت معني العطاء") )
                    text-end
                @else
                    text-start
                @endif
                mb-4">
                    يوم جميل فيه اتعلمت معني العطاء
                </div>
                <div class="m-auto d-flex justify-content-center">
                    <img class="img-fluid" src="{{asset("assets/images/post2.png")}}">
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">

                <div class="d-flex">
                    <div class="d-flex pe-4">
                        <a class="p-0 pe-lg-2" href="#" style="text-decoration: none;font-size:24px;color:var(--blue-6)"><i class="fa-regular fa-thumbs-up"></i></a>
                        <div style="color:var(--blue-6);font-size:24px">17</div>
                    </div>
                    <div class="d-flex">
                        <button class="p-0 pe-lg-2" data-bs-toggle="modal" data-bs-target="#modal2" href="#" style="border: none;background:none;font-size:24px;color:var(--blue-6)"><i class="fa-regular fa-comments"></i></button>
                        <div style="color:var(--blue-6);font-size:24px">5</div>
                    </div>
                </div>
                <div class="modal" tabindex="-1" id="modal2">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-between">
                                <div style="font-weight:600">5 Comments</div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                @for ($i = 0 ; $i < 5 ; $i++)

                                <div class="d-flex mb-3">
                                    <div style="width:40px;" class="me-2">
                                        <img  class="img-fluid rounded-circle" src="{{asset("assets/images/Avatar.png")}}" alt="">
                                    </div>
                                    <div style="background-color:var(--blue-1);border-radius:4px;padding:5px">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi beatae rem hic quos accusantium voluptatem!
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <div class="modal-footer d-flex justify-content-evenly">
                                <input class="form-control" style="width:80%" type="text" name="comment" id="comment" placeholder="Add a comment...">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <a class="p-0 pe-lg-2" href="#" style="text-decoration: none;font-size:24px;color:var(--blue-6)"><i class="fa-solid fa-share-nodes"></i></a>
                        <div style="color:var(--blue-6);font-size:24px">17</div>
                </div>
            </div>
        </div>
        <div class="card w-75 m-auto mt-5">
            <div class="d-flex card-header justify-content-between">
                <div class="d-flex profile-section justify-content-between align-items-center">
                    <div class="me-2">
                        <img class="rounded-circle" style="width:40px;height:40px;" src="{{asset("assets/images/Avatar.png")}}" alt="">
                    </div>
                    <div class="text">
                        <span style="font-weight:600">Firoz</span> is in <span style="font-weight:600">مستشفي الاورمان</span><br>
                        <div style="color:grey">Mar 25,2022</div>
                    </div>
                </div>
                <button class="fa-solid fa-ellipsis-vertical" style="border:none;background:none;padding:5px;font-size:24px"></button>
            </div>
            <div class="card-body">
                <div class="w-100
                @if (preg_match("/^[\x{0600}-\x{06FF}\x{0750}-\x{077f}]+/u","مستشفي شفاء الاورمان محتاجه لتبرعاتكم") )
                    text-end
                @else
                    text-start
                @endif
                mb-4">
                    مستشفي شفاء الاورمان محتاجه لتبرعاتكم
                </div>
                <div class="m-auto d-flex justify-content-center">
                    <img class="img-fluid" src="{{asset("assets/images/post3.png")}}">
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">

                <div class="d-flex">
                    <div class="d-flex pe-4">
                        <a class="p-0 pe-lg-2" href="#" style="text-decoration: none;font-size:24px;color:var(--blue-6)"><i class="fa-regular fa-thumbs-up"></i></a>
                        <div style="color:var(--blue-6);font-size:24px">17</div>
                    </div>
                    <div class="d-flex">
                        <button class="p-0 pe-lg-2" data-bs-toggle="modal" data-bs-target="#modal3" href="#" style="border: none;background:none;font-size:24px;color:var(--blue-6)"><i class="fa-regular fa-comments"></i></button>
                        <div style="color:var(--blue-6);font-size:24px">2</div>
                    </div>
                </div>
                <div class="modal" tabindex="-1" id="modal3">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-between">
                                <div style="font-weight:600">2 Comments</div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                @for ($i = 0 ; $i < 2 ; $i++)

                                <div class="d-flex mb-3">
                                    <div style="width:40px;" class="me-2">
                                        <img  class="img-fluid rounded-circle" src="{{asset("assets/images/Avatar.png")}}" alt="">
                                    </div>
                                    <div style="background-color:var(--blue-1);border-radius:4px;padding:5px">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi beatae rem hic quos accusantium voluptatem!
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <div class="modal-footer d-flex justify-content-evenly">
                                <input class="form-control" style="width:80%" type="text" name="comment" id="comment" placeholder="Add a comment...">
                                <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <a class="p-0 pe-lg-2" href="#" style="text-decoration: none;font-size:24px;color:var(--blue-6)"><i class="fa-solid fa-share-nodes"></i></a>
                        <div style="color:var(--blue-6);font-size:24px">17</div>
                </div>
            </div>
        </div>

    </div>

@endsection
