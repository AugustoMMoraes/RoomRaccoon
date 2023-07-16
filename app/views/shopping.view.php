<?php
$this->buildView('includes/header');
$this->buildView('includes/navbar'); ?>

<link rel="stylesheet" href="assets/css/raccoon.css">

<div class="container">
  <h2 class="table-title">Shopping - Item List</h2>
  <button class="btn-view floatright js-item-add-popup fas fa-plus">Item</button>
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Description</th>
          <th>Checked</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($itemsList)) { ?>
          <tr>
            <td colspan="5">No items found.</td>
          </tr>
        <?php } else { ?>
          <?php foreach ($itemsList as $item) : ?>
            <tr data-id=<?php echo $item['id']; ?>>
              <td><?php echo escape($item['name']); ?></td>
              <td><?php echo $item['price']; ?></td>
              <td class="td-cap-lenght"><?php echo escape($item['description']); ?></td>
              <td><?php echo $item['is_checked'] ? 'Yes' : 'No'; ?></td>
              <td>
                <div class="actions">
                  <button class="btn-view fas fa-edit js-item-popup"></button>
                  <button class="btn-delete fas fa-trash" data-id="<?php echo $item['id']; ?>"></button>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Popup Wrapper -->
<div class="popup-wrapper" id="popupWrapper">
  <div class="popup-content">
    <button class="close-btn">&times;</button>
    <iframe id="popupIframe" class="popupIframe" frameborder="0"></iframe>
  </div>
</div>


<?php $this->buildView('includes/footer') ?>

<script type="text/javascript" src="assets/js/shopping.js"></script>