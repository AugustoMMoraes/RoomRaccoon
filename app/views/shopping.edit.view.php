<!DOCTYPE html>
<link rel="stylesheet" href="<?php echo ROOT; ?>/assets/css/shopping-item.css">
<?php include '../app/views/message.view.php'; ?>

<h2>Edit Item</h2>
<div class="form-container">
  <form method="POST" action="<?php echo ROOT; ?>/shopping/save">
    <input type="hidden" name="id" value="<?php echo $item[0]->id ?>">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value="<?php echo escape($item[0]->name) ?>">
    </div>

    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" step="0.01" name="price" id="price" value="<?php echo $item[0]->price ?>">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea name="description" id="description"><?php echo escape($item[0]->description) ?></textarea>
    </div>

    <div class="form-group">
      <label for="is_checked">Is Checked:</label>
      <input type="checkbox" name="is_checked" id="is_checked" <?php echo $item[0]->is_checked ? 'checked' : ''; ?>>
    </div>

    <div class="form-group">
      <label for="created_at">Created At:</label>
      <input type="text" name="created_at" id="created_at" value="<?php echo (new DateTime($item[0]->created_at))->format('d/m/Y H:i:s'); ?>" readonly disabled>
    </div>

    <button type="submit" class="btn-primary">Save Changes</button>
  </form>
</div>