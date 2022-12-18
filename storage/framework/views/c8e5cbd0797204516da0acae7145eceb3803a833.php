

<?php $__env->startSection('title'); ?>
    <?php echo e('نموذج العمل'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            <?php echo e('مشاريعي'); ?>

        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            <?php echo e($project->name); ?>

        <?php $__env->endSlot(); ?>
        <?php $__env->slot('name'); ?>
            <?php echo e('نموذج العمل'); ?>

        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    
    <input type="hidden" id="project_id" value="<?php echo e($project_id); ?>" name="project_id">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="vertical-example" class="vertical-wizard">
                         <!-- Seller Details -->
                        <h3> المشاكل والحلول</h3>
                        <section>
                            <h4> المشاكل والحلول</h4>
                         <form id="form1" class="form1" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" id="project_id" value="<?php echo e($project_id); ?>" name="project_id">
                            <div class="row">
                                    <div data-repeater-list="inner-group" class="inner mb-4 problems">
                                        <label class="bold">المشاكل </label><small> (يمكنك إضافة حتى 5 مشاكل) </small>
                                     
                                        <div data-repeater-item class="inner mb-3 row prob">
                                            <div class="col-md-12 col-8  ">
                                                <input name="problems[]" type="text" class="inner form-control"
                                                    value="" required minlength="3" placeholder="قم بكتابة المشكلة"  />
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-4 col-4 ">
                                            <input data-repeater-create id="add_problem" type="button"
                                                required minlength="3"  class="add btn input-purple inner" value="اضافة مشكلة" />
                                        </div>

                                        <span class="text-danger error-text problems_error"></span>

                                    </div>
                                    <div data-repeater-list="inner-group" class="inner mb-4 problems">
                                        <label class="bold">الحلول</label><small> (يمكنك إضافة حتى 5 حلول) </small>
                                      
                                        <div data-repeater-item class="inner mb-3 row solu">
                                            <div class="col-md-12 col-8  ">
                                                <input name="solutions[]" type="text" class="inner form-control "
                                                    value=""  required minlength="3" placeholder="قم بكتابة الحل"  />
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-4 ">
                                            <input data-repeater-create id="add_solutions" type="button"
                                                class="add btn input-purple inner" value="اضافة حل" />
                                        </div>

                                        <span class="text-danger error-text problems_error"></span>

                                    </div>

                                    
                                </div> 
                                <div class="col-md-4 col-4" style="float: left">
                                    <div class="col-md-3 " style="float: left ">
                                            <input type="submit" value="حفظ والتالي" name="go" class="btn btn-warning inner go" id="go"> 
                                    </div>
                                </div>
                        </form> 
                        </section> 
                        <!-- Seller Details -->
                        <h3> السوق والعملاء </h3>

                        <section>
                            <h4> السوق والعملاء </h4>
                            <form id="form2" class="form2" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" id="project_id" value="<?php echo e($project_id); ?>" name="project_id">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="bold" for="suggested_value">القيمة المقترحة</label>
                                            <textarea type="text"  required minlength="3" name="suggested_value" class="form-control" id="suggested_value"
                                                placeholder="كتابة القيمة المقترحة"></textarea>
                                                
                                          
                                            <span class="text-danger error-text suggested_value_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="bold" for="competitive_advantage">الميزة التنافسية</label>
                                            <textarea type="text"  required minlength="3" name="competitive_advantage" class="form-control" id="competitive_advantage"
                                                placeholder="كتابة الميزة التنافسية"></textarea>
                                            
                                            <span class="text-danger error-text competitive_advantage_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="bold" for="target_market">السوق المستهدف</label>
                                            <textarea type="text"  required minlength="3" name="target_market" class="form-control" id="target_market"
                                                placeholder="كتابة السوق المستهدف"></textarea>
                                            
                                            <span class="text-danger error-text target_market_error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="bold" for="target_customer">العملاء
                                                المستهدفون</label>
                                               
                                                <textarea type="text" name="target_customer" class="form-control" id="target_customer"
                                                required minlength="3" placeholder="كتابة العملاء المستهدفون"></textarea>
                                                

                                              <span class="text-danger error-text target_customer_error"></span>
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
                        <!-- Seller Details -->
                        <h3> قنوات البيع والتسويق </h3>
                        <section>
                            <h4> قنوات البيع والتسويق </h4>
                            <form id="form3" class="form-horizontal" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" id="project_id" value="<?php echo e($project_id); ?>" name="project_id">

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
                        <h3>التكاليف والايرادات</h3>
                        <section>
                            <h4>التكاليف والايرادات</h4>
                            <form id="form4" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" id="project_id" value="<?php echo e($project_id); ?>" name="project_id">
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
                    
                    <h3>تصدير التقرير</h3>
                        <section>
                        <form id="form5" class="form-horizontal" enctype="multipart/form-data"
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
                        <div class="col-md-4 col-4" style="float: left">
                            <div class="col-md-3 " style="float: left">
                                
                                    <input type="submit" value="حفظ" name="finish" class="btn btn-warning inner go finish"
                                    id="finish"> 
                            </div>
                        </div>
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
    
    <script src="<?php echo e(asset('assets/libs/bootstrap/bootstrap.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('assets/libs/metismenu/metismenu.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            disableProblem();
            disableSolutions();
            disableExpensisModal();
            disableIncomeSources();
            disableMarketingChannels();
            disableSalesChannels();
            disableMainActivity();
        $('#vertical-example-t-0').parent().attr('class','current');
        $('#form1').submit(function(e) {
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
                        $('#vertical-example-p-0').attr('style' , 'display:none');
                        $('#vertical-example-t-0').parent().removeClass('current');
                        $('#vertical-example-p-1').removeAttr('style');
                        $('#vertical-example-t-1').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form2').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?php echo e(route('storedetailsmarket')); ?>",
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
                        $('#vertical-example-p-1').attr('style' , 'display:none');
                        $('#vertical-example-t-1').parent().removeClass('current');
                        $('#vertical-example-p-2').removeAttr('style');
                        $('#vertical-example-t-2').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form3').submit(function(e) {
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
                        $('#vertical-example-p-2').attr('style' , 'display:none');
                        $('#vertical-example-t-2').parent().removeClass('current');
                        $('#vertical-example-p-3').removeAttr('style');
                        $('#vertical-example-t-3').parent().attr('class','current');
                    } else {
                        $.each(data.error, function(prefix, val) {
                            $('span.' + prefix + '_error').text(val[0]);
                        });
                    }
                }
            });
        })
        $('#form4').submit(function(e) {
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
                        $('#vertical-example-p-3').attr('style' , 'display:none');
                        $('#vertical-example-t-3').parent().removeClass('current');
                        $('#vertical-example-p-4').removeAttr('style');
                        $('#vertical-example-t-4').parent().attr('class','current');
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
            location.href = "<?php echo e(route('projects.show' , $project_id)); ?>"
                     
        })
       
    })  
    </script>
    <script>
        function fetchservices() {
            let id = $('#id').val();
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
                                        value="" placeholder="قم بكتابة المشكلة"  />
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
                                        value="" placeholder="قم بكتابة الحل" />
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
            let input = document.getElementsByName('problems[]').length;
            if (input >= 5) {
                document.getElementById("add_problem").disabled = true;
            } else {
                document.getElementById("add_problem").disabled = false;
            }
        }

        function disableSolutions() {
            let input = document.getElementsByName('solutions[]').length;
            if (input >= 5) {
                document.getElementById("add_solutions").disabled = true;
            } else {
                document.getElementById("add_solutions").disabled = false;
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
                $('#form1').validate({
                    rules: {
                        'problems[]': { 
                            required : true,
                            minlength : 3
                         },
                        'solutions[]': {
                            required: true,
                            minlength : 3
                        }
                    },
                    messages: {
                        'problems[]': {
                            required : "هذا الحقل مطلوب",
                            minlength : 'يجب ان يكون طول النص اكثر من 3 احرف'
                        },
                        'solutions[]': {
                            required : "هذا الحقل مطلوب",
                            minlength : 'يجب ان يكون طول النص اكثر من 3 احرف'
                        }
                    }
                });
                $('#form2').validate({
                    rules: {
                        value_tam: { 
                            required : true,
                            number: true
                         },
                         value_sam: {
                            required: true,
                            number: true
                        },
                         value_som: {
                            required: true,
                            number: true
                        }
                    },
                    messages: {
                        value_tam: {
                            required : "هذا الحقل مطلوب",
                            number : 'يجب ان يكون النص عبارة عن رقم'
                        },
                        value_tam: {
                            required : "هذا الحقل مطلوب",
                            number : 'يجب ان يكون النص عبارة عن رقم'
                        },
                        value_som: {
                            required : "هذا الحقل مطلوب",
                            number : 'يجب ان يكون النص عبارة عن رقم'
                        }
                    }
                });
                
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\my project\jadwacpanl\resources\views/admin/projectsplane/create.blade.php ENDPATH**/ ?>