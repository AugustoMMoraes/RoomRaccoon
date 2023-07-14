<!--leaving the style here for now, need to sort the Iframe loading 'shopping-item.css' -->
<style>
    .form-group {
  margin-bottom: 5px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="number"],
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="checkbox"] {
  margin-top: 5px;
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}
</style>

<h2>Edit Item</h2>
<div class="form-container">
  <form method="POST" action="shopping/edit">
    <input type="hidden" name="id" value="<?php echo $item[0]->id ?>">

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value="<?php echo $item[0]->name ?>">
    </div>

    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" step="0.01" name="price" id="price" value="<?php echo $item[0]->price ?>">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea name="description" id="description"><?php echo $item[0]->description ?></textarea>
    </div>

    <div class="form-group">
      <label for="is_checked">Is Checked:</label>
      <input type="checkbox" name="is_checked" id="is_checked" <?php echo $item[0]->is_checked ? 'checked' : ''; ?> >
    </div>

    <div class="form-group">
      <label for="created_at">Created At:</label>
      <input type="text" name="created_at" id="created_at" value="<?php echo $item[0]->created_at ?>" readonly>
    </div>

    <button type="submit">Save Changes</button>
  </form>
</div>