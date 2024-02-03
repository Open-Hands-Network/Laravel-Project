@extends('layout.layout')

@section('content')
    <div class="container mt-3">
        <div class="row d-flex justify-content-between">
            <div class="col-md-3 col-sm-12 bg-light organization-filter p-3">
                <h6>Choose what's right for you</h6>
                <select class="form-select mb-3" id = "donation_volunteer_select">
                    <option selected>اختار بين التبرع/التطوع</option>
                    <option value="donation">تبرع</option>
                    <option value="volunteer">تطوع</option>
                </select>
                <select class="form-select mb-3" id = "donation-select" style="display: none;">
                    <option selected>اختار نوع التبرع</option>
                    <option value="1">التبرع النقدي</option>
                    <option value="2">التبرع بالوقت و المجهود</option>
                    <option value="3">التبرع بالطعام</option>
                    <option value="3">التبرع بالموارد - التبرع بالوقت والجهد</option>
                    <option value="3">التبرع بالدم</option>
                </select>
                <select class="form-select mb-3" id = "volunteer-select" style="display: none;">
                    <option selected>اختار نوع التطوع</option>
                    <option value="1">التطوع الدائم</option>
                    <option value="2">التطوع المؤقت</option>
                </select>
            </div>
            <div class="col-md-8 col-sm-12 bg-light organizations-container p-3">
                <div class="organization-card mb-3">
                    <div class="row p-3">
                        <div class="col-3">
                            <img src="https://d1b3667xvzs6rz.cloudfront.net/2018/09/2-jpg.jpg" class="organization-img">
                        </div>
                        <div class="col-9">
                            <div class="">
                                <h5 class="col d-inline">مستشفى 57357</h5>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                </svg><br>
                                <sub class="text-secondary">الصحة</sub>
                            </div>
                            <p>أحد أكبر مستشفيات الاطفال في العالم يقع في القاهرة في مصر ويختص في علاج سرطانات الأطفال
                                ويتميز هذا المستشفي بكونه بني عن طريق التبرعات مع حملة دعائية كبيرة صاحبت بنائه</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg>19057</p>
                        </div>
                    </div>
                </div>
                <div class="organization-card mb-3">
                    <div class="row p-3">
                        <div class="col-3">
                            <img src="https://d2tm09s6lgn3z4.cloudfront.net/2021/03/1615458772_786_107958_logoforprs2.jpg" class="organization-img">
                        </div>
                        <div class="col-9">
                            <div class="">
                                <h5 class="col d-inline">مؤسسة مصر الخير</h5>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                                </svg><br>
                                <sub class="text-secondary">تنمية حياة الانسان - التكافل الاجتماعي - الصحة - الغارمين - التنمية المتكاملة - البحث العلمي والابتكار - التعليم</sub>
                            </div>
                            <p>مؤسسة مصر الخير هي مؤسسة تنموية غير هادفة للربح تعمل في ستة مجالات لتنمية الانسان; الصحة، التعليم، البحث العلمي، التكافل الاجتماعي، مناحي الحياة ومجال التنمية المتكاملة على أمل القضاء على البطالة، والامية، والفقر، والمرض</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg>16140</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>

@endsection

@section('title', 'index')
