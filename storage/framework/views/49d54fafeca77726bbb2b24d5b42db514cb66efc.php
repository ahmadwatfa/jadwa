

<?php $__env->startSection('title'); ?>
    <?php echo e('إنشاء مستخدم'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- Plugins css -->
    <link href="<?php echo e(asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            خدمات
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            <?php echo e($project->name); ?>

        <?php $__env->endSlot(); ?>
        <?php $__env->slot('name'); ?>
            <?php echo e('العرض الاستثماري'); ?>

        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <input type="hidden" id="project_id" value="<?php echo e($project_id); ?>" name="project_id">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="vertical-example" class="vertical-wizard">
                         <!-- Seller Details -->
                         
                        <h3> المشاكل والفرص</h3>
                        <section>
                            <h4> المشاكل والفرص</h4>
                          
                              <!-- sample modal content -->
                                <div id="addProblem" class="modal fade" tabindex="-1" aria-labelledby="addProblem" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" >المشاكل والفرص</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="addProblems" class="addProblems" actiom="<?php echo e(route('storeproblem')); ?>" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" id="_token" value="<?php echo e(csrf_token()); ?>" name="_token">
                                                    <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                    <div class="mb-3">
                                                        <label for="problem" class="col-form-label">المشكلة :</label>
                                                        <input required minlength="3" type="text" name="problem" class="form-control" id="problem">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="details" class="col-form-label"> الفرصة (شرح المشكلة):</label>
                                                        <textarea  class="form-control" name="details" id="details"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                        <input type="submit" value="اضافة" name="storeProb" data-bs-dismiss="modal" class="btn btn-warning inner storeProb" id="storeProb"> 
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <table class="table table-bordered" style="text-align: center !important" id="problemsTable">
                                    <thead style="background-color: #F4F4F4B2">
                                        <tr>
                                            <th class="align-middle">#</th>
                                            <th class="align-middle"> المشكلة </th>
                                            <th class="align-middle">الفرصة (شرح المشكلة)</th>
                                            <th class="align-middle">العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbodyProblems">
                                       
                                    </tbody>
                                </table>
                                <div id="editProblem" class="modal fade" tabindex="-1" aria-labelledby="editProblem" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editProblem">المشاكل والفرص</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editProblems" class="editProblems" enctype="multipart/form-data">
                                                    <input type="hidden" id="_token" value="<?php echo e(csrf_token()); ?>" name="_token">                                                        
                                                    <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                    <input type="hidden" id="id" name="id">
                                                    <div class="mb-3">
                                                        <label for="problem" class="col-form-label">المشكلة :</label>
                                                        <input required minlength="3" type="text" name="problem" class="form-control" id="problem">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="details" class="col-form-label"> الفرصة (شرح المشكلة):</label>
                                                        <textarea required minlength="3" class="form-control" name="details" id="details"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                        <input type="submit" value="تعديل" name="storeProb" data-bs-dismiss="modal" class="btn btn-warning inner storeProb" id="storeProb"> 
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <div class="col-md-4 col-4" style="float: rigth">
                                    <div class="col-md-3" style="float: rigth ">
                                        <button type="button" style="float: rigth" id="problemButton" class="btn input-purple inner" data-bs-toggle="modal" data-bs-target="#addProblem">
                                            اضافة 
                                         </button>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 divProblem" style="float: left ">

                                    </div>
                                </div>
                          

                        </section>
                        <!-- Seller Details -->
                        <h3> الحلول والفرص</h3>
                        <section>
                            <h4> الحلول والفرص</h4>
                            <div class="modal fade" id="addSolution" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" >الحلول والفرص</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="addSolutions" >
                                                <input type="hidden" id="_token" value="<?php echo e(csrf_token()); ?>" name="_token">
                                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                <div class="mb-3">
                                                    <label for="solution" class="col-form-label">الحل :</label>
                                                    <input required minlength="3" type="text" name="solution" class="form-control" id="solution">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="details" class="col-form-label"> الفرصة (شرح الحل):</label>
                                                    <textarea class="form-control" name="details" id="details"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                    <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go"> 
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                <table class="table table-bordered" style="text-align: center !important" id="solutionsTable">
                                    <thead style="background-color: #F4F4F4B2">
                                        <tr>
            
                                            <th class="align-middle">#</th>
                                            <th class="align-middle"> الحل </th>
                                            <th class="align-middle">الفرصة (شرح الحل)</th>
                                            <th class="align-middle">العمليات</th>
                                        </tr>
                                    </thead>
                                    
                                        <tbody id="tbodySolution">
                                                
                                                
                                        </tbody>
                                    
                                   
                                    </table>
                                        
                                        <div class="modal fade" id="editSolution" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" >الحلول والفرص</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="editSolutions" >
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                            <input type="hidden" id="id" name="id">
                                                            <div class="mb-3">
                                                                <label for="problem" class="col-form-label">الحل :</label>
                                                                <input  required minlength="3" type="text" name="solution" class="form-control" id="solution">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="details" class="col-form-label"> الفرصة (شرح الحل):</label>
                                                                <textarea  required minlength="3" class="form-control" name="details" id="details"></textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                                <input type="submit" value="تعديل" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go"> 
                                                            </div>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                               
                                <div class="col-md-4 col-4" style="float: rigth">
                                    <div class="col-md-3" style="float: rigth ">
                                        <button type="button" style="float: rigth" id="solutionsButton" class="btn input-purple inner" data-bs-toggle="modal" data-bs-target="#addSolution">
                                            اضافة 
                                         </button>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 divSolution" style="float: left ">

                                    </div>
                                </div>
                          

                        </section>
                        <!-- Seller Details -->
                        <h3> الميزة التنافسية </h3>
                        <section>
                            <h4> الميزة التنافسية </h4>
                            <form id="form_competitive_advantages" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="competitive_advantage">الميزة التنافسية</label>
                                               
                                            <textarea type="text"  required minlength="3" name="competitive_advantage" class="form-control" id="competitive_advantage"
                                                placeholder="كتابة الميزة التنافسية"><?php if(isset($details)): ?><?php echo e($details->competitive_advantage); ?><?php endif; ?></textarea>
                                                
                                          
                                            <span class="text-danger error-text competitive_advantage_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="bold">الميزة التنافسية <small > (يمكنك إضافة حتى 6 مميزات) </small></label>
                                    <div class="col-lg-12">
                                        <div class="cont" id="cont_competitive_advantage">
                                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left">
                                    <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go" > 
                                    </div>
                                </div>
                            </form>
                                <div class="modal fade" id="addCompetitiveAdvantages" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" >اضافة ميزة تنافسية</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="formCompetitiveAdvantages">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                    <div class="mb-3">
                                                        <label for="icon" class="col-form-label">الأيقونة</label>
                                                        <select name="icon" type="text" class="inner form-control ">                                                   
                                                        <option value="">اختر الايقونة</option>
                                                        <option value="1">تجريب</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="title" class="col-form-label">العنوان</label>
                                                        <input  required minlength="3" type="text" name="title" class="form-control" id="title">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="col-form-label">الوصف</label>
                                                        <textarea  required minlength="3" class="form-control" name="description" id="description"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                        <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" > 
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="editCompetitiveAdvantage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" >تعديل ميزة تنافسية</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editCompetitiveAdvantages">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                    <input type="hidden" id="id" name="id">
                                                    <div class="mb-3">
                                                        <label for="problem" class="col-form-label">الأيقونة</label>
                                                        <select name="icon" type="text" class="inner form-control ">                                                   
                                                        <option value="">اختر الايقونة</option>
                                                        <option value="1">تجريب</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="title" class="col-form-label">العنوان</label>
                                                        <input  required minlength="3" type="text" name="title" class="form-control" id="title">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="col-form-label">الوصف</label>
                                                        <textarea  required minlength="3" class="form-control" name="description" id="description"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                        <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" > 
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                        </section>
                        <h3> العملاء المستهدفون </h3>
                        <section>
                            <h4> العملاء المستهدفون </h4>
                            <form id="form_target_customer" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                               
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="target_customer">العملاء
                                                المستهدفون</label>
                                               
                                                <textarea type="text" name="target_customer" class="form-control" id="target_customer"
                                                required minlength="3" placeholder="كتابة العملاء المستهدفون"><?php if(isset($details)): ?> <?php echo e($details->target_customer); ?> <?php endif; ?></textarea>
                                                
                                              <span class="text-danger error-text target_customer_error"></span>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 class="bold">العملاء المستهدفون <small > (يمكنك إضافة حتى 6 عملاء) </small></h3>
                                    <div class="col-lg-12">
                                                <div class="cont" id="cont_target_customer">
                                                
                                                </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left">
                                    <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go" > 
                                    </div>
                                </div>
                            </form>
                                <div class="modal fade" id="addTargetCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addTargetCustomer">اضافة عميل</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="formtargetcustomer">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                    <div class="mb-3">
                                                        <label for="name" class="col-form-label">اسم العميل</label>
                                                        <input  required minlength="3" type="text" name="name" class="form-control" id="name">
                                                    </div>
                                                    <div class="dropzone">
                                                        <div  class="dz-message needsclick">
                                                            <label for="icon" class="form-label" style="font-size:large"><i for="icon" class="display-6 text-muted bx bxs-cloud-upload" ></i> </label>
                                                            <div class="mb-3">
                                                                    <label for="icon" class="form-label" style="font-size:large">
                                                                        تحميل صورة 
                                                                    </label>
                                                                    <input type="file" style="display: none;" class="form-control <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                        name="icon" id="icon" value="<?php echo e(old('icon')); ?>"
                                                                        placeholder="الصورة">
                                                                        <span class="text-danger error-text icon_error"></span>
                        
                                                                    <?php $__errorArgs = ['icon'];
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
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                        <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" > 
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="editTargetCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">تعديل عميل</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editTargetCustomers" >
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                    <input type="hidden" id="id" name="id">
                                                    <div class="mb-3">
                                                        <label for="name" class="col-form-label">اسم العميل</label>
                                                        <input required minlength="3" type="text" name="name" class="form-control" id="name">
                                                    </div>
                                                    <div class="dropzone">
                                                        <div  class="dz-message needsclick">
                                                            <label for="icon" class="form-label" style="font-size:large"><i for="icon" class="display-6 text-muted bx bxs-cloud-upload" ></i> </label>
                                                            <div class="mb-3">
                                                                    <label for="icon" class="form-label" style="font-size:large">
                                                                        تحميل صورة 
                                                                    </label>
                                                                    <input type="file" style="display: none;" class="form-control <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                        name="icon" id="icon" value="<?php echo e(old('icon')); ?>"
                                                                        placeholder="الصورة">
                                                                        <span class="text-danger error-text icon_error"></span>
                        
                                                                    <?php $__errorArgs = ['icon'];
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
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                        <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" > 
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                
                        </section>
                        <h3> السوق المستهدف </h3>
                        <section>
                            <h4> السوق المستهدف </h4>
                            <form id="form_target_market" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($project_id); ?>" name="project_id">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="target_market">السوق المستهدف</label>
                                            <textarea type="text"  required minlength="3" name="target_market" class="form-control" id="target_market"
                                                placeholder="كتابة السوق المستهدف"><?php if(isset($details)): ?><?php echo e($details->target_market); ?> <?php endif; ?></textarea>
                                                
                                            <span class="text-danger error-text target_market_error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="tam">السوق الكلي (TAM)</label>
                                            
                                            <input type="text" name="tam" class="form-control"
                                            required minlength="1" id="tam" <?php if(isset($project->ProjectTargetMarket[0]->tam)): ?> value="<?php echo e($project->ProjectTargetMarket[0]->tam); ?>"  <?php endif; ?> placeholder="إجمالي السوق المستهدف">
                                            
                                            <span class="text-danger error-text tam_error"></span>
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label for="sam">السوق المستهدف (SAM) (10%)</label>
                                            
                                            <input type="text" class="form-control" id="sam"
                                            required minlength="1" <?php if(isset($project->ProjectTargetMarket[0]->sam)): ?> value="<?php echo e($project->ProjectTargetMarket[0]->sam); ?>"  <?php endif; ?> name="sam" placeholder="السوق المستهدف">
                                          
                                            <span class="text-danger error-text sam_error"></span>
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label for="som">الحصة السوقية (SOM) (10%)</label>
                                               
                                            <input type="text" class="form-control" id="som"
                                            required minlength="1" name="som" <?php if(isset($project->ProjectTargetMarket[0]->som)): ?> value="<?php echo e($project->ProjectTargetMarket[0]->som); ?>" <?php endif; ?> placeholder="الحصة السوقية">
                                           
                                            <span class="text-danger error-text som_error"></span>
                                        </div>
                                    
                                        <label for="expected_growth">نسبة النمو السنوي المتوقع</label>
                                        <div class="mb-3 input-group">
                                            <input type="text" name="expected_growth"
                                            class="form-control <?php $__errorArgs = ['expected_growth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="expected_growth" placeholder="نسبة النمو السنوي المتوقع" 
                                            aria-label="expected_growth" <?php if(isset($project->ProjectTargetMarket[0]->expected_growth)): ?> value="<?php echo e($project->ProjectTargetMarket[0]->expected_growth); ?>"  <?php endif; ?>>
                                            <button class="btn btn-light" type="button"><i class="mdi mdi-percent"></i></button>
                                            <span class="text-danger error-text expected_growth_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 market">
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left">
                                        
                                            <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go"
                                            > 
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Seller Details -->
                        <h3>قنوات البيع والتسويق </h3>
                        <section>
                            <h4>قنوات البيع والتسويق </h4>
                            <form id="form_sales_marketing_channels" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                <div class="row">
                                    <div data-repeater-list="inner-group" class="inner mb-4 sales_channels">
                                        <label>قنوات البيع</label>
                                        <?php if(isset($first_sales_channels)): ?>
                                        <div data-repeater-item class="inner mb-3 row sales_chan">
                                            <div class="col-md-12 col-8">
                                                <select  required name="sales_channels[]" type="text"
                                                    class="inner form-control ">                                                   
                                                    <?php $__currentLoopData = $sale_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option <?php if($first_sales_channels->title ==  $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <div data-repeater-item class="inner mb-3 row sales_chan">
                                            <div class="col-md-12 col-8">
                                                <select  required name="sales_channels[]" type="text"
                                                    class="inner form-control ">                                                   
                                                    <?php $__currentLoopData = $sale_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option disabled selected>اختر قناة البيع</option>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if(isset($sales_channels)): ?>
                                        <?php $__currentLoopData = $sales_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sales_channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div data-repeater-item class="inner mb-3 row ">
                                            <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['sale_channels'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                <select name="sales_channels[]" type="text"
                                                class="inner form-control ">
                                                <option value="" disabled selected>اختر قنوات البيع</option>
                                                <?php $__currentLoopData = $sale_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                     <option <?php if($sales_channel->title == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               
                                            </select>
                                                <button class="btn btn-danger" style="background-color: #F91616"
                                                    type="button" id="delete_sales_channels"><i
                                                        class="fa fa-times"></i></button>
                                                <span class="text-danger error-text sale_channels_error"></span>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <div class="col-md-4 col-4 ">
                                            <input data-repeater-create id="add_sales_channels" type="button"
                                                class="add btn inner input-purple" value="اضافة قناة" />
                                        </div>

                                        <span class="text-danger error-text problems_error"></span>

                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div data-repeater-list="inner-group" class="inner mb-4 marketing_channels">
                                        <label>قنوات التسويق</label>
                                        <?php if(isset($first_market_channels)): ?>
                                        <div data-repeater-item class="inner mb-3 row marketing_chan">
                                            <div class="col-md-12 col-8  ">
                                            
                                                <select  required name="marketing_channels[]" type="text"
                                                    class="inner form-control ">
                                                    <?php $__currentLoopData = $marketing_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option <?php if($first_market_channels->title ==  $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <div data-repeater-item class="inner mb-3 row marketing_chan">
                                            <div class="col-md-12 col-8  ">
                                            
                                                <select  required name="marketing_channels[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر قنوات التسويق</option>
                                                    <?php $__currentLoopData = $marketing_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if(isset($market_channels)): ?>
                                        <?php $__currentLoopData = $market_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market_channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div data-repeater-item class="inner mb-3 row ">
                                            <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['marketing_channels'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                <select name="marketing_channels[]" type="text"
                                                class="inner form-control ">
                                                <option value="" disabled selected>اختر قنوات التسويق</option>
                                                <?php $__currentLoopData = $marketing_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                     <option <?php if($market_channel->title == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               
                                            </select>
                                                <button class="btn btn-danger" style="background-color: #F91616"
                                                    type="button" id="delete_marketing_channels"><i
                                                        class="fa fa-times"></i></button>
                                                <span class="text-danger error-text marketing_channels_error"></span>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <div class="col-md-4 col-4 ">
                                            <input data-repeater-create id="add_marketing_channels" type="button"
                                            class="add btn input-purple inner" value="اضافة قناة" required
                                            minlength="3" />
                                        </div>

                                        <span class="text-danger error-text problems_error"></span>

                                    </div>

                                </div>
                               
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left">
                                        
                                            <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go"
                                            id="go"> 
                                    </div>
                                </div>
                            </form>
                        </section>
                        <h3>المنافسون</h3>
                        <section>
                            <h4>المنافسون</h4>
                            <form id="form_store_compatitor" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label>حدد معيار المنافسة الأول </label>
                                        <div class="col-md-12 col-8">
                                            <select  required class="form-control select2" name="compatitor_vector1">
                                                <option disabled selected>اختر معيار</option>
                                                <option <?php if(isset($compatitor->compatitor_vector1) &&  $compatitor->compatitor_vector1 =="السعر"): ?> selected <?php endif; ?>>السعر</option>
                                                <option <?php if(isset($compatitor->compatitor_vector1) &&  $compatitor->compatitor_vector1 =="وقت التسليم"): ?> selected <?php endif; ?>>وقت التسليم</option>
                                                <option <?php if(isset($compatitor->compatitor_vector1) &&  $compatitor->compatitor_vector1 =="الجودة"): ?> selected <?php endif; ?>>الجودة</option>
                                            </select>
                                        </div>
                                        <span class="text-danger error-text compatitor_vector1_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label>حدد معيار المنافسة الثاني </label>
                                        <div class="col-md-12 col-8">
                                            <select  required class="form-control select2" name="compatitor_vector2">
                                                <option disabled selected>اختر معيار</option>
                                                <option <?php if(isset($compatitor->compatitor_vector2) &&  $compatitor->compatitor_vector2 =="السعر"): ?> selected <?php endif; ?>>السعر</option>
                                                <option <?php if(isset($compatitor->compatitor_vector2) &&  $compatitor->compatitor_vector2 =="وقت التسليم"): ?> selected <?php endif; ?>>وقت التسليم</option>
                                                <option <?php if(isset($compatitor->compatitor_vector2) &&  $compatitor->compatitor_vector2 =="الجودة"): ?> selected <?php endif; ?>>الجودة</option>
                                            </select>
                                        </div>
                                        <span class="text-danger error-text compatitor_vector2_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label>حدد معيار المنافسة الثالث </label>
                                        <div class="col-md-12 col-8">
                                            <select  required class="form-control select2" name="compatitor_vector3">
                                                <option disabled selected>اختر معيار</option>
                                                <option <?php if(isset($compatitor->compatitor_vector3) &&  $compatitor->compatitor_vector3 =="السعر"): ?> selected <?php endif; ?>>السعر</option>
                                                <option <?php if(isset($compatitor->compatitor_vector3) &&  $compatitor->compatitor_vector3 =="وقت التسليم"): ?> selected <?php endif; ?>>وقت التسليم</option>
                                                <option <?php if(isset($compatitor->compatitor_vector3) &&  $compatitor->compatitor_vector3 =="الجودة"): ?> selected <?php endif; ?>>الجودة</option>
                                            </select>
                                        </div>
                                        <span class="text-danger error-text compatitor_vector3_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label>حدد معيار المنافسة الرابع </label>
                                        <div class="col-md-12 col-8">
                                            <select  required class="form-control select2" name="compatitor_vector4">
                                                <option disabled selected>اختر معيار</option>
                                                <option <?php if(isset($compatitor->compatitor_vector4) &&  $compatitor->compatitor_vector4 =="السعر"): ?> selected <?php endif; ?>>السعر</option>
                                                <option <?php if(isset($compatitor->compatitor_vector4) &&  $compatitor->compatitor_vector4 =="وقت التسليم"): ?> selected <?php endif; ?>>وقت التسليم</option>
                                                <option <?php if(isset($compatitor->compatitor_vector4) &&  $compatitor->compatitor_vector4 =="الجودة"): ?> selected <?php endif; ?>>الجودة</option>
                                            </select>
                                        </div>
                                        <span class="text-danger error-text compatitor_vector4_error"></span>
                                    </div>
                                </div>
                                <table class="table table-bordered compatitors">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div data-repeater-item class="inner mb-3 row">
                                                    <div class="col-md-12 col-8">
                                                        <input  required minlength="3" name="compatitor1" type="text"
                                                        <?php if(isset($project->ProjectCompatitor[0]->compatitor1)): ?> value="<?php echo e($project->ProjectCompatitor[0]->compatitor1); ?>" <?php else: ?> value="" <?php endif; ?> class="inner form-control"
                                                            placeholder="المنافس الأول" />
                                                    </div>
                                                    <span class="text-danger error-text compatitor1_error"></span>
                                                </div> 
                                            </th>
                                            <th scope="col">
                                                <div data-repeater-item class="inner mb-3 row">
                                                    <div class="col-md-12 col-8">
                                                        <input  required minlength="3" name="compatitor2" type="text"
                                                        <?php if(isset($project->ProjectCompatitor[0]->compatitor2)): ?> value="<?php echo e($project->ProjectCompatitor[0]->compatitor2); ?>" <?php else: ?> value="" <?php endif; ?> class="inner form-control"
                                                            placeholder="المنافس الثاني" />
                                                    </div>
                                                    <span class="text-danger error-text compatitor2_error"></span>
                                                </div>
                                               
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <div data-repeater-item class="inner mb-3 row">
                                                    <div class="col-md-12 col-8">
                                                        <input  required minlength="3" name="compatitor3" type="text"
                                                        <?php if(isset($project->ProjectCompatitor[0]->compatitor3)): ?> value="<?php echo e($project->ProjectCompatitor[0]->compatitor3); ?>" <?php else: ?> value="" <?php endif; ?> class="inner form-control"
                                                            placeholder="المنافس الثالث" />
                                                    </div>
                                                    <span class="text-danger error-text compatitor3_error"></span>
                                                </div>
                                            </th>
                                            <td>
                                                <div data-repeater-item class="inner mb-3 row">
                                                    <div class="col-md-12 col-8">
                                                        <input  required minlength="3" name="compatitor4" type="text"
                                                        <?php if(isset($project->ProjectCompatitor[0]->compatitor4)): ?> value="<?php echo e($project->ProjectCompatitor[0]->compatitor4); ?>" <?php else: ?> value="" <?php endif; ?> class="inner form-control"
                                                            placeholder="المنافس الرابع" />
                                                    </div>
                                                    <span class="text-danger error-text compatitor4_error"></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4 col-4" style="float: left">
                                <div class="col-md-3 " style="float: left">
                                    
                                        <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go"
                                        id="go"> 
                                </div>
                            </div>
                        </form>
                        </section>
                        <h3>الخطة الاستراتيجية</h3>
                        <section>
                            <h4>الخطة الاستراتيجية</h4>
                            <form id="form_vision_message_goals" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>الرؤية</h4>
                                        <label for="vision">ما هي رؤيتكم
                                            للمشروع خلال فترة محددة
                                            من
                                            الزمن. ماذا تريد أن يحقق مشروعكم؟</label>
                                        <textarea  required minlength="3" type="text" name="vision" class="form-control" id="vision"><?php if(isset($details)): ?><?php echo e($details->vision); ?> <?php endif; ?></textarea>
                                        <span class="text-danger error-text vision_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>الرسالة</h4>
                                        <label for="message">الرسالة الدائمة
                                            لتأسيس المشروع وهي
                                            الهدف
                                            الرئيسي لتأسيس المشروع وهي غير محددة بوقت</label>
                                        <textarea  required minlength="3" type="text" name="message" class="form-control" id="message"><?php if(isset($details)): ?><?php echo e($details->message); ?> <?php endif; ?></textarea>
                                        <span class="text-danger error-text message_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="inner-repeater mb-4">
                                    <div data-repeater-list="inner-group" class="inner mb-4 goals">
                                        <h4>الأهداف</h4>
                                            <label for="goals">مجموعة الأهداف
                                            التي عند تحقيقها
                                            فإننا
                                            نحقق خطوات إستراتيجية للوصول إلى الرؤية والرسالة
                                            الخاصة بالمشروع</label>
                                            <?php if(isset($first_goals)): ?>
                                            <div data-repeater-list="inner-group" class="inner mb-4 goals">
                                                <div data-repeater-item class="inner mb-3 row goal">
                                                    <div class="col-md-12 col-8  ">
                                                        <input  required minlength="3" name="goals[]" type="text" class="inner form-control "
                                                            value="<?php echo e($first_goals->goals); ?>" placeholder="قم بكتابة الهدف" required minlength="3" />
                                                    </div>
                                                </div>
                                            </div>    
                                            <?php else: ?>
                                            <div data-repeater-item class="inner mb-3 row goal">
                                                <div class="col-md-12 col-8  ">
                                                    <input  required minlength="3" name="goals[]" type="text" class="inner form-control "
                                                        value="" placeholder="قم بكتابة الهدف" required minlength="3" />
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if(isset($goals)): ?>
                                            <?php $__currentLoopData = $goals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div data-repeater-item class="inner mb-3 row ">
                                                <div class="input-group col-md-12 col-8 auth-pass-inputgroup <?php $__errorArgs = ['goals'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                  
                                                    <input name="goals[]" type="text" class="inner form-control"
                                                        value="<?php echo e($goal->goals); ?>" placeholder="ادخل الهدف" />
                                                        <button class="btn btn-danger" style="background-color: #F91616" 
                                                            type="button" id="delete_goals"><i
                                                                class="fa fa-times"></i></button>
                                                                <span class="text-danger error-text goals_error"></span>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                            <div class="col-md-4 col-4 ">
                                                <input data-repeater-create id="add_goals" type="button"
                                                    class="add btn input-purple inner" value="اضافة هدف" />
                                            </div>
                                            <span class="text-danger error-text goals_error"></span>
                                            
                                            
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-4" style="float: left">
                                <div class="col-md-3 " style="float: left">
                                    
                                        <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go"
                                        id="go"> 
                                </div>
                            </div>
                        </form>
                        </section>
                        <h3>التكاليف والايرادات</h3>
                        <section>
                            <h4>التكاليف والايرادات</h4>
                            <form id="form_revenue_cost" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                            <div class="row">
                                    <div data-repeater-list="inner-group" class="inner mb-4 income_sources">
                                        <label>مصادر الايرادات</label>
                                        <?php if(isset($first_income)): ?>
                                        <div data-repeater-item class="inner mb-3 row income">
                                            <div class="col-md-12 col-8  ">
                                            
                                                <select required name="income_sources[]" type="text"
                                                    class="inner form-control ">
                                                   
                                                    <?php $__currentLoopData = $income_sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option <?php if($first_income->title == $item->id): ?> selected <?php endif; ?>  value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <?php else: ?>
                                        <div data-repeater-item class="inner mb-3 row income">
                                            <div class="col-md-12 col-8  ">
                                            
                                                <select required name="income_sources[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر مصادر الايرادات</option>
                                                    <?php $__currentLoopData = $income_sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <?php endif; ?>
                                        <?php if(isset($income)): ?>
                                        <?php $__currentLoopData = $income; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $incom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div data-repeater-item class="inner mb-3 row ">
                                            <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['income_sources'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                <select name="income_sources[]" type="text"
                                                class="inner form-control ">
                                                <?php $__currentLoopData = $income_sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                     <option <?php if($incom->title == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               
                                            </select>
                                                <button class="btn btn-danger" style="background-color: #F91616"
                                                    type="button" id="delete_income_sources"><i
                                                        class="fa fa-times"></i></button>
                                                <span class="text-danger error-text income_sources_error"></span>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                        <div class="col-md-4 col-4 ">
                                            <input data-repeater-create id="add_income_sources" type="button"
                                                class="add btn input-purple inner" value="اضافة ايرادات" />
                                        </div>

                                        <span class="text-danger error-text income_sources_error"></span>
                                    </div>
                                    <div data-repeater-list="inner-group" class="inner mb-4 expensis_modal">
                                        <label>هيكل التكاليف</label>
                                        <?php if(isset($first_expensis)): ?>
                                        <div data-repeater-item class="inner mb-3 row expensis">
                                            <div class="col-md-12 col-8  ">
                                            
                                                <select  required name="expensis_modal[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر هيكل التكاليف</option>
                                                    <?php $__currentLoopData = $expensis_modal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option <?php if($first_expensis->title == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <?php else: ?>
                                        <div data-repeater-item class="inner mb-3 row expensis">
                                            <div class="col-md-12 col-8  ">
                                            
                                                <select  required name="expensis_modal[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر هيكل التكاليف</option>
                                                    <?php $__currentLoopData = $expensis_modal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <?php endif; ?>
                                        <?php if(isset($expensis)): ?>
                                        <?php $__currentLoopData = $expensis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expensi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div data-repeater-item class="inner mb-3 row ">
                                            <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['expensis_modal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                <select name="expensis_modal[]" type="text"
                                                class="inner form-control ">
                                                <option value="" disabled selected>اختر هيكل التكاليف</option>
                                                <?php $__currentLoopData = $expensis_modal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                     <option <?php if($expensi->title == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               
                                            </select>
                                                <button class="btn btn-danger" style="background-color: #F91616"
                                                    type="button" id="delete_expensis_modal"><i
                                                        class="fa fa-times"></i></button>
                                                <span class="text-danger error-text expensis_modal_error"></span>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <div class="col-md-4 col-4 ">
                                            <input data-repeater-create id="add_expensis_modal" type="button"
                                                class="add btn input-purple inner" value="اضافة تكاليف" />
                                        </div>

                                        <span class="text-danger error-text expensis_modal_error"></span>
                                    </div>
                                    <div data-repeater-list="inner-group" class="inner mb-4 main_activity">
                                        <label>الأنشطة الرئيسية</label>

                                        <?php if(isset($first_main_active)): ?>
                                        <div data-repeater-item class="inner mb-3 row activity">
                                            <div class="col-md-12 col-8">
                                                <select required name="main_activity[]" type="text"
                                                    class="inner form-control ">
                                                    <?php $__currentLoopData = $main_activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option <?php if($first_main_active->title == $item->id): ?> selected <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <div data-repeater-item class="inner mb-3 row activity">
                                            <div class="col-md-12 col-8">
                                                <select required name="main_activity[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر</option>
                                                    <?php $__currentLoopData = $main_activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if(isset($main_active)): ?>
                                        <?php $__currentLoopData = $main_active; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $active): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div data-repeater-item class="inner mb-3 row ">
                                            <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['main_activity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                <select name="main_activity[]" type="text"
                                                class="inner form-control ">
                                                <option value="" disabled selected>اختر الانشطة الرئيسية</option>
                                                <?php $__currentLoopData = $main_activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                     <option <?php if($active->title == $item->id): ?> selected <?php endif; ?>   value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               
                                            </select>
                                                <button class="btn btn-danger" style="background-color: #F91616"
                                                    type="button" id="delete_main_activity"><i
                                                        class="fa fa-times"></i></button>
                                                <span class="text-danger error-text main_activity_error"></span>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        
                                        <div class="col-md-4 col-4 ">
                                            <input data-repeater-create id="add_main_activity" type="button"
                                                class="add btn input-purple inner" value="اضافة انشطة" />
                                        </div>

                                        <span class="text-danger error-text main_activity_error"></span>
                                    </div>
                            
                            </div>
                            <div class="col-md-4 col-4" style="float: left">
                                <div class="col-md-3 " style="float: left">
                                    
                                        <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go"
                                        id="go"> 
                                </div>
                            </div>
                        </form>
                        </section>
                        <h3>الايرادات المستقبلية</h3>
                        <section>
                            <h4>الايرادات المستقبلية</h4>
                            <?php if($project->study_duration == '5'): ?>
                            <form id="form_future_revenues_five" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                    <!-- start 5 years -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="year">الايراد لعام <?php echo e($year); ?> </label>
                                                <input type="number" name="<?php echo e($year); ?>" class="form-control"
                                                required id="year" <?php if(isset($$Project_future_revenue[0]->income_value)): ?> value="<?php echo e($Project_future_revenue[0]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year); ?>">
                                                <span class="text-danger error-text <?php echo e($year); ?>_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="year1">الايراد لعام <?php echo e($year+1); ?> </label>
                                                
                                                <input type="number" name="<?php echo e($year+1); ?>" class="form-control"
                                                required id="year1" <?php if(isset($$Project_future_revenue[1]->income_value)): ?> value="<?php echo e($Project_future_revenue[1]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+1); ?>">
                                                <span class="text-danger error-text <?php echo e($year+1); ?>_error"></span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="year2">الايراد لعام <?php echo e($year+2); ?> </label>
                                                <input type="number" name="<?php echo e($year+2); ?>" class="form-control"
                                                required id="year2" <?php if(isset($$Project_future_revenue[2]->income_value)): ?> value="<?php echo e($Project_future_revenue[2]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+2); ?>">
                                                <span class="text-danger error-text <?php echo e($year+2); ?>_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="year3">الايراد لعام <?php echo e($year+3); ?> </label>
                                                
                                                <input type="number" name="<?php echo e($year+3); ?>" class="form-control"
                                                required id="year3" <?php if(isset($$Project_future_revenue[3]->income_value)): ?> value="<?php echo e($Project_future_revenue[3]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+3); ?>">
                                                <span class="text-danger error-text <?php echo e($year+3); ?>_error"></span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="year4">الايراد لعام <?php echo e($year+4); ?> </label>
                                                <input type="number" name="<?php echo e($year+4); ?>" class="form-control"
                                                required id="year4"  <?php if(isset($$Project_future_revenue[4]->income_value)): ?> value="<?php echo e($Project_future_revenue[4]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+4); ?>">
                                                <span class="text-danger error-text <?php echo e($year+4); ?>_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="incomeChartFive">
                                        <canvas id="incomeChartFive"></canvas>
                                    </div>
                                    <div class="col-md-4 col-4" style="float: left">
                                        <div class="col-md-3 " style="float: left">
                                            
                                                <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go"
                                                id="go"> 
                                        </div>
                                    </div>
                                </form>
                                      <!-- end 5 years -->
                            <?php else: ?>
                                      <!-- start 10 years -->
                            <form id="form_future_revenues_ten" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                                     <?php echo csrf_field(); ?>
                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year">الايراد لعام <?php echo e($year); ?> </label>
                                            <input type="number" name="<?php echo e($year); ?>" class="form-control"
                                            required id="year" <?php if(isset($Project_future_revenue[0]->income_value)): ?> value="<?php echo e($Project_future_revenue[0]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year); ?>">
                                            <span class="text-danger error-text <?php echo e($year); ?>_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year1">الايراد لعام <?php echo e($year+1); ?> </label>
                                            <input type="number" name="<?php echo e($year+1); ?>" class="form-control"
                                            required id="year1" <?php if(isset($Project_future_revenue[1]->income_value)): ?> value="<?php echo e($Project_future_revenue[1]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+1); ?>">
                                            <span class="text-danger error-text <?php echo e($year+1); ?>_error"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year2">الايراد لعام <?php echo e($year+2); ?> </label>
                                            <input type="number" name="<?php echo e($year+2); ?>" class="form-control"
                                            required id="year2" <?php if(isset($Project_future_revenue[2]->income_value)): ?> value="<?php echo e($Project_future_revenue[2]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+2); ?>">
                                            <span class="text-danger error-text <?php echo e($year+2); ?>_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year3">الايراد لعام <?php echo e($year+3); ?> </label>
                                            
                                            <input type="number" name="<?php echo e($year+3); ?>" class="form-control"
                                            required id="year3" <?php if( isset($Project_future_revenue[3]->income_value)): ?> value="<?php echo e($Project_future_revenue[3]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+3); ?>">
                                            <span class="text-danger error-text <?php echo e($year+3); ?>_error"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year4">الايراد لعام <?php echo e($year+4); ?> </label>
                                            <input type="number" name="<?php echo e($year+4); ?>" class="form-control"
                                            required id="year4"  <?php if(isset($Project_future_revenue[4]->income_value) ): ?> value="<?php echo e($Project_future_revenue[4]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+4); ?>">
                                            <span class="text-danger error-text <?php echo e($year+4); ?>_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year5">الايراد لعام <?php echo e($year+5); ?> </label>
                                            <input type="number" name="<?php echo e($year+5); ?>" class="form-control"
                                            required id="year5" <?php if(isset($Project_future_revenue[5]->income_value)): ?> value="<?php echo e($Project_future_revenue[5]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+5); ?>">
                                            <span class="text-danger error-text <?php echo e($year+5); ?>_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year6">الايراد لعام <?php echo e($year+6); ?> </label>
                                            
                                            <input type="number" name="<?php echo e($year+1); ?>" class="form-control"
                                            required id="year6" <?php if(isset($Project_future_revenue[6]->income_value)): ?> value="<?php echo e($Project_future_revenue[6]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+6); ?>">
                                            <span class="text-danger error-text <?php echo e($year+6); ?>_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year7">الايراد لعام <?php echo e($year+7); ?> </label>
                                            <input type="number" name="<?php echo e($year+7); ?>" class="form-control"
                                            required id="year7" <?php if(isset($Project_future_revenue[7]->income_value)): ?> value="<?php echo e($Project_future_revenue[7]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+7); ?>">
                                            <span class="text-danger error-text <?php echo e($year+7); ?>_error"></span>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year8">الايراد لعام <?php echo e($year+8); ?> </label>
                                            <input type="number" name="<?php echo e($year+8); ?>" class="form-control"
                                            required id="year8" <?php if(isset($Project_future_revenue[8]->income_value)): ?> value="<?php echo e($Project_future_revenue[8]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+8); ?>">
                                            <span class="text-danger error-text <?php echo e($year+8); ?>_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="year9">الايراد لعام <?php echo e($year+9); ?> </label>
                                            <input type="number" name="<?php echo e($year+9); ?>" class="form-control"
                                            required id="year9"  <?php if(isset($Project_future_revenue[9]->income_value)): ?> value="<?php echo e($Project_future_revenue[9]->income_value); ?>" <?php endif; ?> placeholder="الايراد لعام <?php echo e($year+9); ?>">
                                            <span class="text-danger error-text <?php echo e($year+9); ?>_error"></span>
                                        </div>
                                    </div>
                                </div>
                                    <div class="incomeChartTen">
                                        <canvas id="incomeChartTen"></canvas>
                                    </div>
                                   
                                      <!-- end 10 years -->
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left">
                                        
                                            <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go"
                                            id="go"> 
                                    </div>
                                </div>
                            </form>
                            <?php endif; ?>
                        </section>
                        <h3>الاستثمار</h3>
                        <section>
                            <h4>الاستثمار</h4>
                            <form id="form_invesment" class="form-horizontal margin_top_30" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="company_value"> مبلغ قيمة الشركة </label>
                                            <div class="mb-3 input-group">
                                                <input type="number" name="company_value" class="form-control"
                                                required minlength="3" id="company_value"  <?php if($Project_investments): ?> value="<?php echo e($Project_investments->company_value); ?>"  <?php endif; ?> placeholder="مبلغ قيمة الشركة ">
                                                <button class="btn btn-light" type="button"><i class="mdi mdi-currency-usd font-size-18"></i></button>
                                                <span class="text-danger error-text company_value_error"></span>
                                     
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="investment_value">قيمة الاستثمار المطلوب</label>
                                            <div class="mb-3 input-group">
                                                <input type="number" name="investment_value"  <?php if($Project_investments): ?> value="<?php echo e($Project_investments->investment_value); ?>"  <?php endif; ?> class="form-control"
                                                required minlength="3" id="investment_value"  placeholder="قيمة الاستثمار المطلوب">
                                                <button class="btn btn-light" type="button"><i class="mdi mdi-currency-usd font-size-18"></i></button>
                                                <span class="text-danger error-text investment_value_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="offered_share"> الحصة المعروضة للبيع </label>
                                            <div class="mb-3">
                                                <input type="number" name="offered_share" class="form-control"
                                                required minlength="3" id="offered_share"  <?php if($Project_investments): ?> value="<?php echo e($Project_investments->offered_share); ?>"  <?php endif; ?> placeholder="الحصة المعروضة للبيع ">
                                               
                                                <span class="text-danger error-text offered_share_error"></span>
                                     
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4 col-4" style="float: left">
                                        <div class="col-md-3 " style="float: left">
                                            
                                                <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go"
                                                id="go"> 
                                        </div>
                                    </div>
                            </form>
                        </section>
                        <h3>استخدام الاستثمار</h3>
                        <section>
                            <h4>استخدام الاستثمار</h4>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">

                                                <table class="table table-bordered" style="text-align: center !important" id="investmentTable">
                                                    <thead style="background-color: #F4F4F4B2">
                                                        <tr>
                                                            <th class="align-middle">#</th>
                                                            <th class="align-middle"> استخدام الاستثمار </th>
                                                            <th class="align-middle">قيمة الاستثمار</th>
                                                            <th class="align-middle">العمليات</th>
                                                        </tr>
                                                    </thead>
                                                    <?php if(count($problems) == 0): ?>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="4">
                                                                    <button type="button" class="btn input-investment" data-bs-toggle="modal" data-bs-target="#addInvestment">
                                                                        أضف استثمار 
                                                                     </button>
                                                                </td>
                                                            </tr>  
                                                        </tbody>
                                                    <?php else: ?>
                                                        <tbody id="tbodyInvestment">
                                                                
                                                                
                                                        </tbody>
                                                    <?php endif; ?>
                                                </table>
                                                
                                                    <div class="modal fade" id="addInvestment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" >اضافة استثمار</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="addInvestmentModal">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                                        <div class="mb-3">
                                                                            <label for="title" class="col-form-label">استخدام الاستثمار</label>
                                                                            <input required minlength="3" type="text" name="title" class="form-control" id="title">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="value" class="col-form-label">قيمة الاستثمار</label>
                                                                            <input required minlength="3" type="number" name="value" class="form-control" id="value">
                                                                        </div>
                                                                        
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                                            <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" id="go"> 
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal fade" id="editInvestment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editInvestment">تعديل استثمار</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="editInvestmentModal">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                                        <div class="mb-3">
                                                                            <label for="problem" class="col-form-label">استخدام الاستثمار</label>
                                                                            <input  required minlength="3" type="text" name="problem" class="form-control" id="problem">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="problem" class="col-form-label">قيمة الاستثمار</label>
                                                                            <input  required minlength="3" type="text" name="problem" class="form-control" id="problem">
                                                                        </div>
                                                                        
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                                            <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" id="go"> 
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="col-md-4 col-4" style="float: rigth">
                                                    <div class="col-md-3" style="float: rigth ">
                                                        <button type="button" style="float: rigth" class="btn input-purple inner" data-bs-toggle="modal" data-bs-target="#addInvestment">
                                                            اضافة 
                                                         </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-4" style="float: left">
                                        <div class="col-md-3 " style="float: left">
                                                <input type="submit" value="حفظ والتالي" name="goInvestment" onclick="goInvestment()" class="btn btn-warning inner goInvestment"
                                                id="goInvestment"> 
                                        </div>
                                    </div>
                            
                        </section>
                        <h3>فريق العمل</h3>
                        <section>
                            <h4>فريق العمل</h4>
                                    <div class="row">
                                        <label class="bold">فريق العمل</label>
                                        <div class="col-lg-12">
                                            <div class="cont" id="cont_team_work">
                                                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="addTeamWorkModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" >اضافة عضو في فريق العمل</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="formTeamWork">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                        <div class="mb-3">
                                                            <label for="name" class="col-form-label">الاسم</label>
                                                            <input required minlength="3" type="text" name="name" class="form-control" id="name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="title" class="col-form-label">المسمى الوظيفي</label>
                                                            <input required minlength="3" type="text" name="title" class="form-control" id="title">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="description" class="col-form-label">نبذة مختصرة</label>
                                                            <input required minlength="3" type="text" name="description" class="form-control" id="description">
                                                        </div>
                                                        <div class="dropzone">
                                                            <div class="dz-message needsclick">
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label" style="font-size:large">
                                                                    <i for="image" class="display-6 text-muted bx bxs-cloud-upload"></i>
                                                                    <input type="file" id="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" value="<?php echo e(old('image')); ?>" >
                                                                    </label>
                                                                    <span class="text-danger error-text image_error"></span>
                                                                    <?php $__errorArgs = ['image'];
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
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                            <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" id="go"> 
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="editTeamWorkModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" >تعديل عضو في فريق العمل</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="editTeamWork">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                        <input type="hidden" id="id" name="id">
                                                        <div class="mb-3">
                                                            <label for="name" class="col-form-label">الاسم</label>
                                                            <input required minlength="3" type="text" name="name" class="form-control" id="name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="title" class="col-form-label">المسمى الوظيفي</label>
                                                            <input required minlength="3" type="text" name="title" class="form-control" id="title">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="description" class="col-form-label">نبذة مختصرة</label>
                                                            <input required minlength="3" type="text" name="description" class="form-control" id="description">
                                                        </div>
                                                        <div class="dropzone">
                                                            <div class="dz-message needsclick">
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label" style="font-size:large">
                                                                    <i for="image" class="display-6 text-muted bx bxs-cloud-upload"></i>
                                                                    <input type="file" id="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" value="<?php echo e(old('image')); ?>" >
                                                                    </label>
                                                                    <span class="text-danger error-text image_error"></span>
                                                                    <?php $__errorArgs = ['image'];
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
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">اغلاق</button>
                                                            <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" id="go"> 
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4 col-4" style="float: left">
                                        <div class="col-md-3 " style="float: left">
                                            
                                                <input type="submit" value="حفظ والتالي" name="goTeamWork" onclick="goTeamWork()" class="btn btn-warning inner goTeamWork"
                                                id="goTeamWork"> 
                                        </div>
                                    </div>
                        </section>
                        <h3>الخدمات </h3>
                        <section>
                            <h4>الخدمات</h4>
                            <div class="row">
                                <div data-repeater-list="inner-group" class="inner mb-4">
                                    <div class="col-md-4 col-4" style="float: rigth;">
                                        <button type="button" style="float: rigth" class="btn input-purple inner" data-bs-toggle="modal" data-bs-target="#addServices">
                                           اضافة خدمة
                                        </button>
                                    </div>
                                </div>

                            </div>                          
                            <div data-repeater-list="inner-group" class="inner mb-4">
                                <div class="col-md-12 col-12 ">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الخدمة</th>
                                            <th>وصف الخدمة</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="services">
                                    
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="col-md-4 col-4" style="float: left">
                                <div class="col-md-3 " style="float: left">
                                    
                                        <input type="submit" value="حفظ والتالي" name="goServices" onclick="goServices()" class="btn btn-warning inner goServices"
                                        id="goServices"> 
                                </div>
                            </div>
                            <div class="modal fade" id="addServices" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addServices">اضافة خدمة</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('storeservicenamedescription')); ?>" id="addForm" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                <div class="mb-3">
                                                    <label for="name" class="col-form-label">اسم الخدمة:</label>
                                                    <input  required minlength="3" type="text" name="name" class="form-control" id="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="details" class="col-form-label">وصف الخدمة:</label>
                                                    <textarea  required minlength="3" class="form-control" name="details" id="details"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">اغلاق</button>
                                                    <input type="submit" value="اضافة" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" id="go"> 
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="editServices" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addServices">تعديل خدمة</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="editForm" method="POST">
                                                <?php echo csrf_field(); ?>
                                               
                                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                                <input type="hidden" id="id" name="id">
                                                <div class="mb-3">
                                                    <label for="name" class="col-form-label">اسم الخدمة:</label>
                                                    <input type="text" name="name" value="" class="form-control" id="name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="details" class="col-form-label">وصف الخدمة:</label>
                                                    <textarea class="form-control" value=""  name="details" id="details"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">اغلاق</button>
                                                    <input type="submit" value="تعديل" name="go" data-bs-dismiss="modal" class="btn btn-warning inner go" id="go"> 
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <h3>معلومات التواصل</h3>
                        <section>
                            <h4>معلومات التواصل</h4>
                            <form id="form_user_details" 
                                class="form-horizontal" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden"  value="<?php echo e($project_id); ?>" name="project_id">
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>اسم المستخدم</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-12 col-12">
                                                    <input required minlength="3" type="text" value="<?php echo e($user->name); ?>" name="name"
                                                        class="inner form-control" placeholder="اسم المستخدم" />
                                                </div>
                                                <span class="text-danger error-text name_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label>البريد الالكتروني</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-12 col-12">
                                                    <input required minlength="3" type="text" name="email" value="<?php echo e($user->email); ?>"
                                                        class="inner form-control" placeholder="البريد الالكتروني" />
                                                </div>
                                                <span class="text-danger error-text email_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <label> رقم الجوال</label>
                                            <div data-repeater-item class="inner mb-3 row">
                                                <div class="col-md-12 col-12">
                                                    <input required minlength="3" type="text" name="phone" value="<?php echo e($user->phone); ?>"
                                                        class="inner form-control" placeholder="رقم الجوال" />
                                                </div>
                                                <span class="text-danger error-text phone_error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="twitter">تويتر</label>
                                            <input required minlength="3" type="text" class="form-control" name="twitter"
                                                id="twitter" value="<?php echo e($user->twitter); ?>"
                                                placeholder="رابط تويتر">
                                        </div>
                                        <span class="text-danger error-text twitter_error"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="linkedin">اللينكد
                                                ان</label>
                                            <input type="text" class="form-control"
                                            required minlength="3"  id="linkedin" value="<?php echo e($user->linkedin); ?>" name="linkedin"
                                                placeholder="رابط اللينكد ان">
                                        </div>
                                        <span class="text-danger error-text linkedin_error"></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left">
                                        
                                            <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go"
                                            id="go"> 
                                    </div>
                                </div>
                            </form>
                        </section>
                       
                        <h3>تصدير التقرير</h3>
                        <section>
                            <form id="form8" class="form-horizontal" enctype="multipart/form-data"
                                style="margin-top: 10%;  margin-right: 30%;">
                                <?php echo csrf_field(); ?>
                                <div class="row" style="">
                                    <div class="inner-repeater mb-4">
                                        <div data-repeater-list="inner-group" class="inner mb-4">
                                            <button class="btn btn-light btn-circle" id="show" type="button" id="password-addon"><i class="mdi mdi-file" style="font-size: 50px;"></i></button>
                                            <h3>شكراً لتعبئة نموذج الأعمال !</h3>
                                            <label style="margin-right: 12px;">يمكنك تحميل التقرير بالضغط على الزر التالي</label>
                                        </div>
                                        <button type="submit" class="btn btn-warning" style="margin-right: 55px;">تحميل نموذج العمل</button>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
  
    <!-- end col -->
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- form wizard init -->
    <script src="<?php echo e(asset('assets/js/pages/form-wizard.init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery-steps/jquery-steps.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script src="<?php echo e(asset('assets/libs/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/metismenu/metismenu.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('#vertical-example-t-0').parent().attr('class','current');
            let value_tam = $("#tam").val(); 
            let value_sam = $("#sam").val(); 
            let value_som = $("#som").val(); 
            chart(value_tam,value_sam,value_som);
            let year = $("#year"); 
            let year1 = $("#year1"); 
            let year2 = $("#year2"); 
            let year3 = $("#year3"); 
            let year4 = $("#year4");
            <?php if($project->study_duration == '10'): ?>
            let year5 = $("#year5"); 
            let year6 = $("#year6"); 
            let year7 = $("#year7"); 
            let year8 = $("#year8"); 
            let year9 = $("#year9");
            incomeChartTen(year,year1,year2,year3,year4,year5,year6,year7,year8,year9);
            <?php endif; ?>
            incomeChartFive(year,year1,year2,year3,year4);
            fetchservices();
            fetchProblems();
            fetchSolution();
            fetchinvestment();
            fetchteamwork();
            fetchtargetcustomers();
            fetchCompetitiveAdvantage();
            disableCompetitiveAdvantage();
            // investmentChart();
           
            $('#form_target_market :input').change(function(e){
                let value_tam = $("#tam").val(); 
                let value_sam = $("#sam").val(); 
                let value_som = $("#som").val(); 
                $("#pieChart").remove();
                $('.market').append(`<canvas id="pieChart"></canvas>`);
                chart(value_tam,value_sam,value_som);
            });
           
            $('#form_future_revenues_five :input').change(function(e){
            // $("#year").on("change",function () {
                let year = $("#year"); 
                let year1 = $("#year1"); 
                let year2 = $("#year2"); 
                let year3 = $("#year3"); 
                let year4 = $("#year4");
                $("#incomeChartFive").remove();
                $('.incomeChartFive').append(`<canvas id="incomeChartFive"></canvas>`);
                incomeChartFive(year,year1,year2,year3,year4);
            });
            $('#form_future_revenues_ten :input').change(function(e){
            // $("#year").on("change",function () {
                let year = $("#year"); 
                let year1 = $("#year1"); 
                let year2 = $("#year2"); 
                let year3 = $("#year3"); 
                let year4 = $("#year4");
                let year5 = $("#year5");
                let year6 = $("#year6");
                let year7 = $("#year7");
                let year8 = $("#year8");
                let year9 = $("#year9");
                $("#incomeChartTen").remove();
                $('.incomeChartTen').append(`<canvas id="incomeChartTen"></canvas>`);
                incomeChartTen(year,year1,year2,year3,year4,year5,year6,year7,year8,year9);
            });
            
                 //pie 
                 function chart(value_tam , value_sam , value_som) {
                 var ctxP = document.getElementById("pieChart").getContext('2d');
                    var myPieChart = new Chart(ctxP, {
                        type: 'pie',
                        data: {
                        labels: ["TAM", "SAM", "SOM"],
                        datasets: [{
                            data: [value_tam, value_sam, value_som],
                            backgroundColor: ["#34C38F", "#556EE6", "#F46A6A"],
                            hoverBackgroundColor: ["#34C38F", "#556EE6", "#F46A6A",]
                        }]
                        },
                        options: {
                        responsive: true
                        }
                    });
                    //end pie 
                    };
                 function investmentChart() {
                    let table = document.getElementById('investmentTable');
                    let count = table.tBodies[0].rows;
                    // console.log(count);
                 var ctxP = document.getElementById("investmentChart").getContext('2d');
                    var myPieChart = new Chart(ctxP, {
                        type: 'pie',
                        data: {
                        labels: ["TAM", "SAM", "SOM", "LOM"],
                        datasets: [{
                            data: [50, 100, 150, 150],
                            backgroundColor: ["#34C38F"],
                            hoverBackgroundColor: ["#556EE6"]
                        }]
                        },
                        options: {
                        responsive: true
                        }
                    });
                    //end pie 
                    };
                    function incomeChartFive(year , year1 , year2 , year3 , year4) {
                    //start bar
                    const ctx = document.getElementById('incomeChartFive');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                        labels: [year.attr('name'), year1.attr('name'), year2.attr('name'), year3.attr('name'), year4.attr('name')],
                        datasets: [{
                            label: 'الايرادات السنوية',
                            data: [year.val(), year1.val(), year2.val(), year3.val(), year4.val()],
                            borderWidth: 1
                        }]
                        },
                        options: {
                        scales: {
                            y: {
                            beginAtZero: true
                            }
                        }
                        }
                    });
                }
                function incomeChartTen(year , year1 , year2 , year3 , year4, year5, year6, year7, year8, year9) {
                    //start bar
                   
                    const ctx = document.getElementById('incomeChartTen');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [year.attr('name'), year1.attr('name'), year2.attr('name'), year3.attr('name'), year4.attr('name'), year5.attr('name'), year6.attr('name'), year7.attr('name'), year8.attr('name'), year9.attr('name')],
                            datasets: [{
                                label: 'الايرادات السنوية',
                                data: [year.val(), year1.val(), year2.val(), year3.val(), year4.val(), year5.val(), year6.val(), year7.val(), year8.val(), year9.val()],
                                borderWidth: 1
                            }]
                            },
                            options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            }
                        }
                    });
                }
                    //end bar
            $('#editProblem').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var problem = button.data('problem')
                var details = button.data('details')

                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #problem').val(problem);
                modal.find('.modal-body #details').val(details);

            })
            $('#editSolution').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var solution = button.data('solution')
                var details = button.data('details')

                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #solution').val(solution);
                modal.find('.modal-body #details').val(details);

            })
            $('#editCompetitiveAdvantage').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var title = button.data('title')
                var description = button.data('description')

                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #title').val(title);
                modal.find('.modal-body #description').val(description);

            })
            $('#editTeamWorkModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var name = button.data('name')
                var image = button.data('image')
                var title = button.data('title')
                var description = button.data('description')

                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #name').val(name);
                // modal.find('.modal-body #image').val(image);
                modal.find('.modal-body #title').val(title);
                modal.find('.modal-body #description').val(description);

            })
            $('#editServices').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var name = button.data('name')
                var details = button.data('details')

                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #name').val(name);
                modal.find('.modal-body #details').val(details);

            })
            $('#editTargetCustomer').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var name = button.data('name')
                var details = button.data('details')

                var modal = $(this)
                modal.find('.modal-body #id').val(id);
                modal.find('.modal-body #name').val(name);
                modal.find('.modal-body #details').val(details);

            })

        $('#tbodyProblems').on('click', '.delete', function() {
            let id = $(this).data('id');
            swal.fire({
                text: 'هل انت متاكد من الحذف',
                icon: "error",
                confirmButtonText: "نعم",
                cancelButtonText: "لا",
                showCancelButton: true,
                customClass: {
                    confirmButtonText: "btn font-weight-bold btn-warning",
                    cancelButtonText: "btn font-weight-bold btn-light",
                }
            }).then(function(status) {
                if (status.value) {
                    $.ajax({
                        url: '<?php echo e(url('projects/investment_offer/problem/{problem}')); ?>',
                        type: 'Delete',
                        data: {
                            'id': id,
                            '_token': '<?php echo e(csrf_token()); ?>',
                        },
                        success: function(e) {
                            fetchProblems();
                        }
                    })
                }
            })
        });
        $('#tbodySolution').on('click', '.delete', function() {
            let id = $(this).data('id');
            swal.fire({
                text: 'هل انت متاكد من الحذف',
                icon: "error",
                confirmButtonText: "نعم",
                cancelButtonText: "لا",
                showCancelButton: true,
                customClass: {
                    confirmButtonText: "btn font-weight-bold btn-warning",
                    cancelButtonText: "btn font-weight-bold btn-light",
                }
            }).then(function(status) {
                if (status.value) {
                    $.ajax({
                        url: '<?php echo e(url('projects/investment_offer/solution/{solution}')); ?>',
                        type: 'Delete',
                        data: {
                            'id': id,
                            '_token': '<?php echo e(csrf_token()); ?>',
                        },
                        success: function(e) {
                            fetchSolution();
                        }
                    })
                }
            })
        });
        $('#services').on('click', '.delete', function() {
            let id = $(this).data('id');
            swal.fire({
                text: 'هل انت متاكد من الحذف',
                icon: "error",
                confirmButtonText: "نعم",
                cancelButtonText: "لا",
                showCancelButton: true,
                customClass: {
                    confirmButtonText: "btn font-weight-bold btn-warning",
                    cancelButtonText: "btn font-weight-bold btn-light",
                }
            }).then(function(status) {
                if (status.value) {
                    $.ajax({
                        url: '<?php echo e(url('projects/investment_offer/services/{services}')); ?>',
                        type: 'Delete',
                        data: {
                            'id': id,
                            '_token': '<?php echo e(csrf_token()); ?>',
                        },
                        success: function(e) {
                            fetchservices();
                        }
                    })
                }
            })
        });
       
        $('#addProblems').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storeproblem')); ?>",
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
                        fetchProblems();
                        $('#addProblems').find("input[name='problem']").val('');
                        $('#addProblems').find("textarea[name='details']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#editProblems').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('updateproblem')); ?>",
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
                        fetchProblems();
                        $('#editProblems').find("input[name='name']").val('');
                        $('#editProblems').find("textarea[name='details']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#addSolutions').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storesolution')); ?>",
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
                        fetchSolution();
                        $('#addSolutions').find("input[name='solution']").val('');
                        $('#addSolutions').find("textarea[name='details']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#editSolutions').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('updatesolution')); ?>",
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
                        fetchSolution();
                        $('#editSolutions').find("input[name='solution']").val('');
                        $('#editSolutions').find("textarea[name='details']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#formCompetitiveAdvantages').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storecompetitiveadvantagesmodal')); ?>",
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
                        fetchCompetitiveAdvantage();
                        $('#formCompetitiveAdvantages').find("input[name='title']").val('');
                        $('#formCompetitiveAdvantages').find("textarea[name='description']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#editCompetitiveAdvantages').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('updatecompetitiveadvantagesmodal')); ?>",
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
                        fetchCompetitiveAdvantage();
                        $('#formCompetitiveAdvantages').find("input[name='title']").val('');
                        $('#formCompetitiveAdvantages').find("textarea[name='description']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })

        $('#form_competitive_advantages').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storecompetitiveadvantages')); ?>",
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
                        $('#vertical-example-p-2').attr('style','display:none');
                        $('#vertical-example-p-3').removeAttr('style');
                        $('#vertical-example-t-2').parent().removeClass('current');
                        $('#vertical-example-t-3').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form_target_customer').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storetargetcustomer')); ?>",
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
                        $('#vertical-example-p-3').attr('style','display:none');
                        $('#vertical-example-p-4').removeAttr('style');
                        $('#vertical-example-t-3').parent().removeClass('current');
                        $('#vertical-example-t-4').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#formtargetcustomer').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storetargetcustomermodal')); ?>",
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
                        fetchtargetcustomers();
                        $('#formtargetcustomer').find("input[name='name']").val('');
                        $('#formtargetcustomer').find("textarea[name='icon']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#editTargetCustomers').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('updatestoretargetcustomermodal')); ?>",
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
                        fetchtargetcustomers();
                        $('#formtargetcustomer').find("input[name='name']").val('');
                        $('#formtargetcustomer').find("textarea[name='icon']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form_target_market').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storetargetmarket')); ?>",
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
                        $('#vertical-example-p-4').attr('style','display:none');
                        $('#vertical-example-p-5').removeAttr('style');
                        $('#vertical-example-t-4').parent().removeClass('current');
                        $('#vertical-example-t-5').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form_sales_marketing_channels').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storesalesmarketingchannels')); ?>",
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
                        $('#vertical-example-p-5').attr('style','display:none');
                        $('#vertical-example-p-6').removeAttr('style');
                        $('#vertical-example-t-5').parent().removeClass('current');
                        $('#vertical-example-t-6').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form_store_compatitor').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storecompatitor')); ?>",
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
                        $('#vertical-example-p-6').attr('style','display:none');
                        $('#vertical-example-p-7').removeAttr('style');
                        $('#vertical-example-t-6').parent().removeClass('current');
                        $('#vertical-example-t-7').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form_vision_message_goals').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storevisionmessagegoals')); ?>",
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
                        $('#vertical-example-p-7').attr('style','display:none');
                        $('#vertical-example-p-8').removeAttr('style');
                        $('#vertical-example-t-7').parent().removeClass('current');
                        $('#vertical-example-t-8').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form_revenue_cost').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storerevenuecost')); ?>",
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
                        $('#vertical-example-p-8').attr('style','display:none');
                        $('#vertical-example-p-9').removeAttr('style');
                        $('#vertical-example-t-8').parent().removeClass('current');
                        $('#vertical-example-t-9').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form_invesment').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storeinvesment')); ?>",
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
                        $('#vertical-example-p-10').attr('style','display:none');
                        $('#vertical-example-p-11').removeAttr('style');
                        $('#vertical-example-t-10').parent().removeClass('current');
                        $('#vertical-example-t-11').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#addInvestmentModal').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storeinvestmentmodal')); ?>",
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
                        fetchinvestment();
                        $('#addInvestmentModal').find("input[name='title']").val('');
                        $('#addInvestmentModal').find("textarea[name='value']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#editInvestmentModal').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storeinvestmentmodal')); ?>",
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
                        fetchinvestment();
                        $('#addInvestmentModal').find("input[name='title']").val('');
                        $('#addInvestmentModal').find("textarea[name='value']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form_future_revenues_five').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storefuturerevenues')); ?>",
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
                        $('#vertical-example-p-9').attr('style','display:none');
                        $('#vertical-example-p-10').removeAttr('style');
                        $('#vertical-example-t-9').parent().removeClass('current');
                        $('#vertical-example-t-10').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form_future_revenues_ten').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storefuturerevenues')); ?>",
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
                        $('#vertical-example-p-9').attr('style','display:none');
                        $('#vertical-example-p-10').removeAttr('style');
                        $('#vertical-example-t-9').parent().removeClass('current');
                        $('#vertical-example-t-10').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#formTeamWork').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storeteamworkmodal')); ?>",
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
                        fetchteamwork();
                        $('#formTeamWork').find("input[name='name']").val('');
                        $('#formTeamWork').find("input[name='title']").val('');
                        $('#formTeamWork').find("input[name='description']").val('');
                        $('#formTeamWork').find("input[name='image']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#editTeamWork').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('updateteamworkmodal')); ?>",
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
                        fetchteamwork();
                        $('#editTeamWork').find("input[name='name']").val('');
                        $('#editTeamWork').find("input[name='title']").val('');
                        $('#editTeamWork').find("input[name='description']").val('');
                        $('#editTeamWork').find("input[name='image']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
       
        
        $('#form_user_details').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storeusersdetails')); ?>",
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
                        $('#vertical-example-p-14').attr('style','display:none');
                        $('#vertical-example-p-15').removeAttr('style');
                        $('#vertical-example-t-14').parent().removeClass('current');
                        $('#vertical-example-t-15').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#finish').on('click',function(e) {
            e.preventDefault();
            $('#form8').parent().attr('style' , 'display:none');
            $('#form9').parent().removeAttr('style');
            // $('.first').removeClass('current');
            $('#vertical-example-p-7').removeAttr('style');
            $('#vertical-example-p-6').attr('style' , 'display:none');
            $('#vertical-example-t-6').parent().removeClass('current');
            $('#vertical-example-t-7').parent().attr('class','current');
                     
        })
        $('#addForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storeservicenamedescription')); ?>",
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
                        fetchservices();
                        $('#addForm').find("input[name='name']").val('');
                        $('#addForm').find("textarea[name='details']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#editForm').submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: "<?php echo e(route('updateservicenamedescription')); ?>",
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
                        fetchservices();
                        $('#addForm').find("input[name='name']").val('');
                        $('#addForm').find("textarea[name='details']").val('');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
    })  
    </script>
    <script>
        function fetchProblems() {
            let id = $('#project_id').val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('fetchproblems')); ?>",
                data: {id: id},
                dataType: "json",
                success: function (response) {
                    
                    $('#tbodyProblems').html("");
                    if (response.problem.length === 0) {
                        $('#goProblem').remove();
                        $('#tbodyProblems').append('<tr>\
                                                <th colspan="4">\
                                                    <button type="button" class="btn input-problem" data-bs-toggle="modal" data-bs-target="#addProblem">\
                                                        أضف مشكلة و فرصة \
                                                     </button>\
                                                </th>\
                                            </tr>');
                                            
                        
                    } else {
                        $.each(response.problem, function (key, item) {
                            $('#goProblem').remove();
                            $('.divProblem').append(`<input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner goProblem"  data-count="1" onclick="goProblems()" id="goProblem">`); 
                            $('#tbodyProblems').append('<tr>\
                                            <td>' + ++key + '</td>\
                                            <td>' + item.problem + '</td>\
                                            <td>' + item.details + '</td>\
                                            <td> <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-id="' + item.id + '"\
                                                data-problem="' + item.problem + '"    data-details="' + item.details + '"\
                                                data-bs-target="#editProblem"><i\
                                                class="fa fa-pen"></i> </a>\
                                            <a title="حذف" style="cursor: pointer"\
                                                data-id="' + item.id + '" class="text-danger delete">\
                                                <i class="fa fa-trash"></i></a></td>\
                                        </tr> ');
                            
                        });

                    }
                    var obj = $('#problemsTable tbody tr')
                    var $row = $(obj);
                    var t1 = $row.find(':nth-child(1)').text();
                    var t2 = $row.find(':nth-child(2)');
                    var tt2 = $row.find(':nth-child(2)');
                    var t3 = $row.find(':nth-child(3)').text();
                    var ttt2 = [];
                    for (let k = 0; k < tt2.length; k++){
                        ttt2.push(t2);
                    }
                    console.log(ttt2[0][2]);

                   

                    disableProblem();
                    
                }
            });
        }         
        function goProblems() {
            $('#vertical-example-p-0').attr('style','display:none');
            $('#vertical-example-p-1').removeAttr('style');
            $('#vertical-example-t-0').parent().removeClass('current');
            $('#vertical-example-t-1').parent().attr('class','current');
        }
        function goSolutions() {
            $('#vertical-example-p-1').attr('style','display:none');
            $('#vertical-example-p-2').removeAttr('style');
            $('#vertical-example-t-1').parent().removeClass('current');
            $('#vertical-example-t-2').parent().attr('class','current');
        }
        function goInvestment() {
            $('#vertical-example-p-11').attr('style','display:none');
            $('#vertical-example-p-12').removeAttr('style');
            $('#vertical-example-t-11').parent().removeClass('current');
            $('#vertical-example-t-12').parent().attr('class','current');
        }
        function goTeamWork() {
            $('#vertical-example-p-12').attr('style','display:none');
            $('#vertical-example-p-13').removeAttr('style');
            $('#vertical-example-t-12').parent().removeClass('current');
            $('#vertical-example-t-13').parent().attr('class','current');
        }
        function goServices() {
            $('#vertical-example-p-13').attr('style','display:none');
            $('#vertical-example-p-14').removeAttr('style');
            $('#vertical-example-t-13').parent().removeClass('current');
            $('#vertical-example-t-14').parent().attr('class','current');
        }
        function fetchSolution() {
            let id = $('#project_id').val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('fetchsolution')); ?>",
                data: {id: id},
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('#tbodySolution').html("");
                    if (response.solution.length === 0) {
                        $('#goSolutions').remove();
                        $('#tbodySolution').append('<tr>\
                                                <th colspan="4">\
                                                    <button type="button" class="btn input-problem" data-bs-toggle="modal" data-bs-target="#addSolution">\
                                                        أضف حل و فرصة \
                                                     </button>\
                                                </th>\
                                            </tr>');
                                            
                        
                    } else {
                    $.each(response.solution, function (key, item) {
                        $('#goSolutions').remove();
                        $('.divSolution').append(`<input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner goSolutions"  data-count="1" onclick="goSolutions()" id="goSolutions">`); 
                        $('#tbodySolution').append('<tr>\
                                            <td>' + ++key + '</td>\
                                            <td>' + item.solution + '</td>\
                                            <td>' + item.details + '</td>\
                                            <td> <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-id="' + item.id + '"\
                                                data-solution="' + item.solution + '"    data-details="' + item.details + '"\
                                                data-bs-target="#editSolution"><i\
                                                class="fa fa-pen"></i> </a>\
                                            <a title="حذف" style="cursor: pointer"\
                                                data-id="' + item.id + '" class="text-danger delete">\
                                                <i class="fa fa-trash"></i></a></td>\
                                        </tr> ');
                    });
                }
                    disableSolutions();
                }
            });
        }
        function fetchCompetitiveAdvantage() {
            let id = $('#project_id').val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('fetchcompetitiveadvantage')); ?>",
                data: {id: id},
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('#cont_competitive_advantage').html("");
                    $.each(response.competitiveadvantage, function (key, item) {
                        $('#cont_competitive_advantage').append('<div class="plus-card cardCompetitiveAdvantage" id="test111" data-bs-toggle="modal" data-bs-target="#editCompetitiveAdvantage"  data-id="' + item.id + '"  data-title="' + item.title + '"  data-description="' + item.description + '"  >\
                                                        <div class="container">\
                                                        <h4>' + item.title + ' </h4>\
                                                        <h4>' + item.description + '</h4>\
                                                        </div>\
                                                    </div>');
                    });
                    $('#cont_competitive_advantage').append(`<div class="plus-card addCardCompetitiveAdvantage" data-bs-toggle="modal" data-bs-target="#addCompetitiveAdvantages"">\
                                                    <i class="fa fa-plus-circle" style="font-size: 40px" aria-hidden="true"></i>\
                                                  </div>`);
                                                  disableCompetitiveAdvantage();
                }
            });
        }
        function fetchservices() {
            let id = $('#project_id').val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('fetchservices')); ?>",
                data: {id: id},
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('#services').html("");
                    $.each(response.services, function (key, item) {
                        $('#services').append('<tr>\
                                            <td>' + ++key + '</td>\
                                            <td>' + item.name + '</td>\
                                            <td>' + item.details + '</td>\
                                            <td> <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-id="' + item.id + '"\
                                                data-name="' + item.name + '"    data-details="' + item.details + '"\
                                                data-bs-target="#editServices"><i\
                                                class="fa fa-pen"></i> </a>\
                                            <a title="حذف" style="cursor: pointer"\
                                                data-id="' + item.id + '" class="text-danger delete">\
                                                <i class="fa fa-trash"></i></a></td>\
                                        </tr> ');
                    });
                }
            });
        }
        function fetchinvestment() {
            let id = $('#project_id').val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('fetchinvestment')); ?>",
                data: {id: id},
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('#tbodyInvestment').html("");
                    $.each(response.investment, function (key, item) {
                        $('#tbodyInvestment').append('<tr>\
                                            <td>' + ++key + '</td>\
                                            <td>' + item.title + '</td>\
                                            <td>' + item.value + '</td>\
                                            <td> <a  title="تعديل" class="text-success"  data-bs-toggle="modal" data-id="' + item.id + '"\
                                                data-title="' + item.title + '"    data-value="' + item.value + '"\
                                                data-bs-target="#editInvestment"><i\
                                                class="fa fa-pen"></i> </a>\
                                            <a title="حذف" style="cursor: pointer"\
                                                data-id="' + item.id + '" class="text-danger delete">\
                                                <i class="fa fa-trash"></i></a></td>\
                                        </tr> ');
                    });
                    
                }
            });
        }
        function fetchtargetcustomers() {
            let id = $('#project_id').val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('fetchtargetcustomers')); ?>",
                data: {id: id},
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('#cont_target_customer').html("");
                    $.each(response.targetcustomer, function (key, item) {
                        $('#cont_target_customer').append('<div class="plus-card cardTargetCustomer" data-bs-toggle="modal" data-bs-target="#editTargetCustomer"  data-id="' + item.id + '"  data-name="' + item.name + '" >\
                                                        <div class="container">\
                                                        <img src="<?php echo e(asset("storage")); ?>/'+ item.icon +' " alt="' + item.icon + '" style="width:100%; height: 100%;">\
                                                        <h4>' + item.name + '</h4>\
                                                        </div>\
                                                    </div>\
                                                    ');
                    });
                    $('#cont_target_customer').append(`<div class="plus-card addTargetCustomer" data-bs-toggle="modal" data-bs-target="#addTargetCustomer">\
                                                    <i class="fa fa-plus-circle" style="font-size: 40px" aria-hidden="true"></i>\
                                                  </div>`);
                                                  disableTargetCustomer();
                }
            });
        }
        function fetchteamwork() {
            let id = $('#project_id').val();
            $.ajax({
                type: "GET",
                url: "<?php echo e(route('fetchteamwork')); ?>",
                data: {id: id},
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    $('#cont_team_work').html("");
                    $.each(response.teamwork, function (key, item) {
                        $('#cont_team_work').append('<div class="plus-card cardTeamWork" data-bs-toggle="modal" data-bs-target="#editTeamWorkModal"  data-id="' + item.id + '"  data-name="' + item.name + '" data-description="' + item.description + '" data-image="' + item.image + '" data-title="' + item.title + '" >\
                                                        <div class="container">\
                                                            <img src="<?php echo e(asset("storage")); ?>/'+ item.image +' " alt="' + item.name + '" style="width:100%; height: 100%;">\
                                                            <h4>' + item.name + '</h4>\
                                                        </div>\
                                                    </div>\
                                                    ');
                    });
                    $('#cont_team_work').append(`<div class="plus-card addTeamWork" data-bs-toggle="modal" data-bs-target="#addTeamWorkModal">\
                                                    <i class="fa fa-plus-circle" style="font-size: 40px" aria-hidden="true"></i>\
                                                  </div>`);
                }
            });
        }
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
            if (e.target.id == 'add_sales_channels') {
                $(".sales_chan").after(`<div data-repeater-item class="inner mb-3 row ">
                                                <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['sale_channels'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                    <select name="sales_channels[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر قنوات البيع</option>
                                                    <?php $__currentLoopData = $sale_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                                    <button class="btn btn-danger" style="background-color: #F91616"
                                                        type="button" id="delete_sales_channels"><i
                                                            class="fa fa-times"></i></button>
                                                    <span class="text-danger error-text sale_channels_error"></span>
                                                </div>
                                            </div>`);
                                            disableSalesChannels();
            }
            if (e.target.id == 'add_marketing_channels') {
                $(".marketing_chan").after(`<div data-repeater-item class="inner mb-3 row ">
                                                <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['marketing_channels'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                    <select name="marketing_channels[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر قنوات التسويق</option>
                                                    <?php $__currentLoopData = $marketing_channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                                    <button class="btn btn-danger" style="background-color: #F91616"
                                                        type="button" id="delete_marketing_channels"><i
                                                            class="fa fa-times"></i></button>
                                                    <span class="text-danger error-text marketing_channels_error"></span>
                                                </div>
                                            </div>`);
                                            disableMarketingChannels();
            }
            if (e.target.id == 'add_goals') {
                $(".goal").after(`<div data-repeater-item class="inner mb-3 row ">
                                                <div class="input-group col-md-12 col-8 auth-pass-inputgroup <?php $__errorArgs = ['goals'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                  
                                                    <input name="goals[]" type="text" class="inner form-control"
                                                        value="" placeholder="ادخل الهدف" />
                                                        <button class="btn btn-danger" style="background-color: #F91616" 
                                                            type="button" id="delete_goals"><i
                                                                class="fa fa-times"></i></button>
                                                                <span class="text-danger error-text goals_error"></span>
                                                </div>
                                            </div>`);
                                            disableGoals();
            }
            if (e.target.id == 'add_income_sources') {
                $(".income").after(`<div data-repeater-item class="inner mb-3 row ">
                                                <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['income_sources'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                    <select name="income_sources[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر مصادر الايرادات</option>
                                                    <?php $__currentLoopData = $income_sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                                    <button class="btn btn-danger" style="background-color: #F91616"
                                                        type="button" id="delete_income_sources"><i
                                                            class="fa fa-times"></i></button>
                                                    <span class="text-danger error-text income_sources_error"></span>
                                                </div>
                                            </div>`);
                                            disableIncomeSources();
            }
            if (e.target.id == 'add_expensis_modal') {
                $(".expensis").after(`<div data-repeater-item class="inner mb-3 row ">
                                                <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['expensis_modal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                    <select name="expensis_modal[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر هيكل التكاليف</option>
                                                    <?php $__currentLoopData = $expensis_modal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                                    <button class="btn btn-danger" style="background-color: #F91616"
                                                        type="button" id="delete_expensis_modal"><i
                                                            class="fa fa-times"></i></button>
                                                    <span class="text-danger error-text expensis_modal_error"></span>
                                                </div>
                                            </div>`);
                                            disableExpensisModal();
            }
            if (e.target.id == 'add_main_activity') {
                $(".activity").after(`<div data-repeater-item class="inner mb-3 row ">
                                                <div class="input-group col-md-12 col-12 auth-pass-inputgroup <?php $__errorArgs = ['main_activity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                                    <select name="main_activity[]" type="text"
                                                    class="inner form-control ">
                                                    <option value="" disabled selected>اختر الانشطة الرئيسية</option>
                                                    <?php $__currentLoopData = $main_activity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   
                                                </select>
                                                    <button class="btn btn-danger" style="background-color: #F91616"
                                                        type="button" id="delete_main_activity"><i
                                                            class="fa fa-times"></i></button>
                                                    <span class="text-danger error-text main_activity_error"></span>
                                                </div>
                                            </div>`);
                                            disableMainActivity();
            }

            // start delete element 
            if (e.target.id == 'delete_problem') {
                e.target.parentElement.parentElement.remove();
                disableProblem();
            }
            if (e.target.id == 'delete_solutions') {
                e.target.parentElement.parentElement.remove()
                disableSolutions();
            }
            if (e.target.id == 'delete_sales_channels') {
                e.target.parentElement.parentElement.remove()
                disableSalesChannels();
            }
            if (e.target.id == 'delete_marketing_channels') {
                e.target.parentElement.parentElement.remove()
                disableMarketingChannels();
            }
            if (e.target.id == 'delete_goals') {
                e.target.parentElement.parentElement.remove()
                disableGoals();
            }
            if (e.target.id == 'delete_income_sources') {
                e.target.parentElement.parentElement.remove()
                disableIncomeSources();
            }
            if (e.target.id == 'delete_expensis_modal') {
                e.target.parentElement.parentElement.remove()
                disableExpensisModal();
            }
            if (e.target.id == 'delete_main_activity') {
                e.target.parentElement.parentElement.remove()
                disableMainActivity();
            }
        });
    </script>
    <script>
        function disableProblem() {
            let table = document.getElementById('problemsTable');
            let count = table.tBodies[0].rows.length;
            if (count >= 6) {
                document.getElementById("problemButton").disabled = true;
            } else {
                document.getElementById("problemButton").disabled = false;
            }
        }

        function disableSolutions() {
            let table = document.getElementById('solutionsTable');
            let count = table.tBodies[0].rows.length;
            if (count >= 5) {
                document.getElementById("solutionsButton").disabled = true;
            } else {
                document.getElementById("solutionsButton").disabled = false;
            }
        }
        function disableCompetitiveAdvantage() {
            let count = $('.cardCompetitiveAdvantage').length;
            if (count >= 6) {
                $('.addCardCompetitiveAdvantage').remove();
            }else{
                $('.addCardCompetitiveAdvantage').remove();
                $('#cont_competitive_advantage').append(`<div class="plus-card addCardCompetitiveAdvantage" data-bs-toggle="modal" data-bs-target="#addCompetitiveAdvantages"">\
                                                    <i class="fa fa-plus-circle" style="font-size: 40px" aria-hidden="true"></i>\
                                                  </div>`);
            }
        }
        function disableTargetCustomer() {
            let count = $('.cardTargetCustomer').length;
            if (count >= 6) {
                $('.addTargetCustomer').remove();
            }else{
                $('.addTargetCustomer').remove();
                $('#cont_target_customer').append(`<div class="plus-card addTargetCustomer" data-bs-toggle="modal" data-bs-target="#addTargetCustomer">\
                                                    <i class="fa fa-plus-circle" style="font-size: 40px" aria-hidden="true"></i>\
                                                  </div>`);
            }
        }
        function disableSalesChannels() {
            let input = document.getElementsByName('sales_channels[]').length;
            if (input >= 5) {
                document.getElementById("add_sales_channels").disabled = true;
            } else {
                document.getElementById("add_sales_channels").disabled = false;
            }
        }
        function disableMarketingChannels() {
            let input = document.getElementsByName('marketing_channels[]').length;
            if (input >= 5) {
                document.getElementById("add_marketing_channels").disabled = true;
            } else {
                document.getElementById("add_marketing_channels").disabled = false;
            }
        }
        function disableGoals() {
            let input = document.getElementsByName('goals[]').length;
            if (input >= 5) {
                document.getElementById("add_goals").disabled = true;
            } else {
                document.getElementById("add_goals").disabled = false;
            }
        }
        function disableIncomeSources() {
            let input = document.getElementsByName('income_sources[]').length;
            if (input >= 5) {
                document.getElementById("add_income_sources").disabled = true;
            } else {
                document.getElementById("add_income_sources").disabled = false;
            }
        }
        function disableExpensisModal() {
            let input = document.getElementsByName('expensis_modal[]').length;
            if (input >= 5) {
                document.getElementById("add_expensis_modal").disabled = true;
            } else {
                document.getElementById("add_expensis_modal").disabled = false;
            }
        }
        function disableMainActivity() {
            let input = document.getElementsByName('main_activity[]').length;
            if (input >= 5) {
                document.getElementById("add_main_activity").disabled = true;
            } else {
                document.getElementById("add_main_activity").disabled = false;
            }
        }
    </script>
    
   
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script>

        $(function() {
                // $('#form1').validate({
                //     rules: {
                //         'problems[]': { 
                //             required : true,
                //             minlength : 3
                //          },
                //         'solutions[]': {
                //             required: true,
                //             minlength : 3
                //         }
                //     },
                //     messages: {
                //         'problems[]': {
                //             required : "هذا الحقل مطلوب",
                //             minlength : 'يجب ان يكون طول النص اكثر من 3 احرف'
                //         },
                //         'solutions[]': {
                //             required : "هذا الحقل مطلوب",
                //             minlength : 'يجب ان يكون طول النص اكثر من 3 احرف'
                //         }
                //     }
                // });
                // $('#form2').validate({
                //     rules: {
                //         value_tam: { 
                //             required : true,
                //             number: true
                //          },
                //          value_sam: {
                //             required: true,
                //             number: true
                //         },
                //          value_som: {
                //             required: true,
                //             number: true
                //         }
                //     },
                //     messages: {
                //         value_tam: {
                //             required : "هذا الحقل مطلوب",
                //             number : 'يجب ان يكون النص عبارة عن رقم'
                //         },
                //         value_tam: {
                //             required : "هذا الحقل مطلوب",
                //             number : 'يجب ان يكون النص عبارة عن رقم'
                //         },
                //         value_som: {
                //             required : "هذا الحقل مطلوب",
                //             number : 'يجب ان يكون النص عبارة عن رقم'
                //         }
                //     }
                // });
                
                $('#form3').validate({
                    rules: {
                        'marketing_channels[]': { 
                            required : true,
                         },
                        'sales_channels[]': { 
                            required : true,
                         }, 
                    },
                    messages: {
                        'marketing_channels[]': {
                            required : "هذا الحقل مطلوب",
                        },
                        'sales_channels[]': {
                            required : "هذا الحقل مطلوب",
                        },
                                              
                    }
                });
                $('#form5').validate({
                    rules: {
                        'goals[]': { 
                            required : true,
                         },  
                    },
                    messages: {
                        'goals[]': {
                            required : "هذا الحقل مطلوب",
                        }, 
                    }
                });
                $('#form6').validate({
                    rules: {
                        'income_sources[]': { 
                            required : true,
                         },
                        'expensis_modal[]': { 
                            required : true,
                         },
                        'main_activity[]': { 
                            required : true,
                         },
                        
                    },
                    messages: {
                        'income_sources[]': {
                            required : "هذا الحقل مطلوب",
                        },
                        'expensis_modal[]': {
                            required : "هذا الحقل مطلوب",
                        },
                        'main_activity[]': {
                            required : "هذا الحقل مطلوب",   
                        },
                    }
                });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my project\jadwacpanl\resources\views/admin/investmentoffer/create.blade.php ENDPATH**/ ?>