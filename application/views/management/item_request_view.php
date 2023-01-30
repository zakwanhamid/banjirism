<table>
  <thead>
    <tr>
      <th>Item Request ID</th>
      <th>Item ID</th>
      <th>Comm ID</th>
      <th>Current Quantity</th>
      <th>Balance Quantity</th>
      <th>Quantity Request</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($item_requests as $item_request): ?>
    <tr>
      <td><?= $item_request->item_request_id ?></td>
      <td><?= $item_request->item_id ?></td>
      <td><?= $item_request->comm_id ?></td>
      <td><?= $item_request->current_quantity ?></td>
      <td><?= $item_request->balance_quantity ?></td>
      <td><?= $item_request->quantity_request ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  <a href="<?php echo base_url('item_request/Stock_item_comm/'); ?>" class="btn btn-outline-primary btn-lg mt-3">Click to Request</a>
</table>