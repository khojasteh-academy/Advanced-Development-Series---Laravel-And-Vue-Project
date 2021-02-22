<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Panel</title>

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
        <link rel="stylesheet" href="<?php echo e(mix('css/panel.css')); ?>">

    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>

        
         <script src="<?php echo e(mix('js/panel.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\Users\Mohammad Eskandari\Desktop\CMS Series\cms\Modules/Panel\Resources/views/layouts/master.blade.php ENDPATH**/ ?>