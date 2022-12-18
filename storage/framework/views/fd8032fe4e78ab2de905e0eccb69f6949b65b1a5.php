  <!DOCTYPE html>
  <html>
    <style>
 table { width: 100%; }
 table, th, td {
    border:1px solid #76767c;
    border-collapse: collapse;
        padding-top: 5px;
        
  }
  td{
    font-size: 12px;
  }
  .title{
    height: 35px;
    color: white;
    font-size: 17px;
    background-color: #403784;
    width: 20%;
    text-align: -webkit-center;
    padding-top: 10px;
}
 .content{


    color: black;
    font-size: 15px;
    /* background-0
    color: black; */
    /* width: 20%; */
    text-align: -webkit-center;
    /* padding-top: 10px; */
   
}

.border{
    border: 1px solid white;
}

h2{
    text-align: center;
     height: 37px;
    color: white;
    font-size: 12px;
    background-color: #403784;
    padding-top: 12px;
    display: list-item;
    margin-top: -151px;

}
    </style>
    <body>

     <table style="width:100%">
      <tr>
       <th class="title" align="center">المشكلة -الفرصة</th>
       <th class="title" align="center">الحل</th>
       <th class="title" align="center">القيمة المقترحة</th>
       <th class="title" align="center">الميزة التنافسية</th>
      <th class="title" align="center">السوق المستهدف والعملاء</th>
   
      </tr>

      <tr>
        <td rowspan="3" class="content" style=" height: 200px;">
       <?php $__currentLoopData = $problems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php echo e($item->title); ?><br/>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
    
          
        </td>
        <td class="content" style="height: 160px;">
         <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($item->title); ?> 
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </td>
        <td class="content" rowspan="3" style="height: 160px;"> 
<?php $__currentLoopData = $suggestedValue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php echo e($item->suggested_value); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </td>
             <td class="content" style="height: 160px;">الميزة التنافسية </td>
             <td class="content" rowspan="3" style="height: 160px;
         ">
          <?php $__currentLoopData = $targetMarket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php echo e($item->value_sam); ?>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
         <br/>
<?php $__currentLoopData = $targetCustomer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php echo e($item->target_customer); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </td>
         </tr>
       <tr>
            <td class="title" align="center" >الأنشطة الرئيسية</td>
            <td class="title" align="center"> قنوات التسويق والبيع </td>
      
        </tr>

      <tr>
        <td class="content" style="height: 120px;">
    <?php $__currentLoopData = $mainActive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php echo e($item->title); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </td>
        <td class="content"  style="height: 120px;">
        <?php $__currentLoopData = $saleChannel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($item->title); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <br/>
        <?php $__currentLoopData = $marketingChannel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($item->title); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
      </tr>
           
    </table>

    <table style="width:100%">
        <tr>
            <th class="title" style="width: 16.5%;" align="center">  هيكل التكاليف  </th>
            <th class="border"></th>
            <th class="border"></th>
            <th class="title" style="width: 18%;" align="center">   مصادر الايرادات</th>
            <th class="border"></th>
            <th class="border"></th>
            </tr>

            <tr style="height:70px" class="border">
               <td class="test" style="
               border-right-color: #76767c;
              border-bottom-color: white;
               height: 130px;width: 50%;" colspan="3"  class="content">
               <?php $__currentLoopData = $expensisModal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php echo e($item->title); ?>  
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </td>
               <td class="border" colspan="3" style="
               height: 130px;width: 50%;border-bottom-color: white;" class="content"> 
              <?php $__currentLoopData = $incomeSources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($item->title); ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            </tr>
         
    </table>

  </body>
  </html>


<?php /**PATH C:\xampp\htdocs\jadwacpanl\resources\views/admin/report/pdf.blade.php ENDPATH**/ ?>