<?php $__env->startSection('content'); ?>

<div class="panel">
    <div class="panel-body">
        <table class="table table-spread" id="Aqar">
            <thead>
            <?php /*<th> العمليه </th>*/ ?>
            <th>عنوان الاعلان</th>
            <th>عنوان العقار</th>
            <th> الوصف</th>
            <th>السعر</th>
            <th>الدولة</th>
            <th>المدينة</th>
            <th>المنطقة</th>
            <th>اسم صاحب الاعلان </th>
            <th> نوع العقار   </th>
            <th>  الخيار الاول   </th>
            <th>   الخيار الثانى </th>
            <th>  الخيار الثالث  </th>
            <?php /*<th>  صور العقار   </th>*/ ?>

            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>