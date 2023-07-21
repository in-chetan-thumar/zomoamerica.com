
<?php $__env->startSection('title'); ?>
    Product
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>

    <body class="product-page">
        <div class="btcm">
            <div class="container">
                <div class="breadcrumbs d-flex align-items-center">
                    <a href="/">Home</a>
                    <span> » </span>
                    <span class="breadcrumb_last" aria-current="page">Wholesalers</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="wholesale-form-section">
                <div class="wholesale-form-left">
                    <p>Please fill out the wholesale account form below to register your business. Please note that all
                        fields are mandatory.</p>
                    <?php echo Form::open([
                        'url' => route('frontend.storeWholesale'),
                        'method' => 'POST',
                        'id' => 'wholesale-form',
                        'class' => 'inquery-form',
                    ]); ?>

                    <div class="input-field">
                        <label for="name">BUSINESS NAME:</label>
                        <?php echo Form::text('bname', old('bname'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Buisness Name',
                        ]); ?>

                        <span class="text-danger" style="font-size:15px">
                            <?php $__errorArgs = ['bname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                        <br>
                    </div>
                    <div class="cole-two">
                        <div class="input-field">
                            <label for="fist">FIRST NAME:</label>
                            <?php echo Form::text('fname', old('fname'), null, [
                                'class' => ' name',
                                'placeholder' => 'Your First Name',
                            ]); ?>

                            <span class="text-danger" style="font-size:15px">
                                <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                            <br>
                        </div>
                        <div class="input-field">
                            <label for="Last">LAST NAME:</label>
                            <?php echo Form::text('lname', old('lname'), null, [
                                'class' => ' name',
                                'placeholder' => 'Your Last Name',
                            ]); ?>

                            <span class="text-danger" style="font-size:15px">
                                <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </span>
                            <br>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="address">ADDRESS:</label>
                        <?php echo Form::text('address', old('address'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Address',
                        ]); ?>

                        <span class="text-danger" style="font-size:15px">
                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="city">CITY:</label>
                        <?php echo Form::text('city', old('city'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your City',
                        ]); ?>

                        <span class="text-danger" style="font-size:15px">
                            <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <?php echo e(Form::Select('state', $stateArray, '', ['class' => '', 'placeholder' => 'Select'])); ?>

                        <span class="text-danger" style="font-size:15px">
                            <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="zip">zip code:</label>
                        <?php echo Form::text('zipcode', old('zipcode'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your zipcode',
                        ]); ?>

                        <span class="text-danger" style="font-size:15px">
                            <?php $__errorArgs = ['zipcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="website">website:</label>
                        <?php echo Form::text('website', old('website'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Website',
                        ]); ?>

                        <span class="text-danger" style="font-size:15px">
                            <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="email">EMAIL ADDRESS:</label>
                        <?php echo Form::text('email', old('email'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Address',
                        ]); ?>

                        <span class="text-danger" style="font-size:15px">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                        <br>
                    </div>
                    <div class="input-field">
                        <label for="number">TELEPHONE NUMBER:</label>
                        <?php echo Form::text('number', old('number'), null, [
                            'class' => ' name',
                            'placeholder' => 'Your Number',
                        ]); ?>

                        <span class="text-danger" style="font-size:15px">
                            <?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                        <br>
                    </div>
                    <?php echo NoCaptcha::display(); ?>

                    <span class="text-danger" style="font-size:15px">
                        <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>

                    <div class="wrap-btn">
                        <input type="submit" class="btn-black" value="SEND">
                    </div>
                    <?php echo e(Form::close()); ?>


                </div>
                <div class="wholesale-form-right">
                    <strong>Wholesale Info</strong>
                    <p>Contact us directly for more information</p>
                    <ul>
                        <li><strong>Address:</strong> Zomo America <br>
                            138 Michigan Ave Paterson,<br>
                            NJ 07503</li>
                        <li><strong>Hours:</strong> Mon-Fri 11am to 6pm</li>
                        <li><strong>Phone:</strong> 1.201.778.0188</li>
                        <li><strong>Email:</strong> <a href="mailto:info@zomoamerica.com">info@zomoamerica.com</a></li>
                    </ul>
                    <br><a href="#">Authorized Wholesaler List</a>
                </div>
            </div>
        </div>
        <div class="footer-contact">
            <div class="infomation-footer-contact container">
                <div class="footer-contact-box">
                    <p class="title-in">Corporate</p>
                    <p> 704 North Valley Street Suite R&S Anaheim, CA 92801</p>
                </div>
                <div class="footer-contact-box">
                    <p class="title-in">Sales</p>
                    <a href="tel:18669523331">1-866-952-3331</a>
                    <a href="mailto:sales@zomousa.com">sales@zomousa.com</a>
                </div>
            </div>
        </div>
    <?php $__env->startSection('js'); ?>
        <?php echo JsValidator::formRequest('App\Http\Requests\Wholesale', '#wholesale-form'); ?>

        <?php echo NoCaptcha::renderJs(); ?>

    <?php $__env->stopSection(); ?>

</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\zomoamerica\www\resources\views/frontend/wholesale.blade.php ENDPATH**/ ?>