<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="container h-100 mt-5">
    <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9 ">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h1 class="fs-4 card-title fw-bold mb-4 text-center">Login</h1>
                    <?php if(auth()->guard()->check()): ?>
                        Hi, <?php echo e(Auth::user()->name); ?>

                        <?php if(Session::get('mysession')): ?>
                            <div>
                                Your email is <?php echo e(Session::get('mysession')['email']); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Auth::user()->role == 'admin'): ?>{
                            <div>
                                <a href="/admin">Admin Page</a>
                            </div>
                        }
                        <?php elseif(Auth::user()->role == 'user'): ?>
                            <div>
                                <a href="/user">User Page</a>
                            </div>

                        <?php endif; ?>

                        <?php else: ?>
                        <form action="/login" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Enter Your Email" value="<?php echo e(Cookie::get('mycookie') !== null ? Cookie::get('mycookie') : ""); ?>" required autofocus>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Password</label>
                                    <input id="password" type="password" class="form-control" placeholder="Enter Your Password" name="password" required>
                                </div>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>

                            </div>

                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input" checked=<?php echo e(Cookie::get('mycookie') != null); ?>>
                                    <label for="remember" class="form-check-label">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <input type="submit" class="btn btn-outline-dark ms-auto" value="Login">
                            </div>
                            <p class="text-center text-muted mt-3">Don't have an account? <a href="/register"
                                class="fw-bold text-body"><u>Register here</u></a></p>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hanny/webprog-project/resources/views/login.blade.php ENDPATH**/ ?>