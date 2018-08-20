<?php $__env->startSection('title','Kbase'); ?>
<?php $__env->startSection('content'); ?>
<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                    <h3>Login<h3>
                    </a>
                </div>
                <div class="login-form">
                <?php if($errors->has('err_msg')): ?>
<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
  <?php echo e($errors->first('err_msg')); ?>

  </div>
<?php endif; ?>

                    <form action="/login_frm" method="post"  >
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="username">
                            <?php if($errors->has('username')): ?>
                           <p><?php echo e($errors->first('username')); ?></p>
                           <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <?php if($errors->has('password')): ?>
                          <p><?php echo e($errors->first('password')); ?></p>
                           <?php endif; ?>
                       </div>
                       
                        <div class="checkbox">
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="social-login-content">
                         <!--   <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>-->
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.without_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>