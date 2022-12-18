@extends('layouts.master')

@section('title')
    هيكل التكاليف
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1')
        اعدادات المشروع
        @endslot
        @slot('title')
            هيكل التكاليف
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <form method="POST" action="{{ route('search_expModal') }}">
                                <div class="search-box me-2 mb-2 d-inline-block">
                                    <div class="position-relative">
                                        @csrf
                                        @method('POST')
                                        <input type="text" name="query" class="form-control"
                                            placeholder="ابحث عن صفحة">
                                        <i class="bx bx-search-alt search-icon"></i>

                                    </div>

                                </div>

                            </form>
                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">


                                <button type="button"
                                    class="btn btn-success  waves-effect waves-light mb-2 me-2 bg-o yello"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة
                                    </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">اضافة جديد </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form method="POST" action="{{ route('expensisModel.index') }}"
                                                id="newModalForm">
                                                <div class="modal-body">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="title" class="col-form-label flex">البند</label>
                                                        <input type="text" name="title" class="form-control validate"
                                                            id="title" value="{{ old('title') }}" required>
                                                              @error('title')
                                                            <span class="invalid-feedback flex" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>


                                                    {{-- <div class="mb-3">
                                                        <label for="project_type_id" class="form-label flex">نوع
                                                            المشروع</label>
                                                        <!-- All countries -->
                                                        <select id="project_type_id" class="form-control validate"
                                                            name="project_type_id" required>
                                                            <option selected  disabled hidden>-- إختر --</option>
                                                            @foreach ($protype as $item)
                                                                <option value="{{ $item->id }}">{{ $item->title }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                          @error('project_type_id')
                                                            <span class="invalid-feedback flex" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div> --}}

                                                    <input type="hidden" name="type" class="form-control" id="type"
                                                        value="{{ 'expensis_modal' }}">

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">إغلاق</button>
                                                        <button type="submit"
                                                            class="btn btn-outline-warning">اضافة</button>
                                                    </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-->
                </div>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap table-check">
                                <thead class="background">
                                    <tr>

                                        <th style="width: 20px;">#</th>
                                        <th class="align-middle"> البند </th>
                                        <th class="align-middle">العمليات</th>
                                    </tr>
                                </thead>
                                @foreach ($expensisModel as $key => $item)
                                    <tbody class="bg-p">
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->title }}</td>

                                            <td>
                                                <div class="d-flex gap-3">


                                                    {{-- <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-bs-target="#editModal"   data-id="{{ $item->id }}"><i
                                                    class="mdi mdi-pencil font-size-24"></i></a> --}}
                                                    <a title="تعديل" class="text-success" data-bs-toggle="modal"
                                                        data-id="{{ $item->id }}" data-title="{{ $item->title }}"
                                                        data-bs-target="#editModal"><i
                                                            class="fa fa-pen"></i> </a>

                                                    {{-- deleting page --}}

                                                    <a title="حذف" style="cursor: pointer" data-id="{{ $item->id }}"
                                                        class="text-danger delete">
                                                        <i class="fa fa-trash"></i></a>

                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                                 @if (isset($expensisModel))
                    @if ($expensisModel->count() > 0)
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel"> تعديل </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="expensisModel/{expensisModel}" id="editModal">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" id="id" name="id">


                                            <div class="mb-3">
                                                <label for="title" class="col-form-label">البند</label>
                                                <input type="text" name="title" class="form-control" id="title"
                                                    value="" required>
                                                       @error('title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">إغلاق</button>
                                                <button type="submit" class="btn btn-outline-warning">تعديل</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
                @endif


            </div>
        </div>
    </div>
    </div>
    <!-- end row -->

@section('script-bottom')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

    <script>
        $(function() {

            $("#newModalForm").validate({
                rules: {
                    project_type_id: {
                        required: true,

                    },
                    title: {
                        required: true,
                    },

                },
                messages: {
                    project_type_id: "الرجاء اختر النوع  ",
                    title: "الرجاء ادخل العنوان",

                }

            });
        });
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var title = button.data('title')

            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #title').val(title);

        })
        $('.table-responsive').on('click', '.delete', function() {
            let id = $(this).data('id');
            swal.fire({
                text: 'هل انت متاكد من الحذف',
                icon: "error",
                confirmButtonText: "نعم",
                cancelButtonText: "لا",
                showCancelButton: true,
                customClass: {
                    confirmButtonText: "btn font-weight-bold btn-light",
                    cancelButtonText: "btn font-weight-bold btn-light",
                }
            }).then(function(status) {
                if (status.value) {
                    $.ajax({
                        url: '{{ url('expensisModel/{expensisModel}') }}',
                        type: 'Delete',
                        data: {
                            'id': id,
                            '_token': '{{ csrf_token() }}',
                        },
                                       success:function(data){
  setTimeout(() => {
  toastr.success(data.message);
  location.reload();
  },500)
},
                    })
                }
            })
        });
    </script>
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
@endsection
