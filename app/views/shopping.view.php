<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopping List</title>
	<link rel="stylesheet" href="assets/css/raccoon.css">
</head>
<body>
<div class="container">
    <div class="table-container">
        <h2 class="table-title">Table - Insert</h2>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Checked</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($itemsList as $item): ?>
                <tr>
                    <td><?php echo escape($item['name']); ?></td>
                    <td><?php echo escape($item['price']); ?></td>
                    <td><?php echo escape($item['description']); ?></td>
                    <td><?php echo escape($item['is_checked']) ? 'Yes' : 'No'; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="table-container">
        <h2 class="table-title">Table - Update</h2>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Checked</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($itemsList2 as $item): ?>
                <tr>
                    <td><?php echo escape($item['name']); ?></td>
                    <td><?php echo escape($item['price']); ?></td>
                    <td><?php echo escape($item['description']); ?></td>
                    <td><?php echo escape($item['is_checked']) ? 'Yes' : 'No'; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
	<div class="table-container">
        <h2 class="table-title">Table - Delete</h2>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Checked</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($itemsList3 as $item): ?>
                <tr>
                    <td><?php echo escape($item['name']); ?></td>
                    <td><?php echo escape($item['price']); ?></td>
                    <td><?php echo escape($item['description']); ?></td>
                    <td><?php echo escape($item['is_checked']) ? 'Yes' : 'No'; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>


