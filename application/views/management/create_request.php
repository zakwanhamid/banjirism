<h2><?= $title;?> </h2>
<form action="<?= base_url()?>StatusComm/insertItem" method="post">
  <div class="form-row">
    <div class="col-lg-7">
      <select class="form-select my-3 px-4" name="item_name" id="identity" aria-label="Default select example">
        <option selected>Select Item Name</option>
        <?php foreach($item_name as $name) { ?>
        <option value="<?php echo $name->item_name; ?>"><?php echo $name->item_name; ?></option>
        <?php } ?>
        <!-- <option value="2">Clothes</option>
        <option value="3">First aid kit</option>
        <option value="4">Cleaning supplies</option>
        <option value="5">Toiletries</option>
        <option value="6">Others</option> -->
      </select>
    </div>
  </div>
  <div class="mb-3">
    <label>quantity request</label>
    <input type="text" class="form-control" name="quantity_request" placeholder="Add Item Name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>