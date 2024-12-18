<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-4">
    <div class="bg-white rounded shadow p-6">
        <img src="<?php echo e(asset('storage/'.$blog->image)); ?>" alt="<?php echo e($blog->title); ?>" class="rounded">
        <h1 class="text-3xl font-bold mt-4"><?php echo e($blog->title); ?></h1>
        <p class="mt-4 text-gray-800"><?php echo $blog->content; ?></p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/blog-site/resources/views/blog/show.blade.php ENDPATH**/ ?>