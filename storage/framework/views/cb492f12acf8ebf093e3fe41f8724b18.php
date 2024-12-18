<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white rounded shadow">
            <img src="<?php echo e(asset('storage/'.$blog->image)); ?>" alt="<?php echo e($blog->title); ?>" class="rounded-t">
            <div class="p-4">
                <h2 class="text-xl font-bold"><?php echo e($blog->title); ?></h2>
                <p class="text-gray-600"><?php echo Str::limit($blog->content, 100); ?></p>
                <a href="<?php echo e(route('blog.show', $blog->id)); ?>" class="text-blue-500 hover:underline">Read more</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/blog-site/resources/views/blog/index.blade.php ENDPATH**/ ?>