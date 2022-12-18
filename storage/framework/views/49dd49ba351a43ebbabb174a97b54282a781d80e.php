

<?php $__env->startSection('title'); ?>
    المشاريع
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            المشاريع
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            قائمة المشاريع
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <style>
        table {
          border-collapse: separate;
          border-spacing: 0 15px;
        }
        th,
        td {
         text-align: center;
          text-align: center;
         background-color: #fff !important;
          padding: 5px;
        }
        th,
        td,
        a {
         
          padding: 5px;
        }
        tr{
        font-weight:550;
        }
        th {
        text-align: center;
        height: 70px !important;
       
        }
      </style>
    <div class="row">
        <div class="col-12">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <form action="<?php echo e(route('search_project')); ?>" method="post">
                        <div class="search-box me-2 mb-2 d-inline-block">
                            <div class="position-relative">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('POST'); ?>
                                <input type="text" name="query" class="form-control"
                                    placeholder=" ابحث عن المشروع">
                                <i class="bx bx-search-alt search-icon"></i>

                            </div>

                        </div>

                    </form>
                </div>

                <div class="col-sm-8">
                    <div class="text-sm-end">
                        <a href="<?php echo e(route('projects.create')); ?>"
                            class="btn btn-success  waves-effect waves-light mb-2 me-2 bg-o yello"> مشروع جديد <i
                                class="mdi mdi-plus me-1"></i></a>
                    </div>
                </div><!-- end col-->
            </div>
            <div class="">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-check" >
                            <thead >
                                <tr>
                                    <th class="align-middle">#</th>
                                    <th class="align-middle">الشعار</th>
                                    <th class="align-middle"> اسم المشروع</th>
                                    <th class="align-middle">نوع المشروع </th>
                                    <th class="align-middle">الموقع</th>
                                    <th class="align-middle">تاريخ البداية</th>
                                    <th class="align-middle">العمليات</th>
                                </tr>
                            </thead>
                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody class="bg-p">
                                    <tr >
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><img src="<?php echo e(url('/public/logo/' . $project->logo)); ?>" width="50"
                                                height="50"></td>
                                        <td><?php echo e($project->name); ?></td>
                                        <td><?php echo e($project->projectType->title); ?></td>
                                        <td><?php echo e($project->country . ' | ' . $project->city); ?></td>
                                        <td><?php echo e($project->start_date); ?></td>
                                        <td>  
                                                <a href="<?php echo e(route('projects.show', $project->id)); ?>" title="عرض"
                                                    class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                      </svg></a>
                                                
                                                <a href="<?php echo e(route('projects.edit', $project->id)); ?>" title="تعديل"
                                                    class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                      </svg></a>


                                                
                                                <a title="حذف" style="cursor: pointer" data-id="<?php echo e($project->id); ?>"
                                                    class="text-danger delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                      </svg></a>
                                                
                                        
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>

                    </div>
                    <ul class="pagination pagination-rounded justify-content-end mb-2">
                        <?php echo e($projects->links()); ?>

                    </ul>

                </div>

            </div>
        </div>
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script-bottom'); ?>
    <script>
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
                        url: '<?php echo e(route('proj.del')); ?>',
                        type: 'Delete',
                        data: {
                            'id': id,
                            '_token': '<?php echo e(csrf_token()); ?>',
                        },
                        success: function(e) {
                            location.reload();
                            // table.destroy();
                            //drawTable($('table')).serializeArray();
                        }
                    })
                }
            })
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my project\jadwacpanl\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>