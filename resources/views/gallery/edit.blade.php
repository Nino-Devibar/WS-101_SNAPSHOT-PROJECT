<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Image</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/edit.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Header Section -->
    <div class="header">
        <div class="header-fixed">
            <span><a href="<?php echo e(route('gallery.index')); ?>" style="text-decoration: none; color: white;">Edit | ѕηαρѕнστ</a></span>
        </div>
    </div>

    <h1>≽^•⩊•^≼</h1>

    <!-- Display Alert Message if Passcode is Incorrect -->
    <?php if($errors->has('passcode')): ?>
    <div class="alert alert-danger">
        <?php echo e($errors->first('passcode')); ?>

    </div>
    <?php endif; ?>

    <!-- Edit Form Container -->
    <div class="edit-form-container">
        <form action="<?php echo e(route('gallery.update', $image->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Simulate the PUT method -->

            <!-- Passcode Field -->
            <label for="passcode">Enter passcode to edit:</label>
            <input type="text" name="passcode" required maxlength="4">

            <!-- Description Field -->
            <label for="description">Description:</label>
            <textarea name="description"><?php echo e($image->description); ?></textarea>

            <!-- Submit Button -->
            <button type="submit">Update</button>
        </form>
    </div>

</body>
</html>
