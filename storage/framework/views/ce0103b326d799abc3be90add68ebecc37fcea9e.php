

<?php $__env->startSection('title'); ?>login
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
	    <div class="row">
	        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="<?php echo e(asset('assets/images/login/login.jpg')); ?>" alt="loginpage" /></div>
	        <div class="col-xl-7 p-0">
	            <div class="login-card">
	                <form class="theme-form login-form needs-validation" novalidate=""  action="<?php echo e(route('main')); ?>">
	                    <h4>Log in.</h4>
                        <br>
	                    <div class="form-group">
	                        <label>Email Address</label>
	                        <div class="input-group">
	                            <span class="input-group-text"><i class="icon-email"></i></span>
	                            <input class="form-control" type="email" required="" placeholder="email@gmail.com" />
	                            <div class="invalid-tooltip">Please enter proper email.</div>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label>Password</label>
	                        <div class="input-group">
	                            <span class="input-group-text"><i class="icon-lock"></i></span>
	                            <input class="form-control" type="password" name="login[password]" required="" placeholder="*********" />
	                            <div class="invalid-tooltip">Please enter password.</div>
	                            <div class="show-hide"><span class="show"> </span></div>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <div class="checkbox">
	                            <input id="checkbox1" type="checkbox" />
	                            <label class="text-muted" for="checkbox1">Remember password</label>
	                        </div>
	                        <a class="link" href="<?php echo e(route('forget-password')); ?>">Forgot password?</a>
	                    </div>
	                    <div class="form-group">
	                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
	                    </div>
	                    <div class="login-social-title">
	                        <h5>Sign in with</h5>
	                    </div>
	                    <p>Don't have account?<a class="ms-2" href="<?php echo e(route('register')); ?>">Create Account</a></p>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- <script>
	    (function () {
	        "use strict";
	        window.addEventListener(
	            "load",
	            function () {
	                // Fetch all the forms we want to apply custom Bootstrap validation styles to
	                var forms = document.getElementsByClassName("needs-validation");
	                // Loop over them and prevent submission
	                var validation = Array.prototype.filter.call(forms, function (form) {
	                    form.addEventListener(
	                        "submit",
	                        function (event) {
	                            if (form.checkValidity() === false) {
	                                event.preventDefault();
	                                event.stopPropagation();
	                            }
	                            form.classList.add("was-validated");
	                        },
	                        false
	                    );
	                });
	            },
	            false
	        );
	    })();
	</script> -->


    <?php $__env->startPush('scripts'); ?>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.authentication.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ken\Downloads\Compressed\vihoadmin-10\viho_html_laravel\Viho-Laravel-8\theme\resources\views/login.blade.php ENDPATH**/ ?>