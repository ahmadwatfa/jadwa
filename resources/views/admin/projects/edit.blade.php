@extends('layouts.master')

@section('title')
    {{ ' تعديل مشروع' }}
@endsection

@section('css')
    <!-- bootstrap datepicker -->
    <link href="{{ asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">

    <!-- dropzone css -->
    <link href="{{ asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            مشاريع
        @endslot
        @slot('title')
            تعديلات مشروع > {{ $project->name }}
        @endslot
    @endcomponent
    <style>
        input[type="file"]{
            display: none;
        }
       
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="basic-example">
                        <!-- Seller Details -->
                        <h3> تفاصيل المشروع</h3>
                        <section>
                            <form id="form1" class="form1">
                                @csrf
                                <input type="hidden" name="id" value="{{ $project->id }}" id="id">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"> اسم المشروع</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name', $project->name) }}" id="name"
                                                placeholder="قم بإدخال الاسم">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="idea" class="form-label">الفكرة/الوصف</label>
                                            <textarea id="elm1" style="height: 250px; !important" name="idea"
                                                class="form-control @error('idea') is-invalid @enderror">{{ old('idea', $project->idea) }}</textarea>

                                            @error('idea')
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
                                            <label for="country" class="form-label">الدولة </label>
                                            <input type="text" name="country"
                                                class="form-control @error('country')"  is-invalid @enderror
                                                id="country"
                                                value="{{ old('country', $project->country) }}" placeholder="الدولة ">
                                            @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="city" class="form-label">المدينة </label>
                                            <input type="text" name="city"
                                                class="form-control @error('city')"  is-invalid @enderror
                                                id="formrow-city-input"
                                                value="{{ old('city', $project->city) }}" placeholder="المدينة ">
                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3 dropzone">
                                        <div class="dz-message needsclick">
                                            <label for="formrow-logo-input" class="form-label "> 
                                             <i class="display-4 text-muted bx bxs-cloud-upload"></i><h4>تحميل الشعار</h4></label>
                                            <div class="fallback">
                                                <input type="file" class="form-control @error('logo') is-invalid @enderror dz-message needsclick"
                                                name="logo" id="formrow-logo-input" value="{{ old('logo') }}"
                                                placeholder="الشعار" onchange="loadFile(event)">
                                            </div>
                                            @if ($project->logo)
                                                <img src="{{ url('public/logo/' . $project->logo) }}" width="60px" id="output">
                 
                                            @endif
                                          

                                            @error('logo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left">
                                        {{--  <input name="save" type="submit" class="btn btn-warning inner save"
                                            id="save" value="التالي"> --}}
                                        <input type="submit" value="التالي" name="go" class="btn btn-warning inner go"
                                            id="go">

                                    </div>
                                </div>
                            </form>
                        </section>

                        <!-- Company Document -->
                        <h3>اعدادات المشروع</h3>
                        <section>
                            <form id="form2" class="form2">
                                @csrf
                                <input type="hidden" name="id" value="{{ $project->id }}" id="id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="project_type_id" class="form-label">نوع المشروع</label>
                                            <!-- All countries -->
                                            <select id="project_type_id" class="form-select" name="project_type_id"
                                                required>
                                                <option selected disabled hidden>-- نوع المشروع --</option>
                                                @foreach ($projectType as $item)
                                                    <option @if ($item->id == $project->project_type_id) selected @endif
                                                        value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="study_duration" class="form-label">مدة الدراسة</label>
                                            <!-- All countries -->
                                            <select id="study_duration" class="form-select" name="study_duration">
                                                <option selected hidden value="{{ $project->study_duration }}">
                                                    {{ $project->study_duration == '5' ? '5' : '10' }}</option>
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="language" class="form-label">لغة المشروع</label>
                                            <select id="language" class="form-select" name="language">
                                                <option selected hidden value="{{ $project->language }}">
                                                    {{ $project->language == 'ar' ? '>اللغة العربية' : 'اللغة الانجليزية' }}
                                                </option>
                                                <option value="ar">اللغة العربية</option>
                                                <option value="en">اللغة الانجليزية</option>
                                            </select>
                                            @error('currency')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="currency" class="form-label">عملة المشروع</label>
                                            <select id="currency" class="form-select" name="currency">
                                                <option selected hidden value="{{ $project->currency }}">
                                                    {{ $project->currency == 'dollar' ? 'دولار امريكي' : 'ريال سعودي' }}
                                                </option>
                                                <option value="dollar"> دولار امريكي</option>
                                                <option value="ksa"> ريال سعودي</option>
                                            </select>
                                            @error('currency')
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
                                            <label for="start_date" class="form-label">تاريخ البداية </label>
                                            <input type="date"
                                                class="form-control @error('start_date') is-invalid @enderror"
                                                id="start_date" name="start_date"
                                                value="{{ old('start_date', $project->start_date) }}" required>
                                            @error('start_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="development_duration" class="form-label">فترة التأسيس</label>
                                            <input type="number" name="development_duration" class="form-control"
                                                placeholder="فترة التأسيس" id="development_duration"
                                                value="{{ old('development_duration', $project->development_duration) }}"
                                                required>
                                            @error('development_duration')
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
                                            <label for="vat" class="form-label">الضريبة </label>
                                            <input type="number" name="vat" required
                                                class="form-control @error('vat')" is-invalid @enderror
                                                id="formrow-vat-input"
                                                value="{{ old('vat', $project->vat) }}" placeholder="الضريبة">
                                            @error('vat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="number_days_year" class="form-label">عدد ايام السنة
                                            </label>
                                            <input type="number" name="number_days_year" class="form-control"
                                                id="number_days_year"
                                                value="{{ old('number_days_year', $project->number_days_year) }}">
                                            @error('number_days_year')
                                                <span class="invalid-feedback" role="alert" placeholder="عدد أيام السنة">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left ">
                                        {{-- <button name="save1" onclick="return form1()" type="button" class="btn btn-warning inner"
                                            id="save1">حفظ والتالي</button>  --}}
                                        <input type="submit" value="حفظ والتالي" name="go"
                                            class="btn btn-warning inner go" id="go">
                                    </div>
                                </div>
                            </form>
                        </section>
                      

                    </div>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    {{-- <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">تعديل المشروع </h4>

                    <form action="{{ route('projects.update', $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label">اسم المشروع</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $project->name }}" id="name" placeholder="قم بإدخال الاسم">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="formrow-logo-input" class="form-label"> صورة الشعار </label>
                                    <input type="file" class="form-control @error('logo') is-invalid @enderror"
                                        name="logo" id="formrow-logo-input" value="{{ old('logo') }}">
                                    @if ($project->logo)
                                        <img src="{{ url('public/logo/' . $project->logo) }}" width="60px">
                                    @endif
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="project_type_id" class="form-label">نوع المشروع</label>

                                    <select id="project_type_id" class="form-select" name="project_type_id">

                                        @foreach ($projectType as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $project->project_type_id ? 'selected' : '' }}>
                                                {{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="study_duration" class="form-label">مدة الدراسة</label>
                                    <!-- All countries -->
                                    <select id="study_duration" class="form-select" name="study_duration">
                                        <option selected value="{{ $project->study_duration }}">
                                            {{ $project->study_duration == '5' ? '5' : '10' }}</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="country" class="form-label">الدولة </label>
                                    <input type="text" name="country"
                                        class="form-control @error('country') is-invalid @enderror"
                                        value="{{ $project->country }}" id="country" placeholder="قم بإدخال  ">
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="city" class="form-label">المدينة </label>
                                    <input type="text" name="city"
                                        class="form-control @error('city') is-invalid @enderror"
                                        value="{{ $project->city }}" id="formrow-city-input" placeholder="قم بإدخال  ">
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="development_duration" class="form-label">فترة التطوير</label>
                                    <input type="number" name="development_duration" class="form-control"
                                        id="development_duration" value="{{ $project->development_duration }}">
                                    @error('development_duration')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">تاريخ البداية </label>
                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                        id="start_date" name="start_date" value="{{ $project->start_date }}" required>
                                    @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="number_days_year" class="form-label">ايام السنة المتبقية</label>
                                    <input type="number" name="number_days_year" class="form-control"
                                        id="number_days_year" value="{{ $project->number_days_year }}">
                                    @error('number_days_year')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="vat" class="form-label">الضريبة </label>
                                    <input type="number" name="vat"
                                        class="form-control @error('vat') is-invalid @enderror"
                                        value="{{ $project->vat }}" id="formrow-vat-input" placeholder="قم بإدخال  ">
                                    @error('vat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="currency" class="form-label">العملة</label>
                                    <input type="text" name="currency"
                                        class="form-control @error('currency') is-invalid @enderror"
                                        value="{{ $project->currency }}" id="currency" placeholder="قم بإدخال ">
                                    @error('currency')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="owner_id" class="form-label">صاحب المشروع</label>
                                    <!-- All countries -->
                                    <select id="owner_id" class="form-select" name="owner_id">
                                        <option selected disabled hidden>-- إختر --</option>
                                        @foreach ($user as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $project->owner_id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>



                        <div class="row">



                            <div class="col-lg-12">

                                <div class="mb-3">
                                    <label for="idea" class="form-label">idea </label>
                                    <textarea id="elm1" name="idea" class="form-control @error('idea') is-invalid @enderror">{{ $project->idea }}</textarea>
                                    @error('idea')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" value="submit" class="btn btn-success w-lg orange">حفظ</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div> --}}
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
@endsection
@section('script')

  <!-- bootstrap datepicker -->
  <script src="{{ asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- dropzone plugin -->
    <script src="{{ asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <!--tinymce js-->
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <!-- init js -->
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
    <script>

var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

  
        $(document).ready(function() {

            $('#basic-example-t-0').parent().attr('class', 'current');
            $('#form1').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('update_project') }}",
                    method: 'post',
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            $.each(data.error, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            $('#basic-example-p-0').attr('style', 'display:none');
                            $('#basic-example-p-1').removeAttr('style');
                            $('#basic-example-t-0').parent().removeClass('current');
                            $('#basic-example-t-1').parent().addClass('current');

                        }
                    }
                });
            });


            $('#form2').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('update_project_details') }}",
                    method: 'post',
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            $.each(data.error, function(prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                            });
                        } else {
                            window.location.href= "{{ route('projects.index') }}";


                        }
                    }
                });
            });
       
        });
    </script>
@endsection
