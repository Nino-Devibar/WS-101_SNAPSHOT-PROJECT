<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ѕηαρѕнστ</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/homepage.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Navbar Section -->
    <nav>
        <h1>Welcome to ѕηαρѕнστ (>ᴗ•) !</h1>
        <div class="nav-links">
            <a href="<?php echo e(route('gallery.index')); ?>">Gallery</a>
            <a href="<?php echo e(route('gallery.create')); ?>">Upload</a>
        </div>
    </nav>

    <!-- Header Section -->
    <header>
    <h1 style="font-family: 'Kaushan Script', cursive; font-size: 3rem; color: #333; margin: 0; line-height: 1.4;">
    A thousand untold stories, frozen in time—<br>where lies a canvas of memories.
</h1>
        <p class="msg">Let your memories be told, frame by frame.</p>
    </header>

    <!-- Upload button -->
    <div class="main-content">
        <div class="btn-container">
            <a href="<?php echo e(route('gallery.create')); ?>" class="btn upload-btn">Upload a Picture</a>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Snapshot. All Rights Reserved.</p>
    </footer>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\Devibar\resources\views/gallery/homepage.blade.php ENDPATH**/ ?>