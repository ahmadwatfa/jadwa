@extends('layouts.master')

@section('title')
    {{ 'إنشاء مستخدم' }}
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
            إنشاء مشروع
        @endslot
    @endcomponent
    <style>
        input[type="file"]{
            display:none;
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
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"> اسم المشروع</label>
                                            <input type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}" id="name" placeholder="  اسم المشروع">
                                                <span class="text-danger error-text name_error"></span>
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
                                                class="form-control @error('idea') is-invalid @enderror">{{ old('idea') }}</textarea>
                                                <span class="text-danger error-text idea_error"></span>
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
                                                class="form-control @error('country')" value="{{ old('country') }}" is-invalid @enderror
                                                id="country"
                                                placeholder="الدولة ">
                                                <span class="text-danger error-text country_error"></span>
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
                                                class="form-control @error('city')" value="{{ old('city') }}" is-invalid @enderror
                                                id="formrow-city-input"
                                                placeholder="المدينة ">
                                                <span class="text-danger error-text city_error"></span>
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
                                                
                                                <label for="logo" class="form-label ">  <i class="display-4 text-muted bx bxs-cloud-upload"></i><h4>تحميل الشعار</h4></label>
                                                <div class="fallback" >
                                                    
                                                    <input type="file" class="form-control @error('logo') is-invalid @enderror dz-message needsclick"
                                                    name="logo" id="logo" value="{{ old('logo') }}"
                                                    placeholder="الشعار" onchange="loadFile(event)">
                                                    <img id="output" style=" max-width: 160px; max-height: 120px; border: none;"/>  
                                                    
                                                </div>
                                                <span class="text-danger error-text logo_error"></span>

                                            @error('logo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>
                            
                                    </div>
                                </div>

                                <div class="col-md-4 col-4" style="float: left; margin-top: 100px;">
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
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="project_type_id" class="form-label">نوع المشروع</label>
                                            <!-- All countries -->
                                            <select id="project_type_id" class="form-select" name="project_type_id"
                                                required>
                                                <option selected disabled hidden>-- نوع المشروع --</option>
                                                @foreach ($protype as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger error-text project_type_id_error"></span>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="study_duration" class="form-label">مدة الدراسة</label>
                                            <!-- All countries -->
                                            <select id="study_duration" class="form-select" name="study_duration">
                                                <option  disabled hidden></option>
                                                <option value="5" selected>5</option>
                                                <option value="10">10</option>
                                            </select>
                                            <span class="text-danger error-text study_duration_error"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="language" class="form-label">لغة المشروع</label>
                                            <select id="language" class="form-select" name="language">
                                                <option  disabled hidden>لغة المشروع</option>
                                                <option value="ar" selected>اللغة العربية</option>
                                                <option value="en">اللغة الانجليزية</option>
                                            </select>
                                            <span class="text-danger error-text language_error"></span>

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
                                                <option  disabled hidden>عملة المشروع</option>
                                                <option value="dollar" > دولار امريكي</option>
                                                <option value="sar" selected> ريال سعودي</option>
                                            </select>
                                            <span class="text-danger error-text currency_error"></span>

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
                                                id="start_date" name="start_date" value="{{ old('start_date') }}"
                                                required>
                                                <span class="text-danger error-text start_date_error"></span>
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
                                            <input type="number" name="development_duration" class="form-control 
                                            @error('development_duration') is-invalid @enderror"
                                                placeholder="فترة التأسيس" id="development_duration"
                                                value="{{ old('development_duration') }}" required>
                                                <span class="text-danger error-text development_duration_error"></span>

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
                                            <input type="number" name="vat" 
                                                class="form-control " value="15" is-invalid 
                                                id="formrow-vat-input"
                                                placeholder="15">
                                                <span class="text-danger error-text vat_error"></span>

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
                                                id="number_days_year" value="365">
                                                <span class="text-danger error-text number_days_year_error"></span>

                                            @error('number_days_year')
                                                <span class="invalid-feedback" role="alert" placeholder="عدد أيام السنة">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
                    </div>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection




@section('script')
    <!--tinymce js-->
    <!-- bootstrap datepicker -->
    <script src="{{ asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- dropzone plugin -->
    <script src="{{ asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>

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
            $('#form1').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('store_project') }}",
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
                            $('#basic-example-t-1').parent().attr('class', 'current');

                            $('<input>', {
                                type: 'hidden',
                                class: 'form-control',
                                value: data.id,
                                name: 'project_id'
                            }).appendTo($('#basic-example-p-1'));
                            $('<input>', {
                                type: 'hidden',
                                class: 'form-control',
                                value: data.id,
                                name: 'project_id'
                            }).appendTo($('#form2'));


                            $('<input>', {
                                type: 'hidden',
                                class: 'form-control',
                                value: data.id,
                                name: 'project_id'
                            }).appendTo($('#basic-example-p-2'));
                            $('<input>', {
                                type: 'hidden',
                                class: 'form-control',
                                value: data.id,
                                name: 'project_id'
                            }).appendTo($('#form3'));
                        }
                    }
                });
            });


            $('#form2').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('store_project_details') }}",
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
                            window.location.href = "{{ route('projects.index') }}";
                        }
                    }
                });
            });
        });
    </script>
@endsection
