@extends('layouts.master-without-nav')

@section('title')
    التسجيل
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .none {
            font-weight: bold;
        }

        .select2 span span {
            background-color: #242323;
            border-color: #242323 !important
        }

        .select2 span span span {
            background-color: #242323;
            border-color: #242323 !important;
            color: #f4f4f4 !important;
            text-align: right !important;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text">
                                        <a href="{{ route('root') }}" class="d-block auth-logo">
                                            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="35"
                                                class="auth-logo-dark">
                                        </a>
                                    </div>
                                    <div class="my-auto">

                                        <div>
                                            <h5 class="text colors">حساب جديد</h5>
                                            <p class="text-muted text">احصل على حساب جدوى كلاود المجاني الان</p>
                                        </div>

                                        <div class="mt-4">
                                            @if (session('status'))
                                                <div class="alert alert-success text-center mb-4" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif
                                            <form method="POST" class="form-horizontal" action="{{ route('register') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <label for="username" class="form-label colors fon margin_top_10">البريد
                                                    الإلكتروني</label>
                                                <div class="input-group auth-pass-inputgroup ">
                                                    <input name="email" type="email"
                                                        class="form-control auth_input @error('email') is-invalid @enderror"
                                                        value="{{ old('email') }}" id="username"
                                                        placeholder="jadwa@portal.com" autocomplete="email" autofocus>
                                                    <button class="btn btn-light auth_icon " type="button"><i
                                                            class="mdi mdi-email"></i></button>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                {{-- <div class="input-group auth-pass-inputgroup ">
                                                    <label for="phone" class="form-label colors fon margin_top_10">رقم
                                                        الجوال</label>
                                                    <input style="width: 150px" name="phone" type="tel" placeholder="ادخل رقم الجوال"
                                                        class="form-control auth_input @error('phone') is-invalid @enderror"
                                                        value="{{ old('phone') }}" id="phone" autocomplete="phone"
                                                        autofocus>
                                                    <select>
                                                        <option>sss</option>
                                                    </select>
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}

                                                <div class="input-group auth-pass-inputgroup ">
                                                    <label class="form-label colors fon margin_top_10">رقم الجوال</label>
                                                    <div
                                                        class="input-group auth-pass-inputgroup @error('phone') is-invalid @enderror">
                                                        <input type="number" name="phone"
                                                            class="form-control auth_input @error('phone') is-invalid @enderror"
                                                            id="phone" placeholder="ادخل رقم الجوال" aria-label="phone"
                                                            aria-describedby="phone-addon">
                                                        <select id="phonecode" name="phonecode"
                                                            class="form-control  phonecode auth_input select2"
                                                            style="width: 85px; background-color: #242323 !important; }
                                                            ">
                                                            @foreach (DB::select('select * from  countries ') as $item)
                                                                <option value="{{ $item->phonecode }}">
                                                                    {{ $item->phonecode }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="input-group auth-pass-inputgroup ">
                                                    <label class="form-label colors fon margin_top_10">كلمة المرور</label>
                                                    <div
                                                        class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                        <input type="password" name="password"
                                                            class="form-control auth_input @error('password') is-invalid @enderror"
                                                            id="password" placeholder="ادخل كلمة المرور"
                                                            aria-label="Password" aria-describedby="password-addon">
                                                        <button class="btn btn-light auth_icon" style="z-index: auto;"
                                                            id="show" type="button" id="password-addon"><i
                                                                class="mdi mdi-eye-outline"></i></button>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 margin_top_10">
                                                    <label for="confirmpassword" class="form-label colors fon">تاكيد كلمة
                                                        المرور </label>
                                                    <input type="password"
                                                        class="form-control auth_input @error('password_confirmation') is-invalid @enderror"
                                                        id="confirmpassword" name="password_confirmation"
                                                        placeholder="تاكيد كلمة المرور" autofocus required>
                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mt-3 text-center yell">
                                                    <p>بالنقر على التسجيل أنت توافق على <strong>سياسة الخصوصية</strong>
                                                        الخاصة بالموقع</p>
                                                </div>

                                                <div class="mt-4 d-grid">
                                                    <button
                                                        class="btn btn-primary waves-effect waves-light log auth_shadow auth_button"
                                                        type="submit">حساب جديد </button>
                                                </div>

                                                {{-- <div class="mt-4 text-center">
                                                    <h5 class="font-size-14 mb-3">Sign up using</h5>

                                                </div> --}}

                                                {{-- <div class="mt-4 text-center">
                                                    <p class="mb-0">By registering you agree to the Skote <a href="#"
                                                            class="text-primary">Terms of Use</a></p>
                                                </div> --}}
                                            </form>


                                            <div class="mt-3 text-center yell">
                                                <p>ليس لديك حساب ؟ <a href="{{ url('login') }}" class="fw-medium  yell">
                                                        <strong>تسجيل دخول</strong></a> </p>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- <div class="mt-4 mt-md-3 text-center">
                                        <p class="mb-0">© <script>
                                                document.write(new Date().getFullYear())

                                            </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                            Themesbrand</p>
                                    </div> --}}
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">
                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel"
                                                            id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-18 mb-4 none">جدوى في
                                                                        التعديل</p>
                                                                    <div>
                                                                        <h4 class="font-size-16">عدل ما تريد في أي وفت خلال
                                                                            فترة التعديل المسموحة وذلك خلال دقائق</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-18 mb-4 none">جدوى في
                                                                        السعر</p>
                                                                    <div>
                                                                        <h4 class="font-size-16">سيقوم النظام بمساعدتك
                                                                            وسيقوم بالتحليل المالي وتجهيز الدراسة</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-18 mb-4 none">سهل وبسيط</p>
                                                                    <div>
                                                                        <h4 class="font-size-16">جدوى كلاود تقدم خدماتها
                                                                            بدقة عالية وسعر تنافسي يتيح لك تحقيق أهدافك
                                                                            وبأقل
                                                                            أسعار</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-18 mb-4">جدوى كلاود تقدم خدماتها
                                                                        بدقة عالية وسعر تنافسي يتيح لك تحقيق أهدافك وبأقل
                                                                        أسعار</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
    @endsection
    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
            integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            $(document).ready(function() {
                $('.phonecode').select2();
            })

            $('#show').click(function name(params) {
                if ($('#password').prop('type') == 'password') {
                    $('#password').attr('type', 'text')
                } else {
                    $('#password').attr('type', 'password')
                }
            })
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
        {{-- <script>
            const phoneInputField = document.querySelector("#phone");
            const phoneInput = window.intlTelInput(phoneInputField, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
        </script> --}}
        <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
    @endsection
