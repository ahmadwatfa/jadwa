@extends('layouts.master')

@section('title')
    {{ 'إنشاء مستخدم' }}
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            المستخدمين
        @endslot
        @slot('title')
            إنشاء مستخدم
        @endslot
    @endcomponent
@section('css')
    <!-- owl.carousel css -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/owl.carousel.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .select2 span {
            height: 36px !important;
            background-color: #f4f4f480 !important;
            border-color: #ced4da !important;
        }

        .select2 span span span {
            text-align: right !important
        }

        #phone {
            width: 75%;
        }

        .iti--allow-dropdown input,
        .iti--allow-dropdown input[type=text],
        .iti--allow-dropdown input[type=tel],
        .iti--separate-dial-code input,
        .iti--separate-dial-code input[type=text],
        .iti--separate-dial-code input[type=tel] {
            padding-right: 50px;
        }

        .iti--allow-dropdown .iti__flag-container,
        .iti--separate-dial-code .iti__flag-container {
            right: 0px;
            left: 0px;
        }

        .form-select {
            background-color: #f4f4f480 !important;
            border: 1px solid #ced4da;
        }
    </style>
@endsection
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">قم بإدخال بيانات المستخدم</h4>

                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">الإسم</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    id="formrow-firstname-input" placeholder="قم بإدخال الاسم">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formrow-email-input" class="form-label">البريد الإلكتروني</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" id="formrow-email-input"
                                    placeholder="jadwacloud@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="gridCheck">رقم الجوال </label>
                                <div class="input-group auth-pass-inputgroup @error('phone') is-invalid @enderror">
                                    <input type="number" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror" id="phone"
                                        placeholder="ادخل رقم الجوال" aria-label="phone">
                                    <select id="phonecode" name="phonecode" class="form-control phonecode">
                                        @foreach (DB::select('select * from  countries ') as $item)
                                            <option value="{{ $item->phonecode }}">{{ $item->phonecode }}</option>
                                        @endforeach
                                    </select>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="gridCheck">الجنس </label>
                                <select id="gender" class="form-select @error('gender')  is-invalid @enderror"
                                    name="gender">
                                    <option selected disabled hidden>الجنس</option>
                                    <option value="male">ذكر</option>
                                    <option value="female">أنثى</option>
                                </select>
                            </div>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="type" class="form-label">نوع المستخدم</label>
                                <!-- All countries -->
                                <select id="type" class="form-select @error('type')  is-invalid @enderror"
                                    name="type">
                                    <option selected disabled hidden> نوع المستخدم</option>
                                    <option value="admin">مشرف</option>
                                    <option value="client">مستخدم</option>
                                </select>
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="country" class="form-label">الدولة</label>
                                <!-- All countries -->
                                <select id="country" name="country" class="form-control country">
                                    <option selected disabled value="0">اختر الدولة</option>
                                    @foreach (DB::select('select * from  countries ') as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>


                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="city" class="form-label">المدينة</label>
                                <select id="city" class="form-select city @error('city')  is-invalid @enderror"
                                    name="city">

                                </select>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="text-center">
                        <button type="submit" style="float: left;" class="btn btn-success w-lg yello">حفظ</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

{{-- <script>
         const phoneInputField = document.querySelector("#phone");
         const phoneInput = window.intlTelInput(phoneInputField, {
             utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
         });
     </script> --}}
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
    $(document).ready(function() {
        $('.phonecode').select2();
        $('.country').select2();
        $('.city').select2();
        $('#country').on('change', function() {
            var countryId = $(this).val();
            if (countryId) {
                $.ajax({
                    url: "{{ route('fetch_cities') }}",
                    type: "post",
                    data: {
                        'id': countryId,
                        '_token': '{{ csrf_token() }}',
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log(data.cities);
                        $('select[name="city"]').empty();
                        $.each(data.cities, function(key, value) {
                            console.log(value);
                            $('select[name="city"]').append('<option value="' +
                                value.id + '">' + value.name + '</option>');
                        });
                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>
@endsection
