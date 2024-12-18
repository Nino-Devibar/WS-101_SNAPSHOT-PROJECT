<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Details</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/gallery.css')); ?>">
</head>
<body>

<!-- Header Section -->
<div class="header">
    <div class="header-fixed">
        <span><a href="http://127.0.0.1:8000/homepage" style="text-decoration: none; color: white;">Details | ѕηαρѕнστ ⸜(｡˃ ᵕ ˂ )⸝♡</a></span>
    </div>
</div>

    <!-- Displays the stored image -->
    <?php if(strpos($image->filename, 'data:image') === 0): ?>
        <img src="data:image/jpeg;base64,<?php echo e($image->filename); ?>" alt="Image" class="image-item">
    <?php else: ?>
        <img src="<?php echo e(asset('storage/' . $image->filename)); ?>" alt="Image" class="image-item">
    <?php endif; ?>

    <p class="desc"><?php echo e($image->description); ?></p>
    <p class="user1">Uploaded by: <?php echo e($image->username); ?></p>

    <!-- Close Button -->
    <button class="close-btn" onclick="window.history.back()">Close</button>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\Devibar\resources\views/gallery/show.blade.php ENDPATH**/ ?>