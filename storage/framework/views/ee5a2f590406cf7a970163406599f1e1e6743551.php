

<?php $__env->startSection('title'); ?>
    <?php echo e(' تعديل مشروع'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- bootstrap datepicker -->
    <link href="<?php echo e(asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">

    <!-- dropzone css -->
    <link href="<?php echo e(asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            مشاريع
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            تعديلات مشروع > <?php echo e($project->name); ?>

        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
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
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($project->id); ?>" id="id">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"> اسم المشروع</label>
                                            <input type="text" name="name"
                                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('name', $project->name)); ?>" id="name"
                                                placeholder="قم بإدخال الاسم">
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="idea" class="form-label">الفكرة/الوصف</label>
                                            <textarea id="elm1" style="height: 250px; !important" name="idea"
                                                class="form-control <?php $__errorArgs = ['idea'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('idea', $project->idea)); ?></textarea>

                                            <?php $__errorArgs = ['idea'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="country" class="form-label">الدولة </label>
                                            <input type="text" name="country"
                                                class="form-control <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>"  is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                id="country"
                                                value="<?php echo e(old('country', $project->country)); ?>" placeholder="الدولة ">
                                            <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="city" class="form-label">المدينة </label>
                                            <input type="text" name="city"
                                                class="form-control <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>"  is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                id="formrow-city-input"
                                                value="<?php echo e(old('city', $project->city)); ?>" placeholder="المدينة ">
                                            <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                                <input type="file" class="form-control <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> dz-message needsclick"
                                                name="logo" id="formrow-logo-input" value="<?php echo e(old('logo')); ?>"
                                                placeholder="الشعار" onchange="loadFile(event)">
                                            </div>
                                            <?php if($project->logo): ?>
                                                <img src="<?php echo e(url('public/logo/' . $project->logo)); ?>" width="60px" id="output">
                 
                                            <?php endif; ?>
                                          

                                            <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left">
                                        
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
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($project->id); ?>" id="id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="project_type_id" class="form-label">نوع المشروع</label>
                                            <!-- All countries -->
                                            <select id="project_type_id" class="form-select" name="project_type_id"
                                                required>
                                                <option selected disabled hidden>-- نوع المشروع --</option>
                                                <?php $__currentLoopData = $projectType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if($item->id == $project->project_type_id): ?> selected <?php endif; ?>
                                                        value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="study_duration" class="form-label">مدة الدراسة</label>
                                            <!-- All countries -->
                                            <select id="study_duration" class="form-select" name="study_duration">
                                                <option selected hidden value="<?php echo e($project->study_duration); ?>">
                                                    <?php echo e($project->study_duration == '5' ? '5' : '10'); ?></option>
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
                                                <option selected hidden value="<?php echo e($project->language); ?>">
                                                    <?php echo e($project->language == 'ar' ? '>اللغة العربية' : 'اللغة الانجليزية'); ?>

                                                </option>
                                                <option value="ar">اللغة العربية</option>
                                                <option value="en">اللغة الانجليزية</option>
                                            </select>
                                            <?php $__errorArgs = ['currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="currency" class="form-label">عملة المشروع</label>
                                            <select id="currency" class="form-select" name="currency">
                                                <option selected hidden value="<?php echo e($project->currency); ?>">
                                                    <?php echo e($project->currency == 'dollar' ? 'دولار امريكي' : 'ريال سعودي'); ?>

                                                </option>
                                                <option value="dollar"> دولار امريكي</option>
                                                <option value="ksa"> ريال سعودي</option>
                                            </select>
                                            <?php $__errorArgs = ['currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="start_date" class="form-label">تاريخ البداية </label>
                                            <input type="date"
                                                class="form-control <?php $__errorArgs = ['start_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="start_date" name="start_date"
                                                value="<?php echo e(old('start_date', $project->start_date)); ?>" required>
                                            <?php $__errorArgs = ['start_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="development_duration" class="form-label">فترة التأسيس</label>
                                            <input type="number" name="development_duration" class="form-control"
                                                placeholder="فترة التأسيس" id="development_duration"
                                                value="<?php echo e(old('development_duration', $project->development_duration)); ?>"
                                                required>
                                            <?php $__errorArgs = ['development_duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="vat" class="form-label">الضريبة </label>
                                            <input type="number" name="vat" required
                                                class="form-control <?php $__errorArgs = ['vat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>" is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                id="formrow-vat-input"
                                                value="<?php echo e(old('vat', $project->vat)); ?>" placeholder="الضريبة">
                                            <?php $__errorArgs = ['vat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="number_days_year" class="form-label">عدد ايام السنة
                                            </label>
                                            <input type="number" name="number_days_year" class="form-control"
                                                id="number_days_year"
                                                value="<?php echo e(old('number_days_year', $project->number_days_year)); ?>">
                                            <?php $__errorArgs = ['number_days_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert" placeholder="عدد أيام السنة">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left ">
                                        
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

  <!-- bootstrap datepicker -->
  <script src="<?php echo e(asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
    <!-- dropzone plugin -->
    <script src="<?php echo e(asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>
    <!--tinymce js-->
    <script src="<?php echo e(asset('assets/libs/tinymce/tinymce.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery-steps/jquery-steps.min.js')); ?>"></script>

    <!-- form wizard init -->
    <script src="<?php echo e(asset('assets/js/pages/form-wizard.init.js')); ?>"></script>
    <!-- init js -->
    <script src="<?php echo e(asset('assets/js/pages/form-editor.init.js')); ?>"></script>
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
                    url: "<?php echo e(route('update_project')); ?>",
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
                    url: "<?php echo e(route('update_project_details')); ?>",
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
                            window.location.href= "<?php echo e(route('projects.index')); ?>";


                        }
                    }
                });
            });
       
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my project\jadwacpanl\resources\views/admin/projects/edit.blade.php ENDPATH**/ ?>