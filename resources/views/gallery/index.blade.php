<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/gallery.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>

<!-- Header Section -->
<div class="header">
    <div class="header-fixed">
        <span><a href="http://127.0.0.1:8000/homepage" style="text-decoration: none; color: white;">Gallery | ѕηαρѕнστ ⸜(｡˃ ᵕ ˂ )⸝♡</a></span>
    </div>
</div>

<div class="gallery-container">
    <div class="gallery">
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="gallery-item">
                <!-- Checks the stored image -->
                <?php if(strpos($image->filename, 'data:image') === 0): ?>
                    <img src="data:image/jpeg;base64,<?php echo e($image->filename); ?>" alt="Image" class="image-item" data-src="data:image/jpeg;base64,<?php echo e($image->filename); ?>">
                <?php else: ?>
                    <img src="<?php echo e(asset('storage/' . $image->filename)); ?>" alt="Image" class="image-item" data-src="<?php echo e(asset('storage/' . $image->filename)); ?>">
                <?php endif; ?>
                
                <!-- Open Button -->
                <a href="<?php echo e(route('gallery.show', $image->id)); ?>" style="text-decoration: none; color: white;" class="open-btn">Open</a>

                <p><?php echo e($image->description); ?></p>
                <p>Uploaded by: <?php echo e($image->username); ?></p>

                <!-- Delete Form -->
                <form action="<?php echo e(route('gallery.destroy', $image->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <div>
                        <a href="<?php echo e(route('gallery.edit', $image->id)); ?>" style="text-decoration: none; color: white;" class="edit-btn">Edit</a>
                    </div>
                    
                    <div class="form-group">
                        <label for="passcode">Passcode (4 digits):</label>
                        <input type="text" name="passcode" required maxlength="4" placeholder="Enter passcode to delete">
                    </div>

                    <!-- Delete button -->
                    <button type="submit">Delete</button>
                </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Devibar\resources\views/gallery/index.blade.php ENDPATH**/ ?>