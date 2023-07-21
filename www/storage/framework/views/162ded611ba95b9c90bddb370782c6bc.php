  <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Pixel Code -->


    <meta charset="UTF-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>

    <meta name="format-detection" content="tel">
    <title> Best Fashion Photographer in Mumbai</title>
    <meta name="description" content="A Mumbai-based fashion photographer with a diverse work portfolio and client base across the world.">


  <meta http-equiv="X-UA-Compatible" content="IE=edge" >

  <?php echo $__env->yieldContent('css'); ?>
  <?php echo $__env->make('frontend.layouts.header-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
  <?php echo $__env->make('frontend.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- collpase menu for mobile end -->

  <?php echo $__env->yieldContent('main'); ?>

  <!-- footer section starts -->
  <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- footer section ends -->
  <?php echo $__env->make('frontend.layouts.footer-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('js'); ?>
  <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH D:\OSPanel\domains\zomoamerica\www\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>