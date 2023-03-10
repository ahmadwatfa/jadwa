@extends('layouts.master')

@section('title')
    معلومات التواصل
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1')
        اعدادات النظام
        @endslot
        @slot('title')
معلومات التواصل
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <form method="POST" action="{{ route('search_contact') }}">
                                <div class="search-box me-2 mb-2 d-inline-block">
                                    <div class="position-relative">
                                        @csrf
                                        @method('POST')
                                        <input type="text" name="query" class="form-control"
                                            placeholder=" ابحث عن وسيلة تواصل  ">
                                        <i class="bx bx-search-alt search-icon"></i>

                                    </div>

                                </div>

                            </form>
                        </div>

                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                {{-- <a href="{{ route('contacts.create') }}"
                                   class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"> إضافة   <i
                                        class="mdi mdi-plus me-1"></i></a> --}}

                                <button type="button"
                                    class="btn btn-success  waves-effect waves-light mb-2 me-2 bg-o yello"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة
                                    </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">اضافة معلومات تواصل </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('contacts.store') }}"
                                                    id="newModalForm">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="type" class="col-form-label flex">نوع الوسيلة</label>
                                                        <select id="type" class="form-control validate" name="type"
                                                            required>
                                                            <option selected disabled hidden>-- إختر النوع --</option>
                                                            <option value="FaceBook">FaceBook</option>
                                                            <option value="TWitter">TWitter</option>
                                                            <option value="Instagram">Instagram</option>
                                                            <option value="Tiktok">Tiktok</option>
                                                            <option value="Snapchat">Snapchat</option>
                                                            <option value="WhatsApp">WhatsApp</option>
                                                            <option value="YouTube">YouTube</option>
                                                            <option value="Email">Email</option>
                                                            <option value="Phone">Phone</option>

                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="title" class="col-form-label flex">العنوان</label>
                                                        <input type="text" name="title" class="form-control validate"
                                                            id="title" value="{{ old('title') }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="value" class="col-form-label flex">القيمة</label>
                                                        <textarea class="form-control validate" name="value" id="value" required>{{ old('value') }}</textarea>
                                                    </div>
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

                                            <th style="width: 20px;" class="align-middle">#</th>
                                            <th class="align-middle">نوع التواصل </th>
                                            <th class="align-middle"> العنوان </th>
                                            <th class="align-middle">القيمة </th>
                                            <th class="align-middle"></th>
                                        </tr>
                                    </thead>
                                    @foreach ($contact as $key => $contact)
                                        <tbody class="bg-p">
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $contact->type }}</td>
                                                <td>{{ $contact->title }}</td>
                                                <td>{{ $contact->value }}</td>

                                                <td>
                                                    <div class="d-flex gap-3">


                                                        {{-- <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-bs-target="#editModal"   data-id="{{ $item->id }}"><i
                                                    class="mdi mdi-pencil font-size-24"></i></a> --}}
                                                        <a title="تعديل" class="text-success" data-bs-toggle="modal"
                                                            data-id="{{ $contact->id }}" data-type="{{ $contact->type }}"
                                                            style="cursor: pointer" data-title="{{ $contact->title }}"
                                                            data-value="{{ $contact->value }}"
                                                            data-bs-target="#editModal"><i class="fa fa-pen"></i> </a>

                                                        {{-- deleting page --}}

                                                        <a title="حذف" style="cursor: pointer"
                                                            data-id="{{ $contact->id }}" class="text-danger delete">
                                                            <i class="fa fa-trash"></i></a>

                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                             @if (isset($contact))
                        @if ($contact->count() > 0)
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
                                            <form method="POST" action="contacts/{contact}" id="editModal">
                                                @csrf
                                                @method('put')
                                                <input type="hidden" id="id" name="id" required>



                                                <div class="mb-3">
                                                    <label for="type" class="col-form-label">النوع</label>
                                                    <select id="type" class="form-select" name="type" required>
                                                        <option selected disabled hidden required value="{{ $contact->type }}">
                                                            {{ $contact->type }}</option>
                                                        <option value="FaceBook">FaceBook</option>
                                                        <option value="TWitter">TWitter</option>
                                                        <option value="Instagram">Instagram</option>
                                                        <option value="Tiktok">Tiktok</option>
                                                        <option value="Snapchat">Snapchat</option>
                                                        <option value="WhatsApp">WhatsApp</option>
                                                        <option value="YouTube">YouTube</option>
                                                        <option value="Email">Email</option>
                                                        <option value="Phone">Phone</option>

                                                    </select>
                                                    @error('type')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                </div>


                                                <div class="mb-3">
                                                    <label for="title" class="col-form-label">العنوان</label>
                                                    <input type="text" name="title" class="form-control" required
                                                        id="title" value="{{ $contact->title }}">
                                                        @error('title')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="value" class="col-form-label">المحتوى</label>
                                                    <input type="text" name="value" class="form-control"
                                                        id="value" value="{{ $contact->value }}">
                                                        @error('value')
                                                        <p class="text-danger">{{ $message }}</p>
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
                    type: {
                        required: true,

                    },
                    title: {
                        required: true,
                    },
                    value: {
                        required: true,
                    },
                },
                messages: {
                    type: "لم يتم اضافة النوع",
                    title: "لم يتم اضافة العنوان",
                    value: "لم يتم اضافة المحتوى"
                }

            });
        });
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var type = button.data('type')
            var title = button.data('title')
            var value = button.data('value')


            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #type').val(type);
            modal.find('.modal-body #title').val(title);
            modal.find('.modal-body #value').val(value);


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
                        url: '{{ url('contacts/{contact}') }}',
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
