

<?php $__env->startSection('title'); ?>Generate DTR
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Generate DTR</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">User</li>
		<li class="breadcrumb-item">Generate DTR</li>
	<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Generate Daily Time Record(DTR) </h5>
					</div>
					<form class="form theme-form">
						<div class="card-body">
							<div class="row">
								<div class="col">
                                    <div class="mb-3 row">
										<label class="col-sm-3 col-form-label">From</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="date" value="0000-00-00" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">To</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="date" value="0000-00-00" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer text-end">
							<div class="col-sm-9 offset-sm-3">
								<button class="btn btn-primary" type="submit">Generate</button>
								<input class="btn btn-light" type="reset" value="Cancel" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ken\Downloads\Compressed\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/generate-dtr.blade.php ENDPATH**/ ?>