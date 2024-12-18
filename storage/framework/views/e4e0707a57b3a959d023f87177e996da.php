<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">My Blog</h1>
        </div>
    </header>
    <main class="py-6">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="bg-gray-800 text-white p-4">
        <div class="container mx-auto text-center">
            &copy; 2024 My Blog. All rights reserved.
        </div>
    </footer>
</body>
</html>
<?php /**PATH /var/www/html/blog-site/resources/views/layouts/app.blade.php ENDPATH**/ ?>