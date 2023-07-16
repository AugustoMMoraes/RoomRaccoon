<?php include '../app/views/message.view.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Item</title>
    <link rel="stylesheet" href="<?php echo ROOT; ?>/assets/css/shopping-item.css">
</head>
<body>
    <h2>Add New Item</h2>
    <div class="form-container">
        <form method="POST" action="<?php echo ROOT; ?>/shopping/addItem">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" step="0.01" name="price" id="price" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-primary">Add Item</button>
            </div>
        </form>
    </div>
</body>
</html>