<?php include '../app/views/message.view.php'; ?>

<!DOCTYPE html>
<link rel="stylesheet" href="<?php echo ROOT; ?>/assets/css/shopping-item.css">
<?php if ($item) { ?>
    <h2>Delete Item</h2>
    <div class="form-container">
        <form method="POST" action="<?php echo ROOT; ?>/shopping/deleteItem/<?php echo $item[0]->id; ?>">
            <p>Are you sure you want to delete this item?</p>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td><?php echo escape($item[0]->name); ?></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><?php echo $item[0]->price; ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td class="td-cap-size"><?php echo escape($item[0]->description); ?></td>
                </tr>
            </table>
            <div class="form-group">
                <button type="submit" class="btn-delete">Delete</button>
            </div>
        </form>
    </div>
<?php } else { ?>
    <div class="message">
        <p>Item deletion was successful, you can close this popup.</p>
    </div>
<?php } ?>