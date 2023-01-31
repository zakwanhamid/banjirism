
<section>
<p>User ID: <?php echo $this->session->userdata('loggedIn')['comm_id']; ?></p>
  <div class="container-lg">
    <div class="row">
      <div class="col-12 ">
        <div class="card ">
          <div class="card-body">
            <div class="table-responsive">
              <h2 class="mb-5">Request Item</h2>
              <table id="dtBasicExample" class="table table-striped table-bordered table-sm mt-2" cellspacing="0" width="100%">
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
                  <div class="card-body text-end py-4">
                    <a href="<?php echo base_url("Status_comm/edit/".$item_request->item_request_id."/".$item_request->item_id); ?>" class="btn btn-outline-primary btn-lg mt-3">Click to Request</a>
                  </div>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>