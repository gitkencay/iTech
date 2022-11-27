

<?php $__env->startSection('title'); ?>Manage Tax
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/jsgrid.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Manage Tax</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Payroll</li>
		<li class="breadcrumb-item active">Manage Taxes</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Taxable Employee</h5>
	                </div>
	                <div class="card-body">
	                    <div id="basicScenario"></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/jsgrid/jsgrid.min.js')); ?>"></script>`
    <script src="<?php echo e(asset('assets/js/jsgrid/griddata.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jsgrid/jsgrid.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ken\Downloads\Compressed\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/manage-taxes.blade.php ENDPATH**/ ?>