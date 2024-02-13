<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div style="display: flex;justify-content:center;align-items:center;height:100vh;">
        <div class="container p-5 bg-light" style="border-radius: 10px">
            <!--Navbar-->
            <div class="row align-items-center justify-content-center bg-white p-3" style="border: 1px solid var(--blue-1);border-radius:10px;">
                <div class="col-1 w-auto">
                    <img src="{{asset('assets/icons/back_arrow_icon.png')}}" alt="" class="img-fluid w-50">
                </div>
                <div class="col-8">
                    <div class="d-flex">
                        <div class="profile-img-chat-nav" style="width: fit-content; position:relative;">
                            <img src="{{asset('assets/images/obaida_img.jpeg')}}" class="img-fluid" style="border-radius: 50%; width: 40px; height: 40px;">
                            <span style="width: 12px;height:12px;background:greenyellow;position: absolute;border-radius:50%;bottom:0;right:0;border: 1px solid white;"></span>
                        </div>
                        <div class="profile-name-active-chat ms-2">
                            <h6 style="margin-bottom: 0">Abdallah Wael</h6>
                            <span style="color: grey">Active Now</span>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <i class="bi bi-telephone fs-4" style="color:var(--blue-6)"></i>
                    <i class="bi bi-camera-video fs-4 ms-3" style="color:var(--blue-6)"></i>
                </div>
            </div>
            <!--Chat-->
            <!--Sender Message Form-->
            <div class="row mt-3">
                <div class="col-2 w-auto">
                    <div class="profile-img-chat-conv" style="width: fit-content; position:relative;">
                        <img src="{{asset('assets/images/obaida_img.jpeg')}}" class="img-fluid" style="border-radius: 50%; width: 50px; height: 50px;">
                        <span style="width: 12px;height:12px;background:greenyellow;position: absolute;border-radius:50%;bottom:0;right:0;border: 1px solid white;"></span>
                    </div>
                </div>
                <div class="col-10">
                    <div style="background: rgba(76, 127, 190, 0.5);padding:10px;border-radius: 0 10px 10px 10px;margin-bottom:5px;width:fit-content;">
                        <p>انا نازل تطوع مع الهلال الاحمر علشان عربيات الاغاثة في غزة ومحتاجين ٣٠ متطوع ضروري من مختلف الاعمار والعربيات هتتحرك الساعة ٧ الصبح ومكان التطوع هتعرفه لما تسجل في الفورم علي صفحتهم</p>
                    </div>
                    <div style="background: rgba(76, 127, 190, 0.5);padding:10px;border-radius: 0 10px 10px 10px;margin-bottom:5px;width:fit-content;">
                        <p>هتلاقي الفورم هنا علي الموقع</p>
                    </div>
                </div>
            </div>
            <!--Reciever Message Form-->
            <div class="row mt-3 justify-content-end">
                <div class="col-10">
                    <div style="background: lightgrey;padding:10px;border-radius: 10px 0px 10px 10px;margin-bottom:5px;width:fit-content;margin-left: auto;">
                        <p>!تمام انا محتاج التطوع ده, فهسجل دلوقتي</p>
                    </div>
                    <div style="background: lightgrey;padding:10px;border-radius: 10px 0px 10px 10px;margin-bottom:5px;width:fit-content;margin-left: auto;">
                        <p>شكرأ جداً, أشوفك يوم الجمعة</p>
                    </div>
                    <div style="background: lightgrey;padding:10px;border-radius: 10px 0px 10px 10px;margin-bottom:5px;width:fit-content;margin-left: auto;">
                        <p>😀</p>
                    </div>
                </div>
                <div class="col-2 w-auto">
                    <div class="profile-img-chat-conv" style="width: fit-content; position:relative;">
                        <img src="{{asset('assets/images/micheal_img.jpg')}}" class="img-fluid" style="border-radius: 50%; width: 50px; height: 50px;">
                        <span style="width: 12px;height:12px;background:greenyellow;position: absolute;border-radius:50%;bottom:0;right:0;border: 1px solid white;"></span>
                    </div>
                </div>
            </div>
            <!--Message Input-->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white" style="border-right: 0;">
                            <i class="bi bi-paperclip fs-4" style="color: var(--blue-6)"></i>
                        </span>
                        <input type="text" class="form-control p-3" style="border-right: 0;border-left: 0;" placeholder="Message...">
                        <span class="input-group-text bg-white" style="border-left: 0;">
                            <i class="bi bi-send fs-4" style="color: var(--blue-6);transform: rotate(45deg);"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>