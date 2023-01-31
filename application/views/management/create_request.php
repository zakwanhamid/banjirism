<section >
  <div id="create-form" class="container-lg"> 
    <h2>Add quantity to request</h2>
    <form action="<?= base_url()?>Status_comm/update" method="post">
      <div class="form-row">
      </div>
      <div class="mb-3">
        <label> Quantity request</label>
        <input type="text" class="form-control" name="quantity_request" placeholder="Add Quantity" value="<?= $item_request->quantity_request; ?>">
      </div>
      <input type="hidden" name="item_request_id" value="<?= $item_request->item_request_id; ?>">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section >