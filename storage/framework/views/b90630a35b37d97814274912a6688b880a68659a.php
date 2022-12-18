<?php $__env->startSection('title'); ?>
    <?php echo e('إنشاء مستخدم'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            مشاريع
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            إنشاء مشروع
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <style>
        input[type="file"]{
            display: none;
        }
        .logo{

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
                                                value="<?php echo e(old('name')); ?>" id="name" placeholder="  اسم المشروع">
                                                <span class="text-danger error-text name_error"></span>
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
unset($__errorArgs, $__bag); ?>"><?php echo e(old('idea')); ?></textarea>
                                                <span class="text-danger error-text idea_error"></span>
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
$message = $__bag->first($__errorArgs[0]); ?>" value="<?php echo e(old('country')); ?>" is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                id="country"
                                                placeholder="الدولة ">
                                                <span class="text-danger error-text country_error"></span>
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
$message = $__bag->first($__errorArgs[0]); ?>" value="<?php echo e(old('city')); ?>" is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                id="formrow-city-input"
                                                placeholder="المدينة ">
                                                <span class="text-danger error-text city_error"></span>
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
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            
                                            <label for="logo" class="form-label logo" style="font-size:large"><i class="display-6 text-muted bx bxs-cloud-upload orange" ></i> تحميل الشعار </label>
                                            <input type="file" class="form-control <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="logo" id="logo" value="<?php echo e(old('logo')); ?>"
                                                placeholder="الشعار">
                                                <span class="text-danger error-text logo_error"></span>

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
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="project_type_id" class="form-label">نوع المشروع</label>
                                            <!-- All countries -->
                                            <select id="project_type_id" class="form-select" name="project_type_id"
                                                required>
                                                <option selected disabled hidden>-- نوع المشروع --</option>
                                                <?php $__currentLoopData = $protype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <span class="text-danger error-text project_type_id_error"></span>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="study_duration" class="form-label">مدة الدراسة</label>
                                            <!-- All countries -->
                                            <select id="study_duration" class="form-select" name="study_duration">
                                                <option selected disabled hidden>-- مدة الدراسة --</option>
                                                <option value="5">5</option>
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
                                                <option selected disabled hidden>لغة المشروع</option>
                                                <option value="ar">اللغة العربية</option>
                                                <option value="en">اللغة الانجليزية</option>
                                            </select>
                                            <span class="text-danger error-text language_error"></span>

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
                                                <option selected disabled hidden>عملة المشروع</option>
                                                <option value="dollar"> دولار امريكي</option>
                                                <option value="ksa"> ريال سعودي</option>
                                            </select>
                                            <span class="text-danger error-text currency_error"></span>

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
                                                id="start_date" name="start_date" value="<?php echo e(old('start_date')); ?>"
                                                required>
                                                <span class="text-danger error-text start_date_error"></span>
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
                                                value="<?php echo e(old('development_duration')); ?>" required>
                                                <span class="text-danger error-text development_duration_error"></span>

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
$message = $__bag->first($__errorArgs[0]); ?>" value="<?php echo e(old('vat')); ?>" is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                id="formrow-vat-input"
                                                placeholder="الضريبة">
                                                <span class="text-danger error-text vat_error"></span>

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
                                                id="number_days_year" value="<?php echo e(old('number_days_year')); ?>">
                                                <span class="text-danger error-text number_days_year_error"></span>

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
                                    <div class="col-md-3 " style="float: left">
                                        
                                        <input type="submit" value="التالي" name="go" class="btn btn-warning inner go"
                                            id="go">

                                    </div>
                                </div>
                            </form>
                        </section>

                        <h3>المشاكل والحلول</h3>
                        <section>
                            <h4> المشاكل والحلول</h4>
                            <form id="form3" class="form3" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="row">
                                    <div data-repeater-list="inner-group" class="inner mb-4 problems">
                                        <label>المشاكل <small> (يمكنك إضافة حتى 5 مشاكل) </small></label>
                                        <?php if(isset($first_problems)): ?>
                                            <div data-repeater-item class="inner mb-3 row prob">
                                                <div class="col-md-12 col-8  ">
                                                    <input name="problems[]" type="text" class="inner form-control"
                                                        value="<?php echo e($first_problems->title); ?>" required minlength="3"
                                                        placeholder="ادخل المشكلة" />
                                                        <span class="text-danger error-text problems_error"></span>

                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div data-repeater-item class="inner mb-3 row prob">
                                                <div class="col-md-12 col-8  ">
                                                    <input name="problems[]" type="text" class="inner form-control"
                                                        value="" required minlength="3"
                                                        placeholder="ادخل المشكلة" />
                                                        <span class="text-danger error-text problems_error"></span>

                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(isset($problems)): ?>
                                            <?php $__currentLoopData = $problems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $problem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div data-repeater-item class="inner mb-3 row ">
                                                    <div
                                                        class="input-group col-md-12 col-8 auth-pass-inputgroup <?php $__errorArgs = ['problems'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                        <input name="problems[]" type="text"
                                                            class="inner form-control" value="<?php echo e($problem->title); ?>"
                                                            placeholder="ادخل المشكلة" />
                                                        <button class="btn btn-danger" style="background-color: #F91616"
                                                            type="button" id="delete_problem"><i
                                                                class="fa fa-times"></i></button>
                                                        <span class="text-danger error-text problems_error"></span>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <div class="col-md-4 col-4 ">
                                            <input data-repeater-create id="add_problem" type="button" required
                                                minlength="3" class="add btn btn-outline-warning inner"
                                                value="اضافة مشكلة" />
                                        </div>

                                        <span class="text-danger error-text problems_error"></span>

                                    </div>
                                    <div data-repeater-list="inner-group" class="inner mb-4 problems">
                                        <label>الحلول<small> (يمكنك إضافة حتى 5 حلول) </small></label>
                                        <?php if(isset($first_solutions)): ?>
                                            <div data-repeater-item class="inner mb-3 row solu">
                                                <div class="col-md-12 col-8  ">
                                                    <input name="solutions[]" type="text" class="inner form-control "
                                                        value="<?php echo e($first_solutions->title); ?>" required minlength="3"
                                                        placeholder="ادخل الحل" />
                                                        <span class="text-danger error-text solutions_error"></span>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div data-repeater-item class="inner mb-3 row solu">
                                                <div class="col-md-12 col-8  ">
                                                    <input name="solutions[]" type="text" class="inner form-control "
                                                        value="" required minlength="3" placeholder="ادخل الحل" />
                                                        <span class="text-danger error-text solutions_error"></span>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(isset($solutions)): ?>
                                            <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div data-repeater-item class="inner mb-3 row ">
                                                    <div
                                                        class="input-group col-md-12 col-8 auth-pass-inputgroup <?php $__errorArgs = ['solutions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                        <input name="solutions[]" type="text"
                                                            class="inner form-control" value="<?php echo e($solution->title); ?>"
                                                            placeholder="ادخل الحل" />
                                                            <span class="text-danger error-text solutions_error"></span>
                                                        <button class="btn btn-danger" style="background-color: #F91616"
                                                            type="button" id="delete_solutions"><i
                                                                class="fa fa-times"></i></button>
                                                        
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <div class="col-md-4 col-4 ">
                                            <input data-repeater-create id="add_solutions" type="button"
                                                class="add btn btn-outline-warning inner" value="اضافة حل" />
                                        </div>

                                        <span class="text-danger error-text problems_error"></span>

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
<?php $__env->stopSection(); ?>




<?php $__env->startSection('script'); ?>
    <!--tinymce js-->

    <script src="<?php echo e(asset('assets/libs/jquery-steps/jquery-steps.min.js')); ?>"></script>

    <!-- form wizard init -->
    <script src="<?php echo e(asset('assets/js/pages/form-wizard.init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/tinymce/tinymce.min.js')); ?>"></script>

    <!-- init js -->
    <script src="<?php echo e(asset('assets/js/pages/form-editor.init.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            $('#form1').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo e(route('store_project')); ?>",
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
                    url: "<?php echo e(route('store_project_details')); ?>",
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
                            $('#basic-example-p-1').attr('style', 'display:none');
                            $('#basic-example-p-2').removeAttr('style');
                            $('#basic-example-t-1').parent().removeClass('current');
                            $('#basic-example-t-2').parent().attr('class', 'current');

                        }
                    }

                });
            });
            $('#form3').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "<?php echo e(route('storeproblemssolutions')); ?>",
                    method: 'post',
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 1) {
                            if (data.status == 0) {
                                $.each(data.error, function(prefix, val) {
                                    $('span.' + prefix + '_error').text(val[0]);
                                });
                            } else {
                                window.location.href = "<?php echo e(route('projects.index')); ?>";
                            }
                        }
                    }
                });
            })
            document.addEventListener('click', function(e) {
                var eventTarget = e.target;

                // start clone elemetn 
                if (e.target.id == 'add_problem') {
                    $(".prob").after(`<div data-repeater-item class="inner mb-3 row ">
                                <div class="input-group col-md-12 col-8 auth-pass-inputgroup <?php $__errorArgs = ['problems'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                  
                                    <input name="problems[]" type="text" class="inner form-control"
                                        value="" placeholder="ادخل المشكلة" />
                                        <button class="btn btn-danger" style="background-color: #F91616" 
                                            type="button" id="delete_problem"><i
                                                class="fa fa-times"></i></button>
                                                <span class="text-danger error-text problems_error"></span>
                                    </div>
                                    </div>
                                         
                                      `);
                    disableProblem();
                }
                if (e.target.id == 'add_solutions') {
                    $(".solu").after(`<div data-repeater-item class="inner mb-3 row ">
                                <div class="input-group col-md-12 col-8 auth-pass-inputgroup <?php $__errorArgs = ['solutions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                  
                                    <input name="solutions[]" type="text" class="inner form-control"
                                        value="" placeholder="ادخل الحل" />
                                        <button class="btn btn-danger" style="background-color: #F91616" 
                                            type="button" id="delete_solutions"><i
                                                class="fa fa-times"></i></button>
                                                <span class="text-danger error-text solutions_error"></span>
                                    </div>
                                    </div>
                                         
                                      `);
                    disableSolutions();
                }
                // end clone element

                // start delete element 
                if (e.target.id == 'delete_problem') {
                    e.target.parentElement.parentElement.remove();
                    disableProblem();
                }
                if (e.target.id == 'delete_solutions') {
                    e.target.parentElement.parentElement.remove()
                    disableSolutions();
                }

                // end delete element

            });


            function disableProblem() {
                let input = document.getElementsByName('problems[]').length;
                let button = document.getElementById('add_problem');
                if (input >= 5) {
                    document.getElementById("add_problem").disabled = true;
                } else {
                    document.getElementById("add_problem").disabled = false;
                }
            }

            function disableSolutions() {
                let input = document.getElementsByName('solutions[]').length;
                let button = document.getElementById('add_solutions');
                if (input >= 5) {
                    document.getElementById("add_solutions").disabled = true;
                } else {
                    document.getElementById("add_solutions").disabled = false;
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jadwacpanl\resources\views/admin/projects/create.blade.php ENDPATH**/ ?>