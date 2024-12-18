<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/upload.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Header Section -->
    <div class="header">
        <div class="header-fixed">
            <span><a href="http://127.0.0.1:8000/homepage" style="text-decoration: none; color: white;">Upload | ѕηαρѕнστ</a></span> <!-- Your custom header text -->
        </div>
    </div>

    <h1>
    <h1>ദ്ദി(˵ •̀ ᴗ - ˵ ) ✧</h1>

    <!-- Upload Container -->
    <div class="upload-container">
        <h2>Upload Your Image </h2>

        <form action="<?php echo e(route('gallery.store')); ?>" method="POST" enctype="multipart/form-data" id="uploadForm">
            <?php echo csrf_field(); ?>

            <!-- Username Field -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?php echo e(old('username')); ?>" required maxlength="16">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Passcode Field -->
            <div class="form-group">
                <label for="passcode">Passcode (4 digits):</label>
                <input type="text" name="passcode" value="<?php echo e(old('passcode')); ?>" required maxlength="4">
                <?php $__errorArgs = ['passcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Image Field -->
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" accept="image/*" required id="imageInput">
                <input type="hidden" name="image" id="base64Image">
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Description Field -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" required maxlength="250"><?php echo e(old('description')); ?></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit">Upload</button>
        </form>
    </div>

    <script>
    // JavaScript to convert image to Base64
    document.getElementById('imageInput').addEventListener('change', function(e) {
        var reader = new FileReader();
        reader.onloadend = function() {
            document.getElementById('base64Image').value = reader.result; // Store the image
        };
        if (e.target.files[0]) {
            reader.readAsDataURL(e.target.files[0]); // Convert image to Base64
        }
    });
    </script>

</body>
</html>
<?php /**PATH D:\xampp\htdocs\Devibar\resources\views/gallery/create.blade.php ENDPATH**/ ?>