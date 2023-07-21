
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
                    <span class="breadcrumb_last" aria-current="page">Contact</span>
                </div>
            </div>
        </div>

        <div class="contact-us-section">

            <div class="container">
                <h5 class="title-main">CONTACT US</h5>
                <p class="sub-text">We would like to hear <b>about you </b>just send us a message!</p>
                <div class="content-infomation">
                    <div class="contact-form">
                        <p>LETS GET IN TOUCH!</p>
                        <?php echo Form::open([
                            'url' => route('frontend.storeContact'),
                            'method' => 'POST',
                            'id' => 'Enquery-top-form',
                            'class' => 'form-contact-us',
                        ]); ?>


                        <?php echo e(Form::text('email', old('email'), ['class' => '', 'placeholder' => 'Email'])); ?>

							<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<span class="text-danger" style="font-size:15px">
										<?php echo e($message); ?>

								</span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <?php echo e(Form::text('subject', old('subject'), ['class' => '', 'placeholder' => 'Subject'])); ?>

							<?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<span class="text-danger" style="font-size:15px">
										<?php echo e($message); ?>

								</span>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <?php echo e(Form::bsTextArea('', 'message', '', '', ['placeholder' => 'Message', 'class' => '', 'rows' => 10, 'cols' => '30'], [], false)); ?>

                        <div class="row">
                            <?php echo NoCaptcha::display(); ?>

                                <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger" style="font-size:15px">
                                    <?php echo e($message); ?>

                            </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <button type="submit">Send Message</button>
                        <?php echo e(Form::close()); ?>

                    </div>
                    <div class="map-infomation">
                        <div class="image-location">
                            <div class="icon">
                                <img src={{ asset('assets/frontend/images/location-icon.webp" alt="location">
                                                                                                                                           </div>
                                                                                                         <p>Location</p>
                                                                                                         </div>
                                                                                                         <div class="map-box">
                                                                                                         <iframe
                                                                                                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2141.127457838495!2d-54.6431055207775!3d-25.507287348071166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f68571c6f023c1%3A0x21c1ba001e986ac5!2sFlavors%20of%20Americas%20S.A.!5e0!3m2!1spt-BR!2spy!4v1572973947331!5m2!1spt-BR!2spy"
                                                                                                         width="600" height="350" frameborder="0" style="border: 0px; pointer-events: none;"
                                                                                                         allowfullscreen=""></iframe>
                                                                                                         </div>
                                                                                                        </div>
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
    <?php echo NoCaptcha::renderJs(); ?>

<?php $__env->stopSection(); ?>
     
                 </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\zomoamerica\www\resources\views/frontend/contact.blade.php ENDPATH**/ ?>