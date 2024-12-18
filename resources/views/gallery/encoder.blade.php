<!-- resources/views/encoder.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base64 Encoder</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/homepage.css')); ?>">
</head>
<body>

    <nav>
        <h1>ѕηαρѕнστ</h1>
        <div class="nav-links">
            <a href="<?php echo e(route('gallery.index')); ?>">Gallery</a>
            <a href="<?php echo e(route('gallery.create')); ?>">Upload</a>
        </div>
    </nav>

    <div class="main-content">
        <h2>Base64 Encoder</h2>
        
        <!-- Form for uploading an image or text to encode -->
        <form action="<?php echo e(url('/encode')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <label for="image">Upload an Image to Encode:</label>
            <input type="file" name="image" id="image">

            <p>Or</p>

            <label for="text">Enter Text to Encode:</label>
            <textarea name="text" id="text" rows="4" placeholder="Enter your text here"></textarea>

            <button type="submit">Encode</button>
        </form>

        <?php if(isset($encodedData)): ?>
            <h3>Encoded Data:</h3>
            <textarea rows="8" cols="80"><?php echo e($encodedData); ?></textarea>
        <?php endif; ?>
    </div>

    <footer>
        <p>&copy; 2024 E-Gallery. All Rights Reserved.</p>
    </footer>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\Devibar\resources\views/gallery/encoder.blade.php ENDPATH**/ ?>