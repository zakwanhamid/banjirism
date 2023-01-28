<h2><?= $title;?> </h2>
<?php echo validation_errors(); ?>
<?php echo form_open("Supplies/create"); ?>
<form>
  <div class="mb-3">
    <label>Location</label>
    <input type="text" class="form-control" name="location_supplies" placeholder="Add Location">
  </div>
  <div class="mb-3">
    <label>Item</label>
    <input type="text" class="form-control" name="unit_item_supplies" placeholder="Add Item">
  </div>
  <div class="mb-3">
    <label>Phone Number</label>
    <input type="text" class="form-control" name="phone_number_supplies" placeholder="Add Phone Number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>