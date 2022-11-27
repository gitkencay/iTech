

<?php $__env->startSection('title'); ?>Time Record
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Time Record</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">User</li>
        <li class="breadcrumb-item active">Time Record</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Record Time In and Out</h5>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="mega-inline">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-primary me-3">
                                                <input id="radio19" type="radio" name="radio1" value="option1" />
                                                <label for="radio19"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Morning Time IN</h6>
                                                <p>Current TIME: 00:00:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-secondary me-3">
                                                <input id="radio20" type="radio" name="radio1" value="option1" />
                                                <label for="radio20"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Morning Time OUT</h6>
                                                <p>Current TIME: 00:00:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-secondary me-3">
                                                <input id="radio21" type="radio" name="radio1" value="option1" />
                                                <label for="radio21"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Afternoon Time IN</h6>
                                                <p>Current TIME: 00:00:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-primary me-3">
                                                <input id="radio22" type="radio" name="radio1" value="option1" />
                                                <label for="radio22"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Afternoon TIME OUT</h6>
                                                <p>Current TIME: 00:00:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
		</div>
	</div>
	
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/height-equal.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ken\Downloads\Compressed\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/time-record.blade.php ENDPATH**/ ?>