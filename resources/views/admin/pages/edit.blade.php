@extends('layouts.master')

@section('title') {{'تعديل صفحة'}} @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') الصفحات @endslot
        @slot('title') تعديل صفحة @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">


                    <form action="{{ route('pages.update' , $page->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label"> اسم الصفحة</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $page->title }}"  id="title">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="content" class="form-label">المحتوى</label>

                                            <textarea id="elm1" name="content">{{$page->content}}</textarea>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="type" class="form-label">نوع الصفحة</label>
                                        <!-- All countries -->
                                        <select id="type" class="form-select" name="type">
                                            <option selected disabled hidden value="{{$page->type}}">{{$page->type == 'reports' ? 'reports' : 'site'}}</option>
                                            <option value="reports">reports</option>
                                            <option value="site">site</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        <div class="text-center" style="float: left;">
                            <button type="submit"  class="btn btn-outline-warning">حفظ</button>
                            <a href="{{ route('pages.index') }}"  class="btn btn-danger" >الغاء</a>

                            {{-- <button type="button" class="btn btn-danger"
                            data-bs-dismiss="modal">إغلاق</button>
                        <button type="submit" class="btn btn-outline-warning">اضافة</button> --}}
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


@section('script')
    <!--tinymce js-->
    <script src="{{asset('assets/libs/tinymce/tinymce.min.js')}}"></script>

    <!-- init js -->
    <script src="{{asset('assets/js/pages/form-editor.init.js')}}"></script>
    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
@endsection

@endsection
